 <?php

    include '../koneksi.php';

    if(isset($_POST['simpan']))
    {
             $tahun=$_POST['tahun'];
          $id_keluhan=$_POST['id_keluhan'];
        ////deklarasi variable
      $cekdata = mysqli_query($koneksi,"select * from rekap where id_keluhan='$id_keluhan' and tahun='$tahun'");
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($cekdata);
        // cek apakah username dan password di temukan pada database
        if($cek > 0){

              $id_keluhan=$_POST['id_keluhan'];
        $waktu=$_POST['waktu'];
       
        $jumlah=$_POST['jumlah'];
         
        mysqli_query($koneksi,"update rekap set 
        $waktu='$jumlah' where id_keluhan='$id_keluhan' and tahun='$tahun' ");

        echo"<script>alert('data berhasil disimpan');
        </script>";
        echo"<script>window.location='../edit_keluhan.php?id_keluhan=$id_keluhan'</script>";
        }

        else{

        $dataa= mysqli_query($koneksi,"select count(no_rekap) as jumlah from rekap ");
        $dat = mysqli_fetch_array($dataa);

        $nor= $dat['jumlah'] + 1;

        $waktu=$_POST['waktu'];
       
        $jumlah=$_POST['jumlah'];

      


        
        mysqli_query($koneksi,"insert into rekap (no_rekap, id_keluhan, $waktu, tahun) values
            ('$nor','$id_keluhan','$jumlah','$tahun')");

          echo"<script>alert('data berhasil disimpan');</script>";
        echo"<script>window.location='../edit_keluhan.php?id_keluhan=$id_keluhan'</script>";

        }
       
        
    }
        ?>