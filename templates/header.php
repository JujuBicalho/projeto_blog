<?php //Toda a tag header aqui 
include_once("helpers/url.php"); //incluindo o BASE_URL
include_once("data/posts.php");  //acessa os dados em qualque lugar do site
include_once("data/categories.php"); //acessa os dados em qualque lugar do site
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">  
  <!---Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
  <title>Blog Codar</title>
</head>

<body>

    <header>
            <a href="<?= $BASE_URL ?>" id="logo"> <!--Sempre que clicar na logo direciona para a home-->
            <img src="<?= $BASE_URL?>/img/logo.svg" alt="Logo Blog Codar"></a> 
        <nav>
            <ul id="navbar">
            <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Categorias</a></li>
            <li><a href="#" class="nav-link">Sobre</a></li>
            <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
        </nav>
    </header>