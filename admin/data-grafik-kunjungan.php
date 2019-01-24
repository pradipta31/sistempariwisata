
<?php
    include 'app-atas.php';
  $connect = new PDO("mysql:host=localhost;dbname=sistem_pariwisata", "root", "");
  $year = date('Y');
  if(isset($_GET['tahun'])){
    $year = $_GET['tahun'];
  }
//   $sql = mysqli_query($connect, "SELECT * FROM laporan");
//   $rowss = mysqli_fetch_assoc($sql);
//   $fetchRow = $rowss['id_wisata'];

  $qGetDate = "SELECT DISTINCT tahun FROM laporan ORDER BY tahun ASC";

  $qGetChartByYear = "SELECT SUM(jumlah_kunjungan) AS a FROM laporan WHERE tahun LIKE '$year%' AND asal = 'lokal' OR asal = 'internasional'";

  $rChart = $connect->query($qGetChartByYear);

  $statement = $connect->prepare($qGetDate);
  // $statement = $connect->prepare($qGetChartByYear);
  $statement->execute();

  $result = $statement->fetchAll();


?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Data Booking Wisata</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Booking Wisata</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="col-md-4">
                    <div class="form-group">
                        <form class="" action="" method="GET" id="frmTahun" name="frmTahun">
                            <select class="form-control" name="tahun" id="getData">
                            <option>-- Pilih Tahun --</option>
                            <?php
                            foreach($result as $row)
                            {
                            $date = $row['tahun'];
                            echo '<option value="'.$date.'">'.$date.'</option>';
                            }
                            ?>
                        </select>
                        </form>
                    </div>
                    </div>
                  </div>
                  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
window.onload = function () {
  var y = JSON.parse('<?php echo json_encode($rChart->fetch(PDO::FETCH_ASSOC)); ?>');
  var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Crude Oil Reserves vs Production, 2016"
	},	
	axisY: {
		title: "Jumlah Pengunjung",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Lokal",
		legendText: "Lokal",
		showInLegend: true, 
		dataPoints:[
			{ label: "Saudi", y: <?= $rChart; ?>},
			{ label: "Venezuela", y: 302.25 },
			{ label: "Iran", y: 157.20 },
			{ label: "Iraq", y: 148.77 },
			{ label: "Kuwait", y: 101.50 },
			{ label: "UAE", y: 97.8 }
		]
	},
	{
		type: "column",	
		name: "Internasional",
		legendText: "Internasional",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:[
			{ label: "Saudi", y: 10.46 },
			{ label: "Venezuela", y: 2.27 },
			{ label: "Iran", y: 3.99 },
			{ label: "Iraq", y: 4.45 },
			{ label: "Kuwait", y: 2.92 },
			{ label: "UAE", y: 3.1 }
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
<?php
  include 'app-bawah.php';
?>
