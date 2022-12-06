<?php
    include '../koneksi.php';

    if(isset($_POST['simpan'])){
        $nm_buah = $_POST['nm_produk'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];

        //membuat folder berupa images untuk menyimpan gambar yang diupload yaitu di dalam folder pages namanya images
        $direktori = "images/";  
        //akan disimpan di lokasi file sementara karena nanti gambar akan diubah nama
        $tmp_name = $_FILES["gambar"]["tmp_name"];
        //mengambil tipe file misal .jpg dkk
        $name = pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION);
        //nama gambar akan disimpan sebagai kopiku.jpg atau sesuai tipe file dan nama kafe yang diinputkan
        $nama_baru = 'buah_'.$_POST['nm_produk'].".".$name;
        //memindahkan folder yang sebelumnya disimpan di lokasi file sementara ke folder yang dibuat pada lokal penyimpanan
        move_uploaded_file($tmp_name, $direktori."/".$nama_baru);
        //menyimpan file gambar sesuai dengan nama yang dibuat jadi pada database akan disimpan seperti nama baru
        $gambar = $nama_baru;
        
        //ketika tidak ada gambar yang diupload, jadi di database dibuat null jika upload gambar tdk wajib
        if ($_FILES['gambar']['name'] == null) {
            //nama gambar akan diisi dengan - yang mana nantinya gambar akan ditampilkan default gambar.
            $gambar = '-';
        }

        $query_daftar = "INSERT INTO tb_produk VALUES ('','buah','$nm_buah','$harga','$deskripsi','$stok','$gambar')";
        $sql_daftar = mysqli_query($db, $query_daftar);
        if($sql_daftar){
            echo "<script> 
                    alert('Produk Berhasil Ditambahkan!'); 
                    document.location.href = 'produk-buah.php'; 
                </script>";
            $_SESSION['daftar'] = 'sukses';
        }
    }
?>