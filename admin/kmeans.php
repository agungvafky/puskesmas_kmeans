<?php include "koneksi.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include('partial2/head.php'); ?>
</head>

<body>
    <?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['id']==""){
        header("location:index.php?pesan=gagal");
    }
 
    ?>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        
            <?php include('partial2/topbar.php'); ?>
        </div>
        <!--**********************************
            topbar end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
           <?php include('partial2/sidebar.php'); ?>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Klaterisasi dengan K-Means</h4>
                                Jumlah Keluhan =
                                <?php
                                      include "koneksi.php";


                                    $datat = mysqli_query($koneksi,"select * from tampil ");
                                    $dat = mysqli_fetch_array($datat);
                                    $tahun=$dat['tahun'];
                    
                                    mysqli_query($koneksi, "truncate jarak");
                                      $datad = mysqli_query($koneksi,"select count(id_keluhan) as jumlah from keluhan ");
                                        while($data = mysqli_fetch_array($datad)){
                                      echo $data['jumlah'];
                                      }
                                      ?> 
                                       <form action="proses.php" method="POST">
                                    <p align="right">
                                        <button type="submit" name="iterasi" class="btn mb-1 btn-flat btn-outline-primary"></i>Iterasi</button>
                                    </p>
                                <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Keluhan</th>
                                                <th>Januari</th>
                                                <th>Februari</th>
                                                <th>Maret</th>
                                                <th>April</th>
                                                <th>Mei</th>
                                                <th>Juni</th>
                                                <th>July</th>
                                                <th>Agustus</th>
                                                <th>September</th>
                                                <th>Oktober</th>
                                                <th>November</th>
                                                <th>Desember</th>
                                               
                                            </tr>
                                        </thead>
                                   
                                        <tbody>
                                    <?php
                                      include "koneksi.php";
                                      $no=1;
                                      $datad = mysqli_query($koneksi,"select * from keluhan join rekap on keluhan.id_keluhan=rekap.id_keluhan where tahun='$tahun'");
                                        while($data = mysqli_fetch_array($datad)){
                                      
                                      ?>
                                            <tr>
                                                <td width="10%"><?php echo $no;?>
                                                     <input type="hidden" name="id_keluhan[]" value="<?= $data['id_keluhan']; ?>">


                                                </td>

                                                <td>
                                                  <?= $data['nama_keluhan']; ?>

                                                  <input type="hidden" name="nama_keluhan[]" value="<?= $data['nama_keluhan']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['januari']; ?>
                                                  <input type="hidden" name="januari[]" value="<?= $data['januari']; ?>">
                                                </td>
                                                 <td>
                                                  <?= $data['februari']; ?>
                                                  <input type="hidden" name="februari[]" value="<?= $data['februari']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['maret']; ?>
                                                  <input type="hidden" name="maret[]" value="<?= $data['maret']; ?>">
                                                </td>
                                                 <td>
                                                  <?= $data['april']; ?>
                                                  <input type="hidden" name="april[]" value="<?= $data['april']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['mei']; ?>
                                                  <input type="hidden" name="mei[]" value="<?= $data['mei']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['juni']; ?>
                                                  <input type="hidden" name="juni[]" value="<?= $data['juni']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['july']; ?>
                                                  <input type="hidden" name="july[]" value="<?= $data['july']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['agustus']; ?>
                                                  <input type="hidden" name="agustus[]" value="<?= $data['agustus']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['september']; ?>
                                                  <input type="hidden" name="september[]" value="<?= $data['september']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['oktober']; ?>
                                                  <input type="hidden" name="oktober[]" value="<?= $data['oktober']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['november']; ?>
                                                  <input type="hidden" name="november[]" value="<?= $data['november']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['desember']; ?>
                                                  <input type="hidden" name="desember[]" value="<?= $data['desember']; ?>">
                                                </td>

                                              </tr>
                                             <?php $no++; } ?>
                                        </tbody>
                                   
                                    </table>
                                </div>
                            
                        </form>
                  


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
             <?php include('partial2/footer.php'); ?>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
     <?php include('partial2/modal.php'); ?>
     
    <!--**********************************
    
        Scripts
    ***********************************-->
    
    <?php include('partial2/js.php'); ?>

</body>

</html>