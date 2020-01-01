// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Nunito"),
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

// Pie Chart Example
var porcientos = JSON.parse(document.getElementById("porcientosData").value);
var recaudacionSemestral = JSON.parse(
  document.getElementById("semestresData").value
);
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: "doughnut",
  data: {
    labels: ["Ene - Jun", "Jul - Dic"],
    datasets: [
      {
        data: [
          recaudacionSemestral["primerSemestre"],
          recaudacionSemestral["segundoSemestre"]
        ],
        backgroundColor: ["#4e73df", "#1cc88a"],
        hoverBackgroundColor: ["#2e59d9", "#17a673"],
        hoverBorderColor: "rgba(234, 236, 244, 1)"
      }
    ]
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: "#dddfeb",
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10
    },
    legend: {
      display: false
    },
    cutoutPercentage: 60
  }
});
