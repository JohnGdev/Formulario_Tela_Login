<?php
session_start();
//print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
        body {

            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            color: white;
            text-align: center;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: linear-gradient(to right, #87CEFA, #ADD8E6, #C7E0E9, #D6EDF5, #E6F5FE);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .navbar-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .navbar-item {
            margin: 0 1rem;
        }

        .navbar-link {
            color: #333;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
        }

        .navbar-link:hover {
            color: #0066cc;
        }

        .navbar-logout {
            margin-left: 1rem;
        }

        .logout-link {
            color: #0066cc;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.2s ease-in-out;
        }

        .logout-link:hover {
            color: #ff3333;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <ul class="navbar-menu">
            <li class="navbar-item">
                <a class="navbar-link" href="#">Página inicial</a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" href="#">Produtos</a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" href="#">Sobre nós</a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" href="#">Contato</a>
            </li>
        </ul>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <?php 
        echo"<h1>Bem vindo <u>$logado</u></h1>";
    ?>
</body>

</html>