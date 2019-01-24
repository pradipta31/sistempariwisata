<?php 
    include 'app-atas.php'; 
    include 'config.php';
    $connect = new PDO("mysql:host=localhost;dbname=sistem_pariwisata", "root", "");
    $year = date('Y');
    if(isset($_GET['tahun'])){
        $year = $_GET['tahun'];
    }
    $qGetDate = "SELECT DISTINCT tahun FROM laporan WHERE id_wisata='20'";

    $qGetChartByYear = "SELECT id_laporan,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '01' AND id_wisata='20') AS a,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '02' AND id_wisata='20') AS b,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '03' AND id_wisata='20') AS c,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '04' AND id_wisata='20') AS d,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '05' AND id_wisata='20') AS e,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '06' AND id_wisata='20') AS f,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '07' AND id_wisata='20') AS g,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '08' AND id_wisata='20') AS h,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '09' AND id_wisata='20') AS i,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '10' AND id_wisata='20') AS j,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '11' AND id_wisata='20') AS k,
    (SELECT SUM(jumlah_kunjungan) FROM laporan WHERE bulan = '12' AND id_wisata='20') AS l FROM laporan WHERE tahun LIKE '$year'";

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
            <h3 class="text-primary">Grafik Wisata</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Tempat WIsata</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-primary">
                    <div class="card-body">
                        <!-- <form class="" action="" method="GET" id="frmTahun" name="frmTahun">
                            <select class="form-control" name="tahun" id="getData">
                            <option>-- Pilih Tahun --</option> -->
                            <!-- <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option> -->
                            <?php
                            // foreach($result as $row)
                            // {
                            // $date = $row['tahun'];
                            // echo '<option value="'.$date.'">'.$date.'</option>';
                            // }
                            ?>
                            <!-- </select> -->
                        </form>
                        <canvas id="chart" height="115px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script>
    $(function(){
    var dataChart = JSON.parse('<?php echo json_encode($rChart->fetch(PDO::FETCH_ASSOC)); ?>');
    var ctx = document.getElementById('chart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],
            datasets: [{
                label: "Data Wilayah",
                backgroundColor: 'rgb(35, 13, 143)',
                borderColor: 'rgb(35, 13, 143)',
                data: [dataChart['a'],dataChart['b'],dataChart['c'],dataChart['d'],
                  dataChart['e'],dataChart['f'],dataChart['g'],dataChart['h'],dataChart['i'],
                  dataChart['j'],dataChart['k'],dataChart['l']],
            }]
        },

        // Configuration options go here
        options: {}
    });
    });
    $('#getData').change(function(){
    $('#frmTahun').submit();
    });
</script>
<?php include 'app-bawah.php'; ?>