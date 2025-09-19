<?php require_once("./includes/page-top.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./css/default.css" rel="stylesheet" />
    <title>Larika</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/ham-ico-64.png" alt="" width="32" height="32">
                Larika
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
                aria-controls="navbarMain" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home Page</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuLink" role="button" 
                            data-bs-toggle="dropdown" aria-expanded="false">Cardapio</a>
                        <ul class="dropdown-menu" aria-labelledby="menuLink">
                            <li>
                                <a class="dropdown-item" href="#">Hamburger</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Hot Dog</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Batatas Recheadas</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Petiscos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Bebidas</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <main class="container p-3">
                <div class="row">
                    <div class="col">
                        <div class="card text-white bg-warning">
                            <img class="card-img-top" src="./img/hamburger-cartoon-w358.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-warning ">
                            <img class="card-img-top" src="./img/hotdog-cartoon-w358.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-warning ">
                            <img class="card-img-top" src="./img/snacks-cartoon-w358.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-warning ">
                            <img class="card-img-top" src="./img/potato-cartoon-w358.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </nav>