<?php
  echo 
    "<script>
      function salir(){
        if(confirm('¿Realmente desea salir?')){
          document.location='../sql/cerrar_sesion.php';
        }
    }
    </script>"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Roux Conference</title>
<link rel="stylesheet" href="/roux_academy/css/style.css">
</head>
<body id="page_artists">
<div class="wrapper">
  <header>
    <div class="branding"> <img src="/roux_academy/images/ralogo_monogram.png" alt="Logo">
      <p>Roux Academy<br>
        Art • Media • Design</p>
        <h2><?php echo "Bienvenido " .  $_SESSION['usuario'];?></h2>
    </div>
    <div class="description">
      <h1>Roux Academy 2016 Art Conference</h1>
      <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
    </div>
    
    <nav>
      <ol>
        <li><a href="/roux_academy/index/index.php">HOME</a></li>
        <li><a href="/roux_academy/artists/artists.php">ARTISTS</a></li>
        <li><a href="/roux_academy/schedule/index.php">SCHEDULE</a></li>
        <li><a href="/roux_academy/venue/venue.php">VENUE/TRAVEL</a></li>
        <li><a href="/roux_academy/register/index.php">REGISTER</a></li>
        <li><a href="/roux_academy/assistans/asistentes.php">ASISSTANS</a></li>
        <li><a onclick="salir();">LOG OUT</a></li>
         
      </ol>
    </nav>
  </header>
  
  <div id="rotator"> <img src="/roux_academy/images/art01.jpg" alt="Artwork from show"> </div>