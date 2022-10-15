<?php include '../koneksi.php';

if (isset($_POST['iterasi'])) {
  $januari = $_POST['januari'];
  $februari = $_POST['februari'];
  $maret = $_POST['maret'];
  $april = $_POST['april'];
  $mei = $_POST['mei'];
  $juni = $_POST['juni'];
  $july = $_POST['july'];
  $agustus = $_POST['agustus'];
  $september = $_POST['september'];
  $oktober = $_POST['oktober'];
  $november = $_POST['november'];
  $desember = $_POST['desember'];
  $id_keluhan = $_POST['id_keluhan'];

  for ($i = 0; $i < count($id_keluhan); $i++) {
    $where = $i + 1;

    //hitung jarak dengan rumus enhredient
    $c1 = sqrt(pow(($januari[$i] - $januari[9]), 2) + pow(($februari[$i] - $februari[9]), 2) + pow(($maret[$i] - $maret[9]), 2) + pow(($april[$i] - $april[9]), 2) + pow(($mei[$i] - $mei[9]), 2) + pow(($juni[$i] - $juni[9]), 2) + pow(($july[$i] - $july[9]), 2) + pow(($agustus[$i] - $agustus[9]), 2) + pow(($september[$i] - $september[9]), 2) + pow(($oktober[$i] - $oktober[9]), 2) + pow(($november[$i] - $november[9]), 2) + pow(($desember[$i] - $desember[9]), 2));

    $c2 = sqrt(pow(($januari[$i] - $januari[70]), 2) + pow(($februari[$i] - $februari[70]), 2) + pow(($maret[$i] - $maret[70]), 2) + pow(($april[$i] - $april[70]), 2) + pow(($mei[$i] - $mei[70]), 2) + pow(($juni[$i] - $juni[70]), 2) + pow(($july[$i] - $july[70]), 2) + pow(($agustus[$i] - $agustus[70]), 2) + pow(($september[$i] - $september[70]), 2) + pow(($oktober[$i] - $oktober[70]), 2) + pow(($november[$i] - $november[70]), 2) + pow(($desember[$i] - $desember[70]), 2));

    $c3 = sqrt(pow(($januari[$i] - $januari[23]), 2) + pow(($februari[$i] - $februari[23]), 2) + pow(($maret[$i] - $maret[23]), 2) + pow(($april[$i] - $april[23]), 2) + pow(($mei[$i] - $mei[23]), 2) + pow(($juni[$i] - $juni[23]), 2) + pow(($july[$i] - $july[23]), 2) + pow(($agustus[$i] - $agustus[23]), 2) + pow(($september[$i] - $september[23]), 2) + pow(($oktober[$i] - $oktober[23]), 2) + pow(($november[$i] - $november[23]), 2) + pow(($desember[$i] - $desember[23]), 2));

    //tentukan kelompok
    if ($c1<$c2&&$c1<$c3)
      {
          $kelompok=1;
      }
    if ($c2<$c1&&$c2<$c3)
      {
          $kelompok=2;
      }
    if ($c3<$c1&&$c3<$c2)
      {
        $kelompok=3;
      }
      $iterasi=1;

      $datat = mysqli_query($koneksi,"select * from tampil ");
      $dat = mysqli_fetch_array($datat);
      $tahun=$dat['tahun'];


   $query2= mysqli_query($koneksi,"update rekap set keterangan='$kelompok' where id_keluhan='$where' and tahun='$tahun' ");

    $query = mysqli_query($koneksi, "insert into jarak values 
    	('',
    	'$c1',
    	'$c2',
    	'$c3',
      '$kelompok',
      '$iterasi')");



      

   
  }
   if ($query) {
      echo "<script>window.location='iterasi.php';</script>";
    }
}