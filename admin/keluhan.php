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
                                    include 'koneksi.php';
                                    $datat = mysqli_query($koneksi,"select * from tampil ");
                                    $dat = mysqli_fetch_array($datat);
                                    $tahun=$dat['tahun'];
                                    ?>
                                <h4 class="card-title">Data Keluhan tahun <?php echo $tahun; ?></h4>
                                Jumlah Keluhan =
                                <?php
                                      include "koneksi.php";
                                    
                                      $datad = mysqli_query($koneksi,"select count(id_keluhan) as jumlah from keluhan");
                                        while($data = mysqli_fetch_array($datad)){
                                      echo $data['jumlah'];
                                      }
                                      ?> 
                                    <p align="right">
                                        
                                    
                                        <a href="tambah_keluhan.php">
                                            <button type="button" class="btn mb-1 btn-flat btn-outline-primary" ><i class="fa fa-plus"></i>Tambah Keluhan</button>
                                        </a>   
                                    </p>

                                   
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Keluhan</th>
                                                <th width="1000" ></th>
                                                 <th>Jumlah</th>


                                               
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                   
                                        <tbody>
                                    <?php
                                      include "koneksi.php";
                                      $no=1;
                                      $datad = mysqli_query($koneksi,"select * from keluhan");
                                        while($data = mysqli_fetch_array($datad)){
                                      
                                      ?>
                                            <tr>
                                                <td width="10%"><?php echo $no;?></td>
                                               
                                                <td><?php echo $data['nama_keluhan'];?></td>
                                                <td>
                                        <?php
                                    
                                        $id_keluhan=$data['id_keluhan'];
                                        
                                         $dat = mysqli_query($koneksi,"select * from rekap where id_keluhan='$id_keluhan' and tahun='$tahun' ");
                                        $da = mysqli_fetch_array($dat);
                                        $jumlahkeluhan= $da['januari'] + $da['februari'] + $da['maret'] + $da['april'] + $da['mei'] + $da['juni'] + $da['july'] + $da['agustus'] + $da['september'] + $da['oktober'] + $da['november'] + $da['desember'];
                                      
                                       
                                    
                                    ?>


                                     <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-1" style="width: <?php echo $jumlahkeluhan; ?>%;" role="progressbar"><span class="sr-only"><?php echo $jumlahkeluhan; ?>% Complete</span>
                                                        </div>

                                                    </div> 
                                                    <td>
                                                    <span class="label gradient-1 btn-rounded"><?php echo $jumlahkeluhan; ?></span>
                                                    
                                                </td>
                                              

                                                </td>
                                               
                                                                                               
                                                <td width="200">                               

                                                    <a href="lihat_keluhan.php?id_keluhan=<?php echo $data['id_keluhan']; ?>">  
                                                        <button type="button" class="btn mb-1 btn-flat btn-outline-primary"><i class="fa fa-search"></i></button>
                                                    </a>   
                                                    <a href="edit_keluhan.php?id_keluhan=<?php echo $data['id_keluhan']; ?>">  
                                                        <button type="button" class="btn mb-1 btn-flat btn-outline-success"><i class="fa fa-edit"></i></button>
                                                    </a>
                                                     <a href="aksi/hapus_keluhan.php?id_keluhan=<?php echo $data['id_keluhan']; ?>">
                                                        <button type="button" class="btn mb-1 btn-flat btn-outline-danger"><i class="fa fa-trash"></i></button>
                                                    </a>
                                                     
                                                    
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