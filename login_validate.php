<?php
    include 'koneksi.php';
    session_start();

        $username = $_POST['username'];
        $password = $_POST['password'];

        $random = "p3ng4c4k";
        $encrypt = md5 ($random . md5($password));
        // var_dump($hash);

        $qry = mysqli_query($db, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$encrypt'");
        $validate = mysqli_num_rows($qry);

        if($validate > 0){
            $data = mysqli_fetch_assoc($qry);
            if($encrypt == $data['password'] && $data['level'] == "admin"){
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "admin";
                echo "<script>alert('Admin Berhasil Login');window.location='admin/dashboard.php';</script>";

            } else if($encrypt == $data['password'] && $data['level'] == "user"){
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "user";
                echo "<script>alert('User $username Berhasil Login');window.location='beranda.php';</script>";

            } else{
                echo "<script>alert('Username atau password Anda salah!');window.location='masuk.php';</script>";
            }
        } else{
            echo "<script>alert('Login Gagal');window.location='masuk.php';</script>";
        }
?>