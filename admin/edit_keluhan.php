<!DOCTYPE html>
<html lang="en">
<?php include "koneksi.php"; ?>

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
                     <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Data Keluhan</h4>
                                <div class="basic-form">

                                   
                                    <form method="post" action="aksi/simpankeluhan.php" enctype="multipart/form-data">

                                          <?php
                                        include "koneksi.php";
                                       

                                            $datat = mysqli_query($koneksi,"select * from tampil");
                                            $dat = mysqli_fetch_array($datat);
                                            $tahun=$dat['tahun'];
                
                                       $id_keluhan=$_GET['id_keluhan'];

                                       
                                    ?>
                                    <input type="hidden" name="tahun" value="<?php echo $tahun ?>">
                                    <input type="hidden" name="id_keluhan" value="<?php echo $id_keluhan ?>">
                                        

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Bulan</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="waktu">
                                                     
                                                        <option>januari</option>
                                                        <option>februari</option>
                                                        <option>maret</option>
                                                        <option>april</option>
                                                        <option>mei</option>
                                                        <option>juni</option>
                                                        <option>july</option>
                                                        <option>agustus</option>
                                                        <option>september</option>
                                                        <option>oktober</option>
                                                        <option>november</option>
                                                        <option>desember</option>

                                                </select>
                                            
                                            </div>
                                        </div>

                                 


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jumlah</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" >
                                              
                                            </div>
                                        </div>

                                  
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                
                                                <button type="submit" name="simpan" class="btn mb-1 btn-flat btn-outline-primary"></i>Simpan</button>
                                                <a href="keluhan.php">
                                                <button type="button" class="btn mb-1 btn-flat btn-outline-dark"><i class="fa fa-back"></i>kembali</button>
                                                </a>                                                
                                            </div>
                                        </div>
                                    </form>
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