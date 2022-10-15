<!DOCTYPE html>
<html lang="en">
<?php include "koneksi.php" ?>
<head>
<?php include('partial2/head.php'); ?>
<script type="text/javascript" src="../chartjs/Chart.js"></script>
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

            <div class="container-fluid mt-3">
                <div class="row">
                    <?php 

                    $datat = mysqli_query($koneksi,"select * from tampil ");
                    $dat = mysqli_fetch_array($datat);
                    $tahun=$dat['tahun'];
                    ?>

                     <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                 <form method="post" action="aksi/ubahtahun.php">
                                <h1>Data Tahun <?php echo $tahun; ?> </h1>
                                 <div class="form-group row">
                                   
                                            <label class="col-sm-4 col-form-label">Ubah</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="tahun">
                                                     
                                                        <option>2022</option>
                                                        <option>2023</option>
                                                        <option>2024</option>
                                                        <option>2025</option>
                                                        <option>2026</option>
                                                        <option>2027</option>
                                                        <option>2028</option>
                                                        <option>2029</option>
                                                       

                                                </select>
                                            
                                            </div>


                                        
                                        </div>                            
                              
                            </div>
                              <button type="submit" name="simpan" class="btn mb-1 btn-flat btn-outline-primary"></i>Ganti</button> 
                             </form> 
                        </div>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Keluhan</h3>
                                <div class="d-inline-block">
                                    <?php
                                     
                                    $datad = mysqli_query($koneksi,"select count(id_keluhan) as jum from keluhan ");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                   
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-plus-square"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan Januari</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(januari) as jum from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan februari</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(februari) as jum from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan maret</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(maret) as jum from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan april</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(april) as jum from rekap where tahun='$tahun' ");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan mei</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(mei) as jum from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-5">
                        <div class="card gradient-6">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan juni</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(juni) as jum from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-7">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan july</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(july) as jum from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-8">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan agustus</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(agustus) as jum from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-9">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan september</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(september) as jum from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan oktober</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(oktober) as jum from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan november</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(november) as jum from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kasus Bulan desember</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(desember) as jum from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                    ?>
                                    <h2 class="text-white"><?php echo $data['jum'] ;?></h2>
                                    <?php } ?>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server"></i></span>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-9">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah Kasus</h3>
                                <div class="d-inline-block">
                                    <?php
                                    $datad = mysqli_query($koneksi,"select sum(januari) as tjanuari, sum(februari) as tfebruari, sum(maret) as tmaret, sum(april) as tapril, sum(mei) as tmei, sum(juni) as tjuni, sum(july) as tjuly, sum(agustus) as tagustus, sum(september) as tseptember, sum(oktober) as toktober, sum(november) as tnovember, sum(desember) as tdesember from rekap where tahun='$tahun'");
                                    while($data = mysqli_fetch_array($datad)){
                                        $jumlah= $data['tjanuari'] + $data['tfebruari'] + $data['tmaret'] + $data['tapril'] + $data['tmei'] + $data['tjuni'] + $data['tjuly'] + $data['tagustus'] + $data['tseptember'] + $data['toktober'] + $data['tnovember'] + $data['tdesember'];
                                    ?>
                                    <h2 class="text-white"><?php echo $jumlah ;?></h2>
                                    <?php } ?>
                                    <p class="text-white mb-0"><?php echo date('Y-d-m'); ?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-building-o"></i></span>
                            </div>
                        </div>
                    </div>






                  
                

               
                   
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th width="10%" >Keluhan</th>
                                                    <th width="80%"></th>
                                                    <th>Jumlah</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                                  <?php
                                                  include "koneksi.php";
                                                  $no=1;
                                                  $datad = mysqli_query($koneksi,"select * from keluhan limit 5");
                                                    while($data = mysqli_fetch_array($datad)){
                                                  
                                                  ?>
                                                <tr>
                                                    <td>
                                                        <a href="lihat_keluhan.php?id_keluhan=<?php echo $data['id_keluhan']; ?>">
                                                        <?php echo $data['nama_keluhan'];?>
                                                        </a>
                                                    </td>
                                                    
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
                                            </tr>
                                            <?php } ?>
                                            <tr>
                                                <td>
                                                    <a href="keluhan.php">
                                                    Selengkapnya
                                                    </a>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>

                 <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sekilas Tentang Sistem Keluhan (SisKel) Puskesmas Kampung Baru Padusunan</h4>
                                <div class="button-icon">
                                     <ol type="A">
                                     <li>1. Siskel adalah sistem informasi yang dimaksudkan untuk membantu Pihak puskesmas dalam menentukan penanganan dan sosialisasi yang tepat berdasarkan keluhan pasien</li>
                                      <li>2. Siskel sebagai media penyimpanan data keluhan</li>
                                      <li>3. Siskel berisikan parameter keluhan penyakit tiap bulannya</li>
                                      
                                         </ol>         
                                                            
                                </div>                 
                          
                            </div>
                        </div>
                    </div>
                </div>
                

                </div>
                 
            </div>

        
    </div>
      <div class="footer">      
        <?php include('partial2/footer.php'); ?>
        </div>
    </div>



                   
    </script>
    <?php include('partial2/js.php'); ?>
      <script src="../plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="../js/plugins-init/chartjs-init.js"></script>
     <script src="../plugins/raphael/raphael.min.js"></script>

    

    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../js/plugins-init/morris-init.js"></script>

</body>

</html>