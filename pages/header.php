<?php
require_once("config.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classificadão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="navbar navbar-nav  bg-dark bg-gradient">
        <div class="container-fluid">
            <div class="navbar-header ">
                <a href="#" class="navbar-brand text-white">Classificadão</a>
            </div>

            <ul class="nav navbar navbar-right">
                <?php 
                if( isset($_SESSION['login']) && !empty($_SESSION['login'])): ?>
                <li class="nav-item"><a href="anuncios.php" class="nav-link text-white">Anúncios</a></li>
                <li class="nav-item"><a href="perfil.php" class="nav-link text-white">Perfil</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li>
                <?php else: ?>
                <li class="nav-item"><a href="cadastrar.php" class="nav-link text-white">Cadastrar-se</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link text-white">Entrar</a></li>                
                <?php endif; ?>
                
            </ul>
        </div>
    </div>
