<?php
  include_once("helpers/url.php");
  include_once("data/posts.php");
  include_once("data/categories.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Codar</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>
<body>
 
  <header>
   <a href="<?= $BASE_URL ?>" id="logo">
    <img src="<?=  $BASE_URL ?>/img/logo.svg" alt="blog codar">
   </a>
   <nav>
    <ul id="navbar">
      <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
      <li><a class="nav-link" href="#">Categorias</a></li>
      <li><a class="nav-link" href="#">Sobre</a></li>
      <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
    </ul>
   </nav>
  </header>