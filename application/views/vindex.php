<!DOCTYPE html>
<html>
  <head>
    <title>World population</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style.css">
  </head>
  <body>
    <div class="wrapper">
      <h1>World population over time</h1>
      <h2>Number of people (in millions) living on earth, the last 500 years</h2>

<canvas id="myChart" width="200" height="200"></canvas>   
 </div>

    <script>
var ctx = document.getElementById("myChart").getContext('2d');
var densityData = {
  label: '<?php echo $one;?>',
  data: [<?php echo $result1; ?>],
  backgroundColor: [
    'rgba(0, 99, 132, 0.6)',
  ],
  borderColor: [
    'rgba(0, 99, 132, 1)',
  ],
  borderWidth: 2,
  hoverBorderWidth: 0
};

var densityData2 = {
  label: '<?php echo $two;?>',
  data: [<?php echo $result2; ?>],
  backgroundColor: [
    'rgba(240, 99, 132, 0.6)'
  ],
  borderColor: [
    'rgba(240, 99, 132, 1)'
  ],
  borderWidth: 2,
  hoverBorderWidth: 0
};
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Jumlah Siswa/Tahun"],
        datasets: [densityData,densityData2]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
    </script>
  </body>
</html>
