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
                                <?php
                                      include "koneksi.php";
                                    
                                      $datad = mysqli_query($koneksi,"SELECT * FROM jarak");
                                        $data = mysqli_fetch_array($datad);
                                    
                                      
                                      ?> 
                                <h4 class="card-title">Iterasi Ke  <?php echo $data['iterasi']; ?></h4>
                              
                              
                                       <form action="prosesiterasi.php" method="POST">
                                        <input type="hidden" name="iterasi1" value="<?php echo $data['iterasi'] ?>">
                                    <p align="right">
                                        <button type="submit" name="iterasi" class="btn mb-1 btn-flat btn-outline-primary"></i>Iterasi</button>
                                    </p>
                                    <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>C1</th>
                                                <th>C2</th>
                                                <th>C3</th>
                                                <th>Kelompok</th>
                                            </tr>
                                        </thead>
                                   
                                        <tbody>
                                    <?php
                                      include "koneksi.php";
                                    
                                      $datad = mysqli_query($koneksi,"select * from jarak");
                                        while($data = mysqli_fetch_array($datad)){
                                      
                                      ?>
                                            <tr>

                                                <td>
                                                  <?= $data['no_jarak']; ?>

                                                  <input type="hidden" name="no_jarak[]" value="<?= $data['no_jarak']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['c1']; ?>
                                                  <input type="hidden" name="c1[]" value="<?= $data['c1']; ?>">
                                                </td>
                                                 <td>
                                                  <?= $data['c2']; ?>
                                                  <input type="hidden" name="c2[]" value="<?= $data['c2']; ?>">
                                                </td>
                                                <td>
                                                  <?= $data['c3']; ?>
                                                  <input type="hidden" name="c3[]" value="<?= $data['c3']; ?>">
                                                </td>
                                                 <td>
                                                  <?= $data['kelompok']; ?>
                                                  <input type="hidden" name="kelompok[]" value="<?= $data['kelompok']; ?>">
                                                </td>
                                              </tr>
                                             <?php  } ?>
                                        </tbody>
                                   
                                    </table>
                                </div>
                                
                                    <?php
                                      include "koneksi.php";
                                      $datat = mysqli_query($koneksi,"select * from tampil ");
                                      $dat = mysqli_fetch_array($datat);
                                      $tahun=$dat['tahun'];

                                      $no=1;
                                      $datad = mysqli_query($koneksi,"select * from keluhan join rekap on keluhan.id_keluhan=rekap.id_keluhan where tahun='$tahun'");
                                        while($data = mysqli_fetch_array($datad)){
                                      
                                      ?>
                                           
                                                     <input type="hidden" name="id_keluhan[]" value="<?= $data['id_keluhan']; ?>">


                                                  

                                                  <input type="hidden" name="nama_keluhan[]" value="<?= $data['nama_keluhan']; ?>">
                                             
                                                  
                                                  <input type="hidden" name="januari[]" value="<?= $data['januari']; ?>">
                                                </td>
                                                 <td>
                                                  
                                                  <input type="hidden" name="februari[]" value="<?= $data['februari']; ?>">
                                                </td>
                                                <td>
                                                  
                                                  <input type="hidden" name="maret[]" value="<?= $data['maret']; ?>">
                                                </td>
                                                 <td>
                                                 
                                                  <input type="hidden" name="april[]" value="<?= $data['april']; ?>">
                                                </td>
                                                <td>
                                                 
                                                  <input type="hidden" name="mei[]" value="<?= $data['mei']; ?>">
                                                </td>
                                                <td>
                                                 
                                                  <input type="hidden" name="juni[]" value="<?= $data['juni']; ?>">
                                                </td>
                                                <td>
                                                 
                                                  <input type="hidden" name="july[]" value="<?= $data['july']; ?>">
                                                </td>
                                                <td>
                                                 
                                                  <input type="hidden" name="agustus[]" value="<?= $data['agustus']; ?>">
                                                </td>
                                                <td>
                                                 
                                                  <input type="hidden" name="september[]" value="<?= $data['september']; ?>">
                                                </td>
                                                <td>
                                                 
                                                  <input type="hidden" name="oktober[]" value="<?= $data['oktober']; ?>">
                                                </td>
                                                <td>
                                                 
                                                  <input type="hidden" name="november[]" value="<?= $data['november']; ?>">
                                                </td>
                                                <td>
                                                
                                                  <input type="hidden" name="desember[]" value="<?= $data['desember']; ?>">
                                                </td>

                                              </tr>
                                             <?php $no++; } ?>
                                     
                            
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