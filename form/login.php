<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        }

        div {
            background-color: rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        input {
            padding: 5px;
            border: none;
            outline: none;
            font-size: 15px;

        }

        .inputSubmit {
            font-weight: 0;
            font-size: 16px;
            color: #ffffff;
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(0, 212, 255));
            padding: 10px 47px;
            border: none;
            box-shadow: rgb(0, 0, 0) 0px 0px 0px 0px;
            border-radius: 10px;
            transition: 327ms;
            transform: translateY(0);
            text-decoration: none;
            
        }

        .inputSubmit:hover {
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(0, 212, 255));
            transition: 327ms;
            padding: 10px 77px;
            transform: translateY(-0px);
            color: #ffffff;
            border: none;
        }
        a{
          text-decoration: none;  
        }
    </style>
</head>

<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>

</body>

</html>