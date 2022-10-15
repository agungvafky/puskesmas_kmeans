 <?php
 include '../koneksi.php';
    if(isset($_POST['simpan']))
    {
        ////deklarasi variable
       
        $tahun=$_POST['tahun'];
      
        mysqli_query($koneksi,"update tampil set 
        tahun='$tahun' ");
      
        echo"<script>alert('tahun berhasil diubah');
        </script>";
        echo"<script>window.location='../index.php'</script>";
        
    }
        ?>