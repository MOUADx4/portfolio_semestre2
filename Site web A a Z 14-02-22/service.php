<?php
include 'classes.php';

$menu = new GenerateContent();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMERA</title>
    <link rel="stylesheet" href="service.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <script src="videoPlayer.js"></script>
</head>
<body>
    <header>
        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <p><span>Luxe </span>CAMERA</p>
        </div>
        
        <nav>
            <?php $menu->renderHeader(); ?>
        </nav>
        
        
    </header>
    <br><br>
<section id="services">
    <br><br><br><br><br><br>
        <h1 class="section_title">Nos Services</h1>
    </section>

    <div class="container">
        <div class="niveau">
            <div class="camera">
                <img src="images/cam1.jpg" alt="1">
            </div>
            <div class="camera">
                <img src="images/cam2.jpg" alt="2">
            </div>
            <div class="camera">
                <img src="images/cam3.jpg" alt="3">
            </div>
        </div>
        <div class="niveau">
            <div class="camera">
                <img src="images/cam4.jpg" alt="4">
            </div>
            <div class="camera">
                <img src="images/cam5.jpg" alt="5">
            </div>
            <div class="camera">
                <img src="images/cam6.jpg" alt="6">
            </div>
        </div>
    </div>
    <br><br>
<div class="video-section">
    <br><br>
<section id="services">
        <h1 class="section_title">PRESENTATION CAMERA</h1>
    </section>
    <br><br><br><br><br><br>
    <video controls width="600">
        <source src="images/video1.mp4" type="video/mp4">
       
    </video>
</div>
<br><br> <br><br>
<section id="services">
        <h1 class="section_title">GUIDE CAMERA</h1>
        <div class="list_services">
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Dépannage</h3>
                <p>Camera</p>
                <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Dépannage</h3>
                <p>Camera</p>
               
                <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Dépannage</h3>
                <p>Camera</p>
                <a href="#" class="read_more">Lire Plus</a>
            </div>
        </div>
    </section>


</body>
</html>
