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

// Bar Chart Example
var kilometers = JSON.parse(document.getElementById("kilometersData").value);
var labels = JSON.parse(document.getElementById("omnibusNumbers").value);
var colors = [];
kilometers.forEach(kmValue => {
  if (kmValue < 200) {
    colors = [...colors, "#FF0010"];
  } else if (kmValue < 300) {
    colors = [...colors, "#FF1400"];
  } else if (kmValue < 400) {
    colors = [...colors, "#FF3c00"];
  } else if (kmValue < 500) {
    colors = [...colors, "#FF6400"];
  } else if (kmValue < 600) {
    colors = [...colors, "#FF8200"];
  } else if (kmValue < 700) {
    colors = [...colors, "#FFaa00"];
  } else if (kmValue < 800) {
    colors = [...colors, "#FFe600"];
  } else if (kmValue < 900) {
    colors = [...colors, "#d7ff00"];
  } else if (kmValue < 1000) {
    colors = [...colors, "#00ff10"];
  } else if (kmValue < 1100) {
    colors = [...colors, "#00ff83"];
  } else if (kmValue < 1200) {
    colors = [...colors, "#00fff4"];
  } else if (kmValue < 1300) {
    colors = [...colors, "#00a4ff"];
  } else if (kmValue < 1400) {
    colors = [...colors, "#0074ff"];
  } else if (kmValue < 1500) {
    colors = [...colors, "#0012ff"];
  } else {
    colors = [...colors, "#0500ff"];
  }
});

var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: "bar",
  data: {
    labels: labels,
    datasets: [
      {
        label: "Kilómetros",
        backgroundColor: colors,
        hoverBackgroundColor: "#2e59d9",
        borderColor: "#4e73df",
        data: kilometers
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
            unit: "Omnibus"
          },
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            maxTicksLimit: 6
          },
          maxBarThickness: 25
        }
      ],
      yAxes: [
        {
          ticks: {
            min: 0,
            maxTicksLimit: 5,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
              return number_format(value) + " km";
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
      titleMarginBottom: 10,
      titleFontColor: "#6e707e",
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: "#dddfeb",
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        title: function(tooltipItem, data) {
          return "Ómnibus " + data.labels[tooltipItem[0].index];
        },
        label: function(tooltipItem, chart) {
          var datasetLabel =
            chart.datasets[tooltipItem.datasetIndex].label || "";
          return datasetLabel + ": " + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});
