<?php
    include '../koneksi.php';

    if(isset($_POST['simpan'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $random = "p3ng4c4k";
        $encrypt = md5 ($random . md5($password));

        $query_daftar = "INSERT INTO tb_user VALUES ('','$username','$encrypt','$email','admin')";
        $sql_daftar = mysqli_query($db, $query_daftar);
        if($sql_daftar){
            echo "<script> 
                    alert('Admin Berhasil Didaftarkan!'); 
                    document.location.href = 'daftar-admin.php'; 
                </script>";
            // header('location: masuk.php');
            $_SESSION['daftar'] = 'sukses';
        }
    }
?>