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
  $iterasi1 = $_POST['iterasi1'];

 $datatt = mysqli_query($koneksi,"select * from tampil ");
$datt = mysqli_fetch_array($datatt);
$tahun=$datt['tahun'];

$no=0;
$datad = mysqli_query($koneksi,"select  * from rekap join jarak on rekap.no_rekap=jarak.no_jarak where tahun='$tahun' ");
while($data = mysqli_fetch_array($datad)){
   
  if ($data['keterangan']==$data['kelompok']) {
    
    $no++;  
  }

}

  $dat = mysqli_query($koneksi,"select  (count(keterangan)) as ket from rekap where tahun='$tahun' ");
$d = mysqli_fetch_array($dat);
$d=$d['ket'];


if ($d==$no) {
echo "<script>window.location='hasil.php';</script>";
}
else{

  for ($i = 0; $i < count($id_keluhan); $i++) {
    $where = $i + 1;

    //pusat baru c1
    $querya = mysqli_query($koneksi,"select sum(januari) as pusatjanuari, count(januari) as jumlahjanuari from rekap where keterangan='1' and tahun='$tahun' ");
    $a = mysqli_fetch_assoc($querya);
    $pusatjanuari= $a['pusatjanuari'];
    $jumlahjanuari= $a['jumlahjanuari'];
    $c_januari=$pusatjanuari/$jumlahjanuari;
   

    $queryb = mysqli_query($koneksi,"select sum(februari) as pusatfebruari, count(februari) as jumlahfebruari from rekap where keterangan ='1' and tahun='$tahun' ");
    $b = mysqli_fetch_assoc($queryb);
    $pusatfebruari= $b['pusatfebruari'];
    $jumlahfebruari= $b['jumlahfebruari'];
    $c_februari=$pusatfebruari/$jumlahfebruari;
   


    $queryc = mysqli_query($koneksi,"select sum(maret) as pusatmaret, count(maret) as jumlahmaret from rekap where keterangan ='1' and tahun='$tahun' ");
    $c = mysqli_fetch_assoc($queryc);
    $pusatmaret= $c['pusatmaret'];
    $jumlahmaret= $c['jumlahmaret'];
    $c_maret=$pusatmaret/$jumlahmaret;

    $queryd = mysqli_query($koneksi,"select sum(april) as pusatapril, count(april) as jumlahapril from rekap where keterangan ='1' and tahun='$tahun' ");
    $d = mysqli_fetch_assoc($queryd);
    $pusatapril= $d['pusatapril'];
    $jumlahapril= $d['jumlahapril'];
    $c_april=$pusatapril/$jumlahapril;

     $querye = mysqli_query($koneksi,"select sum(mei) as pusatmei, count(mei) as jumlahmei from rekap where keterangan ='1' and tahun='$tahun' ");
    $e = mysqli_fetch_assoc($querye);
    $pusatmei= $e['pusatmei'];
    $jumlahmei= $e['jumlahmei'];
    $c_mei=$pusatmei/$jumlahmei;

    $queryf = mysqli_query($koneksi,"select sum(juni) as pusatjuni, count(juni) as jumlahjuni from rekap where keterangan ='1' and tahun='$tahun' ");
    $f = mysqli_fetch_assoc($queryf);
    $pusatjuni= $f['pusatjuni'];
    $jumlahjuni= $f['jumlahjuni'];
    $c_juni=$pusatjuni/$jumlahjuni;

    $queryg = mysqli_query($koneksi,"select sum(july) as pusatjuly, count(july) as jumlahjuly from rekap where keterangan ='1' and tahun='$tahun' ");
    $g = mysqli_fetch_assoc($queryg);
    $pusatjuly= $g['pusatjuly'];
    $jumlahjuly= $g['jumlahjuly'];
    $c_july=$pusatjuly/$jumlahjuly;

    $queryh = mysqli_query($koneksi,"select sum(agustus) as pusatagustus, count(agustus) as jumlahagustus from rekap where keterangan ='1' and tahun='$tahun' ");
    $h = mysqli_fetch_assoc($queryh);
    $pusatagustus= $h['pusatagustus'];
    $jumlahagustus= $h['jumlahagustus'];
    $c_agustus=$pusatagustus/$jumlahagustus;

     $queryi = mysqli_query($koneksi,"select sum(september) as pusatseptember, count(september) as jumlahseptember from rekap where keterangan ='1' and tahun='$tahun' ");
    $ia = mysqli_fetch_assoc($queryi);
    $pusatseptember= $ia['pusatseptember'];
    $jumlahseptember= $ia['jumlahseptember'];
    $c_september=$pusatseptember/$jumlahseptember;

    $queryj = mysqli_query($koneksi,"select sum(oktober) as pusatoktober, count(oktober) as jumlahoktober from rekap where keterangan ='1' and tahun='$tahun' ");
    $j = mysqli_fetch_assoc($queryj);
    $pusatoktober= $j['pusatoktober'];
    $jumlahoktober= $j['jumlahoktober'];
    $c_oktober=$pusatoktober/$jumlahoktober;

    $queryk = mysqli_query($koneksi,"select sum(november) as pusatnovember, count(november) as jumlahnovember from rekap where keterangan ='1' and tahun='$tahun' ");
    $k = mysqli_fetch_assoc($queryk);
    $pusatnovember= $k['pusatnovember'];
    $jumlahnovember= $k['jumlahnovember'];
    $c_november=$pusatnovember/$jumlahnovember;

    $queryl = mysqli_query($koneksi,"select sum(desember) as pusatdesember, count(desember) as jumlahdesember from rekap where keterangan ='1' and tahun='$tahun' ");
    $l = mysqli_fetch_assoc($queryl);
    $pusatdesember= $l['pusatdesember'];
    $jumlahdesember= $l['jumlahdesember'];
    $c_desember=$pusatdesember/$jumlahdesember;


    ////pusat c2
    $queryac2 = mysqli_query($koneksi,"select sum(januari) as pusatjanuari, count(januari) as jumlahjanuari from rekap where keterangan ='2' and tahun='$tahun' ");
    $ac2 = mysqli_fetch_assoc($queryac2);
    $pusatc2januari= $ac2['pusatjanuari'];
    $jumlahc2januari= $ac2['jumlahjanuari'];
    $c2_januari=$pusatc2januari/$jumlahc2januari;

    $querybc2 = mysqli_query($koneksi,"select sum(februari) as pusatfebruari, count(februari) as jumlahfebruari from rekap where keterangan ='2' and tahun='$tahun' ");
    $bc2 = mysqli_fetch_assoc($querybc2);
    $pusatc2februari= $bc2['pusatfebruari'];
    $jumlahc2februari= $bc2['jumlahfebruari'];
    $c2_februari=$pusatc2februari/$jumlahc2februari;

    $querycc2 = mysqli_query($koneksi,"select sum(maret) as pusatmaret, count(maret) as jumlahmaret from rekap where keterangan ='2' and tahun='$tahun' ");
    $cc2 = mysqli_fetch_assoc($querycc2);
    $pusatc2maret= $cc2['pusatmaret'];
    $jumlahc2maret= $cc2['jumlahmaret'];
    $c2_maret=$pusatc2maret/$jumlahc2maret;

    $querydc2 = mysqli_query($koneksi,"select sum(april) as pusatapril, count(april) as jumlahapril from rekap where keterangan ='2' and tahun='$tahun' ");
    $dc2 = mysqli_fetch_assoc($querydc2);
    $pusatc2april= $dc2['pusatapril'];
    $jumlahc2april= $dc2['jumlahapril'];
    $c2_april=$pusatc2april/$jumlahc2april;

     $queryec2 = mysqli_query($koneksi,"select sum(mei) as pusatmei, count(mei) as jumlahmei from rekap where keterangan ='2' and tahun='$tahun' ");
    $ec2 = mysqli_fetch_assoc($queryec2);
    $pusatc2mei= $ec2['pusatmei'];
    $jumlahc2mei= $ec2['jumlahmei'];
    $c2_mei=$pusatc2mei/$jumlahc2mei;

    $queryfc2 = mysqli_query($koneksi,"select sum(juni) as pusatjuni, count(juni) as jumlahjuni from rekap where keterangan ='2' and tahun='$tahun' ");
    $fc2 = mysqli_fetch_assoc($queryfc2);
    $pusatc2juni= $fc2['pusatjuni'];
    $jumlahc2juni= $fc2['jumlahjuni'];
    $c2_juni=$pusatc2juni/$jumlahc2juni;

    $querygc2 = mysqli_query($koneksi,"select sum(july) as pusatjuly, count(july) as jumlahjuly from rekap where keterangan ='2' and tahun='$tahun' ");
    $gc2 = mysqli_fetch_assoc($querygc2);
    $pusatc2july= $gc2['pusatjuly'];
    $jumlahc2july= $gc2['jumlahjuly'];
    $c2_july=$pusatc2july/$jumlahc2july;

    $queryhc2 = mysqli_query($koneksi,"select sum(agustus) as pusatagustus, count(agustus) as jumlahagustus from rekap where keterangan ='2' and tahun='$tahun' ");
    $hc2 = mysqli_fetch_assoc($queryhc2);
    $pusatc2agustus= $hc2['pusatagustus'];
    $jumlahc2agustus= $hc2['jumlahagustus'];
    $c2_agustus=$pusatc2agustus/$jumlahc2agustus;

     $queryic2 = mysqli_query($koneksi,"select sum(september) as pusatseptember, count(september) as jumlahseptember from rekap where keterangan ='2' and tahun='$tahun' ");
    $ic2 = mysqli_fetch_assoc($queryic2);
    $pusatc2september= $ic2['pusatseptember'];
    $jumlahc2september= $ic2['jumlahseptember'];
    $c2_september=$pusatc2september/$jumlahc2september;

    $queryjc2 = mysqli_query($koneksi,"select sum(oktober) as pusatoktober, count(oktober) as jumlahoktober from rekap where keterangan ='2' and tahun='$tahun' ");
    $jc2 = mysqli_fetch_assoc($queryjc2);
    $pusatc2oktober= $jc2['pusatoktober'];
    $jumlahc2oktober= $jc2['jumlahoktober'];
    $c2_oktober=$pusatc2oktober/$jumlahc2oktober;

    $querykc2 = mysqli_query($koneksi,"select sum(november) as pusatnovember, count(november) as jumlahnovember from rekap where keterangan ='2' and tahun='$tahun' ");
    $kc2 = mysqli_fetch_assoc($querykc2);
    $pusatc2november= $kc2['pusatnovember'];
    $jumlahc2november= $kc2['jumlahnovember'];
    $c2_november=$pusatc2november/$jumlahc2november;

    $querylc2 = mysqli_query($koneksi,"select sum(desember) as pusatdesember, count(desember) as jumlahdesember from rekap where keterangan ='2' and tahun='$tahun' ");
    $lc2 = mysqli_fetch_assoc($querylc2);
    $pusatc2desember= $lc2['pusatdesember'];
    $jumlahc2desember= $lc2['jumlahdesember'];
    $c2_desember=$pusatc2desember/$jumlahc2desember;

     ////pusat c3
    $queryac3 = mysqli_query($koneksi,"select sum(januari) as pusatjanuari, count(januari) as jumlahjanuari from rekap where keterangan ='3' and tahun='$tahun' ");
    $ac3 = mysqli_fetch_assoc($queryac3);
    $pusatc3januari= $ac3['pusatjanuari'];
    $jumlahc3januari= $ac3['jumlahjanuari'];
    $c3_januari=$pusatc3januari/$jumlahc3januari;

    $querybc3 = mysqli_query($koneksi,"select sum(februari) as pusatfebruari, count(februari) as jumlahfebruari from rekap where keterangan ='3' and tahun='$tahun' ");
    $bc3 = mysqli_fetch_assoc($querybc3);
    $pusatc3februari= $bc3['pusatfebruari'];
    $jumlahc3februari= $bc3['jumlahfebruari'];
    $c3_februari=$pusatc3februari/$jumlahc3februari;

    $querycc3 = mysqli_query($koneksi,"select sum(maret) as pusatmaret, count(maret) as jumlahmaret from rekap where keterangan ='3' and tahun='$tahun' ");
    $cc3 = mysqli_fetch_assoc($querycc3);
    $pusatc3maret= $cc3['pusatmaret'];
    $jumlahc3maret= $cc3['jumlahmaret'];
    $c3_maret=$pusatc3maret/$jumlahc3maret;

    $querydc3 = mysqli_query($koneksi,"select sum(april) as pusatapril, count(april) as jumlahapril from rekap where keterangan ='3' and tahun='$tahun' ");
    $dc3 = mysqli_fetch_assoc($querydc3);
    $pusatc3april= $dc3['pusatapril'];
    $jumlahc3april= $dc3['jumlahapril'];
    $c3_april=$pusatc3april/$jumlahc3april;

    $queryec3 = mysqli_query($koneksi,"select sum(mei) as pusatmei, count(mei) as jumlahmei from rekap where keterangan ='3' and tahun='$tahun' ");
    $ec3 = mysqli_fetch_assoc($queryec3);
    $pusatc3mei= $ec3['pusatmei'];
    $jumlahc3mei= $ec3['jumlahmei'];
    $c3_mei=$pusatc3mei/$jumlahc3mei;

    $queryfc3 = mysqli_query($koneksi,"select sum(juni) as pusatjuni, count(juni) as jumlahjuni from rekap where keterangan ='3' and tahun='$tahun' ");
    $fc3 = mysqli_fetch_assoc($queryfc3);
    $pusatc3juni= $fc3['pusatjuni'];
    $jumlahc3juni= $fc3['jumlahjuni'];
    $c3_juni=$pusatc3juni/$jumlahc3juni;

    $querygc3 = mysqli_query($koneksi,"select sum(july) as pusatjuly, count(july) as jumlahjuly from rekap where keterangan ='3' and tahun='$tahun' ");
    $gc3 = mysqli_fetch_assoc($querygc3);
    $pusatc3july= $gc3['pusatjuly'];
    $jumlahc3july= $gc3['jumlahjuly'];
    $c3_july=$pusatc3july/$jumlahc3july;

    $queryhc3 = mysqli_query($koneksi,"select sum(agustus) as pusatagustus, count(agustus) as jumlahagustus from rekap where keterangan ='3' and tahun='$tahun' ");
    $hc3 = mysqli_fetch_assoc($queryhc3);
    $pusatc3agustus= $hc3['pusatagustus'];
    $jumlahc3agustus= $hc3['jumlahagustus'];
    $c3_agustus=$pusatc3agustus/$jumlahc3agustus;

    $queryic3 = mysqli_query($koneksi,"select sum(september) as pusatseptember, count(september) as jumlahseptember from rekap where keterangan ='3' and tahun='$tahun' ");
    $ic3 = mysqli_fetch_assoc($queryic3);
    $pusatc3september= $ic3['pusatseptember'];
    $jumlahc3september= $ic3['jumlahseptember'];
    $c3_september=$pusatc3september/$jumlahc3september;

    $queryjc3 = mysqli_query($koneksi,"select sum(oktober) as pusatoktober, count(oktober) as jumlahoktober from rekap where keterangan ='3' and tahun='$tahun' ");
    $jc3 = mysqli_fetch_assoc($queryjc3);
    $pusatc3oktober= $jc3['pusatoktober'];
    $jumlahc3oktober= $jc3['jumlahoktober'];
    $c3_oktober=$pusatc3oktober/$jumlahc3oktober;

    $querykc3 = mysqli_query($koneksi,"select sum(november) as pusatnovember, count(november) as jumlahnovember from rekap where keterangan ='3' and tahun='$tahun' ");
    $kc3 = mysqli_fetch_assoc($querykc3);
    $pusatc3november= $kc3['pusatnovember'];
    $jumlahc3november= $kc3['jumlahnovember'];
    $c3_november=$pusatc3november/$jumlahc3november;

    $querylc3 = mysqli_query($koneksi,"select sum(desember) as pusatdesember, count(desember) as jumlahdesember from rekap where keterangan ='3' and tahun='$tahun' ");
    $lc3 = mysqli_fetch_assoc($querylc3);
    $pusatc3desember= $lc3['pusatdesember'];
    $jumlahc3desember= $lc3['jumlahdesember'];
    $c3_desember=$pusatc3desember/$jumlahc3desember;





   //hitung jarak dengan rumus enhredient
  $c1 = sqrt(pow(($januari[$i] - $c_januari), 2) + pow(($februari[$i] - $c_februari), 2) + pow(($maret[$i] - $c_maret), 2) + pow(($april[$i] - $c_april), 2) + pow(($mei[$i] - $c_mei), 2) + pow(($juni[$i] - $c_juni), 2) + pow(($july[$i] - $c_july), 2) + pow(($agustus[$i] - $c_agustus), 2) + pow(($september[$i] - $c_september), 2) + pow(($oktober[$i] - $c_oktober), 2) + pow(($november[$i] - $c_november), 2) + pow(($desember[$i] - $c_desember), 2));


  $c2 = sqrt(pow(($januari[$i] - $c2_januari), 2) + pow(($februari[$i] - $c2_februari), 2) + pow(($maret[$i] - $c2_maret), 2) + pow(($april[$i] - $c2_april), 2) + pow(($mei[$i] - $c2_mei), 2) + pow(($juni[$i] - $c2_juni), 2) + pow(($july[$i] - $c2_july), 2) + pow(($agustus[$i] - $c2_agustus), 2) + pow(($september[$i] - $c2_september), 2) + pow(($oktober[$i] - $c2_oktober), 2) + pow(($november[$i] - $c2_november), 2) + pow(($desember[$i] - $c2_desember), 2));

  $c3 = sqrt(pow(($januari[$i] - $c3_januari), 2) + pow(($februari[$i] - $c3_februari), 2) + pow(($maret[$i] - $c3_maret), 2) + pow(($april[$i] - $c3_april), 2) + pow(($mei[$i] - $c3_mei), 2) + pow(($juni[$i] - $c3_juni), 2) + pow(($july[$i] - $c2_july), 2) + pow(($agustus[$i] - $c2_agustus), 2) + pow(($september[$i] - $c3_september), 2) + pow(($oktober[$i] - $c3_oktober), 2) + pow(($november[$i] - $c3_november), 2) + pow(($desember[$i] - $c3_desember), 2));

 

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
     
    $query2 = mysqli_query($koneksi, "update rekap set keterangan='$kelompok' where id_keluhan='$where' and tahun='$tahun' ");    
    }   
     echo "<script>window.location='iterasi.php';</script>";
    }
}