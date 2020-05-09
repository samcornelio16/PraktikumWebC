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
        <div class="card">
            <img src="dede.jpg"  style="width:100%">
            <h1>Dede Wijaya</h1>
            <p>12345678</p>
        </div>
        <div class="card">
            <img src="bakti.jpg"  style="width:100%">
            <h1>Bakti Pernata</h1>
            <p>12345678</p>
        </div>
        <div class="card">
            <img src="owen.jpg"  style="width:100%">
            <h1>Johan Rinaldi</h1>
            <p>12345678</p>
        </div>
   </div>
         <div class="footer">
            <h2>UNIVERSITAS UDAYANA</h1>
              <h4>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</h4>
              <h4>Phone Number: +62 (361) 701954, 704845</h4>
              <h4>Fax: +62 (361) 701907</h4>
              <h4>Email: info@unud.ac.id</h4>
          </div>
         
      
    
</body>
</html>