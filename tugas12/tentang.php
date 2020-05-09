<?php
    session_start();
    if(isset($_SESSION['level'])){
        if($_SESSION['level'] == NULL){
            header('Location: login.php');
        }
    }else{
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Udayana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="left-box">
            <img class="logounud" src="logo.png" alt="Logo.png" height="150px">
            <h3>ARTIKEL POPULER</h3>
            <a href="#" style="text-decoration: none;">
              <h4>Desain Web</h4>
            </a>
            <a href="#" style="text-decoration: none;">
              <h4>HTML</h4>
            </a>
            <a href="#" style="text-decoration: none;">
              <h4>CSS</h4>
            </a>
          <section class="sub-panel-1">
            <a href="#" style="text-decoration: none;">
              <h4>Lain-lain</h4>
            </a>
    </div>
   <div class="right-box">
       <section class="navbar">
           <ul>
              <li><a href="index.php"><h3>HOME</h3></a></li>
               <li><a href="tentang.php"><h3>TENTANG</h3></a></li>
               <li><a href="pengajar.php"><h3>PENGAJAR</h3></a></li>
               <li><a href="kontak.php"><h3>KONTAK</h3></a></li>
               <li><a href="Logout.php"><h3>LOG OUT<h3></a></li>
           </ul>
       </section>
       
       <section class="penjelasan">
         <h1 style="text-align: center;">Arti Lambang Universitas Udayana</h1>  
         <img src="logo.png" style="width: 150px; display: block; margin-left: auto;margin-right: auto;">
         </section>
         <p><strong>Lambang Universitas Udayana</strong></p>
         <p>Menurut Statuta Universitas Udayana 2017 Pasal 3 menyebutkan :</p>
         <ol>
             <li>Lambang Unud bernama Widya Cakra Prawartana yang artinya perputaran roda ilmu pengetahuan berdasarkan Pancasila</li>
             <li>Lambang sebagaimana dimaksud ayat (1) adalah :</li>

             <p>Berwujud sebuah lingkaran yang mempunyai roda cakra, ditengah terdapat padma (bunga teratai) dengan 8 (delapan) helai daun yang melambangkan delapan penjuru angin, yang melambangkan kesucian  Tuhan Yang Maha Esa merupakan sila pertama dari Pancasila.</p>
             <p>Roda cakra mempunyai empat buah jari-jari yang melambangkan kekuatan yang membaja dari empat sila Pancasila.Bagian luar dari jari-jari lingkaran roda dihiasi dengan 54 (lima puluh empat) titik sebagai ratna permata sesuai dengan rangkaian ilmu pengetahuan yang diberikan Unud. Warna  lambang Unud adalah kuning keemasan dengan warna dasar biru langit.  Warna kuning keemasan melambangkan matahari terbit dan warna biru melambangkan warna langit. </p>
         </ol>
   </div>
         <div class="footer">
            <h2>UNIVERSITAS UDAYANA</h1>
              <h4>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</h4>
              <h4>Phone Number: +62 (361) 701954, 704845</h4>
              <h4>Fax: +62 (361) 701907</h4>
              <h4>Email: info@unud.ac.id</h4>
          </div>
         
       </section>
   </div>
    
</body>
</html>