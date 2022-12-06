<?php 
    include '../koneksi.php';

    $id_user = $_GET['id'];
    $query = mysqli_query($db, "DELETE FROM tb_user WHERE id_user = '$id_user'") or die(mysql_error());

    if ($query) {
        echo "<script> 
                alert('Data Berhasil Dihapus!'); 
                document.location.href = 'daftar-admin.php'; 
            </script>";
    } else {
        echo "<script> 
                alert('Gagal Hapus Data!'); 
                document.location.href = 'daftar-admin.php'; 
            </script>";
    }
?>