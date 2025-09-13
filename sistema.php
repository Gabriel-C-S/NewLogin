<?php
session_start();

// Se não estiver logado, redireciona para login
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

$logado = $_SESSION['usuario'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>Home</title>
    
</head>
<body>
    <header>
        <nav class="navbar section-content">
            <!-- <a href="#" class="nav-log"> -->
                <div class="icon">
                    <img class="icon" src="/img/icon.png">
                </div>
                <h2 class="logo-text"> <a href="index.html" class="logo-link">Helenão</a></h2>
            </a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Sobre</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Funcionalidades</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Tecnologia</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Logar/Cadastrar</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">Vamos estudar?</h2>
                    <h3 class="subtitle">Auxiliando a estudar para o vestibular com as ferramentas mais queridas do study!</h3>
                    <p class="description">Seja bem-vindo(a) ao nosso site! Por aqui você encontra funcionalidades que irão te auxiliar nos estudos e playlists com checklisit.
                    E o melhor, de forma totalmente gratuita!</p>
                       
                    <div class="button">
                        <a href="#" class="button order-now">Começar a estudar</a>
                    </div>
                </div>
                <div class="image-wrapper">
                    <img src="/img/image.png" alt="Heleno" class="image-home">
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="section-content">
                <div class="about-image-wrapper">
                    <img src="/img/sobre.png" alt="About" class="about-image">
                </div>
                <div class="about-details">
                    <h2 class="section-title">Sobre</h2>
                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        At itaque eveniet tempore rerum adipisci sunt accusantium, ipsam hic repudiandae.
                        Itaque adipisci iusto, laborum sequi deserunt necessitatibus a minus neque cum?Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Numquam possimus sit, quaerat magnam nesciunt fugiat laboriosam, cum nulla ad aliquam perspiciatis voluptatum dolore, sapiente consequuntur at mollitia iusto modi eius.
                    </p>
                    
                </div>
            </div>
        </section>

    </main>
</body>
</html>
