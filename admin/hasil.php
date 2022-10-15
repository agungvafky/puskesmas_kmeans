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
                                <h4 class="card-title">Hasil dengan K-Means</h4>
                                 
                                       
                                    <p align="right">
                                      <a href="kmeans.php">
                                        <button type="button" name="iterasi" class="btn mb-1 btn-flat btn-outline-primary"></i>Kembali</button>
                                      </a>
                                    </p>
                                    <center>
                                    <h4 class="card-title">Hasil C1(Keluhan dengan intensitas tinggi)</h4>
                                    </center>
                                    Jumlah Keluhan =
                                <?php
                                      include "koneksi.php";

                                    $datat = mysqli_query($koneksi,"select * from tampil ");
                                    $dat = mysqli_fetch_array($datat);
                                    $tahun=$dat['tahun'];
                                    
                                      $datad = mysqli_query($koneksi,"select count(no_rekap) as jumlah from rekap where keterangan='1' and tahun='$tahun' ");
                                        while($data = mysqli_fetch_array($datad)){
                                      echo $data['jumlah'];
                                      }
                                      ?>
                                      <br>
                                      <?php
                                     
                                    
                                      $dataj = mysqli_query($koneksi,"select sum(januari) as jjanuari, sum(februari) as jfebruari, sum(maret) as jmaret, sum(april) as japril, sum(mei) as jmei, sum(juni) as jjuni, sum(july) as jjuly, sum(agustus) as jagustus, sum(september) as jseptember, sum(oktober) as joktober, sum(november) as jnovember, sum(desember) as jdesember, count(no_rekap) as bagi from rekap where keterangan='1' and tahun='$tahun' ");
                                        $datajj = mysqli_fetch_array($dataj);
                                        $rata= ($datajj['jjanuari'] + $datajj['jfebruari'] + $datajj['jmaret'] + $datajj['japril'] + $datajj['jmei'] + $datajj['jjuni'] + $datajj['jjuly'] + $datajj['jagustus'] + $datajj['jseptember'] + $datajj['joktober'] + $datajj['jnovember'] + $datajj['jdesember'])/ $datajj['bagi'] ;  
                                        echo $rata;
                                      
                                      ?>

                                <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Keluhan</th>
                                                <th>Kelompok</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                   
                                        <tbody>
                                    <?php
                                      include "koneksi.php";
                                      $no=1;
                                      $datad = mysqli_query($koneksi,"select * from keluhan join rekap on keluhan.id_keluhan=rekap.no_rekap where keterangan='1' and tahun='$tahun' ");
                                        while($data = mysqli_fetch_array($datad)){
                                      
                                      ?>
                                            <tr>
                                                <td width="10%"><?php echo $no;?>
                                                   
                                                </td>

                                                <td>
                                                  <a href="lihat_keluhan.php?id_keluhan=<?php echo $data['id_keluhan']; ?>">
                                                  <?= $data['nama_keluhan']; ?>
                                                </a>

                                                
                                                </td>
                                                <td>
                                                 C <?= $data['keterangan']; ?>
                                                  
                                                </td>
                                                 <td>
                                                  Penyuluhan dalam gedung, Penyuluhan luar gedung, Kunjungan rumah 
                                                </td>
                                                

                                              </tr>
                                             <?php $no++; } ?>
                                        </tbody>
                                   
                                    </table>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <center>
                                    <h4 class="card-title">Hasil C2(Keluhan Intensitas sedang)</h4>
                                    </center>
                                     Jumlah Keluhan =
                                <?php
                                      include "koneksi.php";
                                    
                                      $datad = mysqli_query($koneksi,"select count(no_rekap) as jumlah from rekap where keterangan='3' and tahun='$tahun' ");
                                        while($data = mysqli_fetch_array($datad)){
                                      echo $data['jumlah'];
                                      }
                                      ?>
                                      <br>
                                      <?php
                                     
                                    
                                      $dataj = mysqli_query($koneksi,"select sum(januari) as jjanuari, sum(februari) as jfebruari, sum(maret) as jmaret, sum(april) as japril, sum(mei) as jmei, sum(juni) as jjuni, sum(july) as jjuly, sum(agustus) as jagustus, sum(september) as jseptember, sum(oktober) as joktober, sum(november) as jnovember, sum(desember) as jdesember, count(no_rekap) as bagi from rekap where keterangan='3' and tahun='$tahun' ");
                                        $datajj = mysqli_fetch_array($dataj);
                                        $rata= ($datajj['jjanuari'] + $datajj['jfebruari'] + $datajj['jmaret'] + $datajj['japril'] + $datajj['jmei'] + $datajj['jjuni'] + $datajj['jjuly'] + $datajj['jagustus'] + $datajj['jseptember'] + $datajj['joktober'] + $datajj['jnovember'] + $datajj['jdesember'])/ $datajj['bagi'] ;  
                                        echo $rata;
                                      
                                      ?>
                                <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Keluhan</th>
                                                <th>Kelompok</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                   
                                        <tbody>
                                    <?php
                                      include "koneksi.php";
                                      $no=1;
                                      $datad = mysqli_query($koneksi,"select * from keluhan join rekap on keluhan.id_keluhan=rekap.no_rekap where keterangan='3' and tahun='$tahun' ");
                                        while($data = mysqli_fetch_array($datad)){
                                      
                                      ?>
                                            <tr>
                                                <td width="10%"><?php echo $no;?>
                                                   
                                                </td>

                                                <td>
                                                    <a href="lihat_keluhan.php?id_keluhan=<?php echo $data['id_keluhan']; ?>">
                                                  <?= $data['nama_keluhan']; ?>
                                                </a>

                                                
                                                </td>
                                                <td>
                                                 C <?= $data['keterangan']; ?>
                                                  
                                                </td>
                                                 <td>
                                                  Penyuluhan dalam gedung
                                                </td>
                                                

                                              </tr>
                                             <?php $no++; } ?>
                                        </tbody>
                                   
                                    </table>
                                </div>

                                <br>
                                <br>
                                <br>
                                <br>
                                <center>
                                    <h4 class="card-title">Hasil C3(Keluhan Intensitas rendah)</h4>
                                    </center>
                                    Jumlah Keluhan =
                                <?php
                                      include "koneksi.php";
                                    
                                      $datad = mysqli_query($koneksi,"select count(no_rekap) as jumlah from rekap where keterangan='2' and tahun='$tahun' ");
                                        while($data = mysqli_fetch_array($datad)){
                                      echo $data['jumlah'];
                                      }
                                      ?>
                                      <br>
                                      <?php
                                     
                                    
                                      $dataj = mysqli_query($koneksi,"select sum(januari) as jjanuari, sum(februari) as jfebruari, sum(maret) as jmaret, sum(april) as japril, sum(mei) as jmei, sum(juni) as jjuni, sum(july) as jjuly, sum(agustus) as jagustus, sum(september) as jseptember, sum(oktober) as joktober, sum(november) as jnovember, sum(desember) as jdesember, count(no_rekap) as bagi from rekap where keterangan='2' and tahun='$tahun' ");
                                        $datajj = mysqli_fetch_array($dataj);
                                        $rata= ($datajj['jjanuari'] + $datajj['jfebruari'] + $datajj['jmaret'] + $datajj['japril'] + $datajj['jmei'] + $datajj['jjuni'] + $datajj['jjuly'] + $datajj['jagustus'] + $datajj['jseptember'] + $datajj['joktober'] + $datajj['jnovember'] + $datajj['jdesember'])/ $datajj['bagi'] ;  
                                        echo $rata;
                                      
                                      ?>
                                <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Keluhan</th>
                                                <th>Kelompok</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                   
                                        <tbody>
                                    <?php
                                      include "koneksi.php";
                                      $no=1;
                                      $datad = mysqli_query($koneksi,"select * from keluhan join rekap on keluhan.id_keluhan=rekap.no_rekap where keterangan='2' and tahun='$tahun' ");
                                        while($data = mysqli_fetch_array($datad)){
                                      
                                      ?>
                                            <tr>
                                                <td width="10%"><?php echo $no;?>
                                                   
                                                </td>

                                                <td>
                                                    <a href="lihat_keluhan.php?id_keluhan=<?php echo $data['id_keluhan']; ?>">
                                                  <?= $data['nama_keluhan']; ?>
                                                </a>
                                                
                                                </td>
                                                <td>
                                                 C <?= $data['keterangan']; ?>
                                                  
                                                </td>
                                                 <td>
                                                 Pencegahan 
                                                </td>
                                                

                                              </tr>
                                             <?php $no++; } ?>
                                        </tbody>
                                   
                                    </table>
                                </div>
                        
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