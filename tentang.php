<!DOCTYPE html>
<?php
	include "koneksi.php";
	session_start();
?>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>TOKOPETANI</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout position_head">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/tokpet.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="beranda.php">Beranda</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="about.php">Tentang produk</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="terlaris.php">Terlaris</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="shop.php">Belanja</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Bantuan</a>
                              </li>
                              <?php 
                                 if(isset ($_SESSION['username'])){
                                       echo "<li class='nav-item d_none masuk_button'>
                                                <a class='nav-link' href='logout.php'>Logout</a>
                                             </li>";
	                              } else {
                                       echo "
                                             <li class='nav-item d_none masuk_button'>
                                                <a class='nav-link' href='masuk.php'>Masuk</a>
                                             </li>
                                             <li class='nav-item d_none'>
                                                <a class='nav-link' href='daftar.php'>Daftar</a>
                                             </li>";
                                 }
                              ?>
                              <li class="nav-item d_none sea_icon">
                                 <a class="nav-link" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/kiwi.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Buah Kiwi</h2>
                     <p>Buah kiwi diklasifikasikan sebagai buah beri. Di Indonesia, Anda mungkin mengenal dua jenis kiwi, kiwi hijau dan kiwi gold. Kedua jenis buah kiwi ini sama-sama memiliki kandungan yang baik bagi tubuh Anda. Perbedaannya hanya kiwi hijau mengandung pigmen hijau atau klorofil, sedangkan kiwi gold tidak.</p>
                  </div>
                  <a class="read_more" href="#">Belanja</a>
               </div>
            </div>
         </div>
      </div>
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/bayam.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Bayam</h2>
                     <p>Bayam merupakan salah satu jenis sayuran hijau yang banyak ditanam dan dikembangkan di Asia, termasuk Indonesia. Tak hanya baik untuk orang dewasa, sayuran ini juga baik dikonsumsi oleh bayi, anak-anak, ibu hamil, hingga lansia.</p>
                  </div>
                  <a class="read_more" href="#">Belanja</a>
               </div>
            </div>
         </div>
      </div>
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/jagung.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Jagung</h2>
                     <p>Jagung (Zea mays ssp. mays) adalah salah satu tanaman pangan penghasil karbohidrat yang terpenting di dunia, selain gandum dan padi. Bagi penduduk Amerika Tengah dan Selatan, bulir jagung adalah pangan pokok, sebagaimana bagi sebagian penduduk Afrika dan beberapa daerah di Indonesia. Pada masa kini, jagung juga sudah menjadi komponen penting pakan ternak. Penggunaan lainnya adalah sebagai sumber minyak pangan dan bahan dasar tepung maizena. Berbagai produk turunan hasil jagung menjadi bahan baku berbagai produk industri farmasi, kosmetika, dan kimia.</p>
                  </div>
                  <a class="read_more" href="#">Belanja</a>
               </div>
            </div>
         </div>
      </div>
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/avocado.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Alpukat</h2>
                     <p>Alpukat memiliki kandungan gizi yang luar biasa. Alpukat mengandung vitamin, karbohidrat, protein, lemak, hingga mineral yang baik untuk kesehatan.</p>
                  </div>
                  <a class="read_more" href="#">Belanja</a>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> Location</li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> +01 1234567890</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> demo@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>