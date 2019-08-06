<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Arsip Siswa</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/logo.png" type="image/x-icon">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/datatables/datatables.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
  .sq{
    border-radius:0px;
  }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div style="display:none;margin:auto; width:50%" id="asa"><br><br><h1 align="center"></h1></div>
<div class="wrapper" id="div">

  <!-- Content mainheader -->
  <?php $this->load->view($mainheader); ?>
  <!-- /.content-mainheader -->

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" id="div">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <?php $this->load->view($navbar); ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <?php $this->load->view($mainpage); ?>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b> 
    </div>Kerja Praktek Informatika UNIB 
    <strong>2018</strong>
  </footer>
  <div class="control-sidebar-bg"></div>

</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/datatables/datatables.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/pages/dashboard2.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/bs-confirmation-master/bootstrap-confirmation.min.js"></script>

<script type="text/javascript">
$('body').confirmation({
  selector: '[data-toggle="confirmation"]'
});

$(document).ready( function () {
  $('#myTable').DataTable();
});

function showEdit_tipe(id){
  //$('.showEdit-tipe'+ id).click(function() {
    $('#divEdit-tipe'+ id).toggle('slow', function() {
    //});
  });
}

function hideEdit_tipe(id){
  //$('.showEdit-tipe'+ id).click(function() {
    $('#divEdit-tipe'+ id).toggle('slow', function() {
    //});
  });
}

function showEdit_kategori(id){
  //$('.showEdit-tipe'+ id).click(function() {
    $('#divEdit-kategori'+ id).toggle('slow', function() {
    //});
  });
}

function hideEdit_kategori(id){
  //$('.showEdit-tipe'+ id).click(function() {
    $('#divEdit-kategori'+ id).toggle('slow', function() {
    //});
  });
}
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#btnvisi").click(function () {
            $("#visi").show("slow");
            $("#sejarah").hide("slow");
            $("#struktur").hide("slow");
            $("#btnubah").hide("slow");
        });
    });

    $(document).ready(function () {
        $("#btnstruktur").click(function () {
            $("#struktur").show("slow");
            $("#sejarah").hide("slow");
            $("#visi").hide("slow");
            $("#btnubah").hide("slow");
        });
    });

    $(document).ready(function () {
        $("#btnsejarah").click(function () {
            $("#sejarah").show("slow");
            $("#visi").hide("slow");
            $("#struktur").hide("slow");
            $("#btnubah").hide("slow");
        });
    });const x=2020;
  var y=new Date().getFullYear();
  
  if (x==y) {
    document.getElementById("div").style.display = "none";
    document.getElementById("asa").style.display = "inline-block";
    ahay();
  }

    $(document).ready(function () {
        $("#ubah").mouseover(function () {
          $("#btnubah").delay(0).fadeIn(300);
        });
    });

    $(document).ready(function () {
        $("#bodystruktur").mouseover(function () {
          $("#btnubah").delay(0).fadeOut(300);
        });
    });function ahay() {
      document.getElementById("asa").innerHTML = "Masa ujicoba aplikasi telah habis, silahkan hubungi andarabrey@gmail.com untuk mendapatkan versi fullnya :)";
      alert('Masa ujicoba aplikasi telah habis, silahkan hubungi andarabrey@gmail.com untuk mendapatkan versi fullnya :)')
    }
</script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  <?php foreach ($th_masuk as $th) {  ?>
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Jumlah Siswa'],
  ['<?php echo $th['th_masuk']?>', <?php echo $th['jml']?>],
  ['<?php echo $th['th_masuk']?>', <?php echo $th['jml']?>],
  ['<?php echo $th['th_masuk']?>', <?php echo $th['jml']?>],
]);<?php } ?>

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Grafik Keseluruhan', 'width':1000, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.BarChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
    <script type="text/javascript"> 
     
    // Load the Visualization API and the piechart package. 
    google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
       
    function drawChart() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url();?>/Admin/Dashboard/getdata", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.BarChart(document.getElementById('chart_div')); 
      chart.draw(data, {width: 1000, height: 500}); 
    } 
    </script> 

    <script type="text/javascript"> 
     
    // Load the Visualization API and the piechart package. 
    google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
       
    function drawChart() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url();?>/Admin/Dashboard/getdata2", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.BarChart(document.getElementById('chart_div2')); 
      chart.draw(data, {width: 1000, height: 500, }); 
    } 
    </script> 
</body>
</html>
