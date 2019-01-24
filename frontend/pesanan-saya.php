<?php
  include 'app-atas.php';
  include 'koneksi.php';
  session_start();
  $id_pengunjung = ( isset($_SESSION['id_pengunjung']) ) ? $_SESSION['id_pengunjung'] : '';
  $query = mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE id_pengunjung = '$id_pengunjung'");
  $row = mysqli_fetch_assoc($query);
  $email = $row['email'];
?>
  <?php include 'navigation-pengunjung.php'; ?>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
          <br>
          <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Wisata</th>
                <th scope="col">Tanggal Pesanan</th>
                <th scope="col">Pax</th>
                <th scope="col">Tanggal Pesan</th>
                <th scope="col">Bukti Transfer</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                $query1 = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE email = '$email'");
                while($rows = mysqli_fetch_assoc($query1)){
                    $id_wisata = $rows['id_wisata'];
                    $query2 = mysqli_query($koneksi, "SELECT * FROM wisata WHERE id_wisata = '$id_wisata'");
                    $rowss = mysqli_fetch_assoc($query2);
            ?>
            <?php
                if(mysqli_num_rows($query1) != 0){
            ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $rowss['nama']; ?></td>
                    <td><?= $rows['tgl_pesanan']; ?></td>
                    <td><?= $rows['pax']; ?></td>
                    <td><?= $rows['tanggal']; ?></td>
                    <td>
                      <?php
                        if ($rows['bukti_tf'] != null) {
                      ?>
                        <a href="images/<?=$rows['bukti_tf']?>" class="btn btn-success">Lihat Bukti Transfer</a>
                      <?php
                        }else{
                      ?>
                            <a href="upload-bukti-transfer.php?id_pemesanan=<?php echo "$rows[id_pemesanan]";?>" class="btn btn-primary btn-sm">Upload Bukti Transfer</a>
                      <?php
                          }
                      ?>

                    </td>
                    <td>
                    <?php
                        if($rows['status'] == 'nothing'){
                        ?>
                            <span class="alert alert-warning">Belum Disetujui</span>
                        <?php
                        }elseif($rows['status'] == 'not_approved'){ ?>
                            <span class="alert alert-danger">Tidak Disetujui</span>
                        <?php
                        }elseif($rows['status'] == 'approved'){ ?>
                            <span class="alert alert-success">Disetujui</span>
                        <?php
                        }
                    ?>
                    </td>
                </tr>
                <?php
                }else{
                    echo "<span class='alert alert-warning>Anda belum memesan tempat wisata!</span>";
                }
            }
            ?>
            </tbody>
            </table>
            <h6>NB : Jika pesanan telah disetujui oleh admin, maka agent akan memberi tahu melalui telepon atau sms sehari sebelum pemesanan</h5>
            <br>
            <br>
            <br>
        </div>
    </div>
    </div>
  <?php include 'footer.php'; ?>
  <?php include 'app-bawah.php'; ?>
