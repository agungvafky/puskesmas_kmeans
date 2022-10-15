 <?php
 include '../koneksi.php';
    if(isset($_POST['simpan_keluhan']))
    {
        ////deklarasi variable
       
        $nama_keluhan=$_POST['nama_keluhan'];
      
        
     
      
      

    
        mysqli_query($koneksi,"insert into keluhan values
            ('',
            '$nama_keluhan')");

    

      
        echo"<script>alert('data berhasil disimpan');
        </script>";
        echo"<script>window.location='../tambah_keluhan.php'</script>";
        
    }
        ?>