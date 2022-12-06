<?php 
    include '../koneksi.php';

    $id_produk = $_GET['id'];
    $query = mysqli_query($db, "DELETE FROM tb_produk WHERE id_produk = '$id_produk'") or die(mysql_error());

    if ($query) {
        echo "<script> 
                alert('Data Berhasil Dihapus!'); 
                document.location.href = 'produk-buah.php'; 
            </script>";
    } else {
        echo "<script> 
                alert('Gagal Hapus Data!'); 
                document.location.href = 'produk-buah.php'; 
            </script>";
    }
?>