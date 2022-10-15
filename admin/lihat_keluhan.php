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
                         <?php
                                        include "koneksi.php";
                                        $id_keluhan=$_GET['id_keluhan'];
                                        $datad = mysqli_query($koneksi,"select * from keluhan where id_keluhan='$id_keluhan'");
                                        $data = mysqli_fetch_array($datad);
                                    ?>
                               
                       
                      </div>     
                     <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Keluhan <?php echo $data['nama_keluhan']; ?></h4>
                                <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">no</th>
                                                <th scope="col">Bulan</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Persen</th>
                                                <th scope="col">  </th>

                                            </tr>
                                        </thead>
                                        <?php
                                         $datad = mysqli_query($koneksi,"select * from rekap where id_keluhan='$id_keluhan'");
                                        $data = mysqli_fetch_array($datad);
                                        $konversi= 100 / ($data['januari'] + $data['februari'] + $data['maret'] + $data['april'] + $data['mei'] + $data['juni'] + $data['july'] + $data['agustus'] + $data['september'] + $data['oktober'] + $data['november'] + $data['desember']);
                                        ?>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <th>Januari</th>
                                                <td><?php echo $data['januari'];
                                                $persen= $data['januari'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-1" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-1 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <th>Februari</th>
                                                <td><?php echo $data['februari'];
                                                $persen= $data['februari'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-2" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-2 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <th>Maret</th>
                                                <td><?php echo $data['maret'];
                                                $persen= $data['maret'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-3" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-3 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <th>April</th>
                                                <td><?php echo $data['april'];
                                                $persen= $data['april'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-4" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-4 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <th>Mei</th>
                                                <td><?php echo $data['mei'];
                                                $persen= $data['mei'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-5" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-5 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>6</th>
                                                <th>Juni</th>
                                                <td><?php echo $data['juni'];
                                                $persen= $data['juni'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-6" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-6 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>7</th>
                                                <th>July</th>
                                                <td><?php echo $data['july'];
                                                $persen= $data['july'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-7" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-7 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>8</th>
                                                <th>Agustus</th>
                                                <td><?php echo $data['agustus'];
                                                $persen= $data['agustus'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-8" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-8 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>9</th>
                                                <th>September</th>
                                                <td><?php echo $data['september'];
                                                $persen= $data['september'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-9" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-9 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>10</th>
                                                <th>Oktober</th>
                                                <td><?php echo $data['oktober'];
                                                $persen= $data['oktober'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-1" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-1 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>11</th>
                                                <th>November</th>
                                                <td><?php echo $data['november'];
                                                $persen= $data['november'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-2" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-2 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>12</th>
                                                <th>Desember</th>
                                                <td><?php echo $data['desember'];
                                                $persen= $data['desember'] * $konversi ;
                                                  ?> </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-3" style="width: <?php echo $persen; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persen; ?>% Complete</span>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td><span class="label gradient-3 btn-rounded"><?php echo $persen; ?>%</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="keluhan.php">
                                        <button type="button" class="btn mb-1 btn-flat btn-outline-dark"><i class="fa fa-back"></i>kembali</button>
                                    </a>  
                                </div>
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