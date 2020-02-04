// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Nunito"),
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + "").replace(",", "").replace(" ", "");
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
    dec = typeof dec_point === "undefined" ? "." : dec_point,
    s = "",
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return "" + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || "").length < prec) {
    s[1] = s[1] || "";
    s[1] += new Array(prec - s[1].length + 1).join("0");
  }
  return s.join(dec);
}

// Area Chart Example
var recaudacionAnual = JSON.parse(
  document.getElementById("recaudacionData").value
);
const dataPoints = forecast(recaudacionAnual, 1, 0, 0, 12, 12);

const cards = document.getElementsByClassName("recaudacion-card");
const values = dataPoints.slice(36);

cards[0].innerHTML = `${values[0].toFixed(2)} mil`;
cards[1].innerHTML = `${values[1].toFixed(2)} mil`;
cards[2].innerHTML = `${values[2].toFixed(2)} mil`;
cards[3].innerHTML = `${values[3].toFixed(2)} mil`;
cards[4].innerHTML = `${values[4].toFixed(2)} mil`;
cards[5].innerHTML = `${values[5].toFixed(2)} mil`;
cards[6].innerHTML = `${values[6].toFixed(2)} mil`;
cards[7].innerHTML = `${values[7].toFixed(2)} mil`;
cards[8].innerHTML = `${values[8].toFixed(2)} mil`;
cards[9].innerHTML = `${values[9].toFixed(2)} mil`;
cards[10].innerHTML = `${values[10].toFixed(2)} mil`;
cards[11].innerHTML = `${values[11].toFixed(2)} mil`;

var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "Ene",
      "Feb",
      "Mar",
      "Abr",
      "May",
      "Jun",
      "Jul",
      "Ago",
      "Sep",
      "Oct",
      "Nov",
      "Dic"
    ],
    datasets: [
      {
        label: "Pronóstico",
        lineTension: 0.3,
        backgroundColor: "rgba(78, 115, 223, 0.05)",
        borderColor: "rgba(78, 115, 223, 1)",
        pointRadius: 3,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 3,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        pointBorderWidth: 2,
        data: dataPoints.slice(36)
      }
    ]
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [
        {
          time: {
            unit: "date"
          },
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            maxTicksLimit: 7
          }
        }
      ],
      yAxes: [
        {
          scaleLabel: {
            display: true,
            labelString: "Miles de pesos",
            fontSize: 14
          },
          ticks: {
            maxTicksLimit: 5,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
              return "$" + number_format(value);
            }
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          }
        }
      ]
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: "#6e707e",
      titleFontSize: 14,
      borderColor: "#dddfeb",
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: "index",
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel =
            chart.datasets[tooltipItem.datasetIndex].label || "";
          return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

/* Holt-Winters triple exponential smoothing
 * see: http://www.itl.nist.gov/div898/handbook/pmc/section4/pmc435.htm
 *
 * @param {array} data input data (Float64Array)
 * @param {number} alpha overall smoothing parameter (float)
 * @param {number} beta seasonal smoothing parameter (float)
 * @param {number} gamma trend smoothing parameter (float)
 * @param {number} period (int)
 * @param {number} m how many periods to forecast ahead (int)
 *
 * @return {Float64Array}
 */
function forecast(data, alpha, beta, gamma, period, m) {
  var seasons, seasonal;

  if (!validArgs(data, alpha, beta, gamma, period, m)) return;

  seasons = data.length / period;
  st_1 = data[0];
  bt_1 = initialTrend(data, period);
  seasonal = seasonalIndices(data, period, seasons);

  return calcHoltWinters(
    data,
    st_1,
    bt_1,
    alpha,
    beta,
    gamma,
    seasonal,
    period,
    m
  );
}

function validArgs(data, alpha, beta, gamma, period, m) {
  if (!data.length) return false;
  if (m <= 0) return false;
  if (m > period) return false;
  if (alpha < 0.0 || alpha > 1.0) return false;
  if (beta < 0.0 || beta > 1.0) return false;
  if (gamma < 0.0 || gamma > 1.0) return false;
  return true;
}

function initialTrend(data, period) {
  var sum = 0;
  for (var i = 0; i < period; i++) {
    sum += data[period + i] - data[i];
  }
  return sum / (period * period);
}

function seasonalIndices(data, period, seasons) {
  var savg, obsavg, si, i, j;

  savg = Array(seasons);
  obsavg = Array(data.length);

  si = Array(period);

  // zero-fill savg[] and si[]
  for (i = 0; i < seasons; i++) {
    savg[i] = 0.0;
  }
  for (i = 0; i < period; i++) {
    si[i] = 0.0;
  }

  // seasonal averages
  for (i = 0; i < seasons; i++) {
    for (j = 0; j < period; j++) {
      savg[i] += data[i * period + j];
    }
    savg[i] /= period;
  }
  // averaged observations
  for (i = 0; i < seasons; i++) {
    for (j = 0; j < period; j++) {
      obsavg[i * period + j] = data[i * period + j] / savg[i];
    }
  }
  // seasonal indices
  for (i = 0; i < period; i++) {
    for (j = 0; j < seasons; j++) {
      si[i] += obsavg[j * period + i];
    }
    si[i] /= seasons;
  }

  return si;
}

function calcHoltWinters(
  data,
  st_1,
  bt_1,
  alpha,
  beta,
  gamma,
  seasonal,
  period,
  m
) {
  var len = data.length,
    st = Array(len), // overall smoothing component
    bt = Array(len), // trend smoothing component
    it = Array(len), // seasonal smoothing component
    ft = Array(len), // generated forecast
    i; // reusable idx

  // initial level st[1] == st_1 == data[0] ... see function forecast()
  st[1] = st_1;
  // initial trend bt[1] == bt_1 == initialTrend(data, period) ... see function forecast()
  bt[1] = bt_1;

  // zero-fill ft[] (to clean up undefined values at start of forecast array --i.e. ft[])
  for (i = 0; i < len; i++) {
    ft[i] = 0.0;
  }

  // initial seasonal indices it[]
  for (i = 0; i < period; i++) {
    it[i] = seasonal[i];
  }

  for (var i = 2; i < len; i++) {
    // overall level smoothing component st[]
    if (i - period >= 0) {
      st[i] =
        (alpha * data[i]) / it[i - period] +
        (1.0 - alpha) * (st[i - 1] + bt[i - 1]);
    } else {
      st[i] = alpha * data[i] + (1.0 - alpha) * (st[i - 1] + bt[i - 1]);
    }

    // trend smoothing component bt[]
    bt[i] = gamma * (st[i] - st[i - 1]) + (1 - gamma) * bt[i - 1];

    // seasonal smoothing component it[]
    if (i - period >= 0) {
      it[i] = (beta * data[i]) / st[i] + (1.0 - beta) * it[i - period];
    }

    // generate forecast as ft[]
    if (i + m >= period) {
      ft[i + m] = (st[i] + m * bt[i]) * it[i - period + m];
    }
  }

  // -> forecast[]
  return ft;
}
