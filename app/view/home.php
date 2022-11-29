<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center; background: #ccc; width: 100%; margin: auto; margin-top: 5%; padding: 2%;"><?= $nomePagina; ?></h1>
    <h3 style="text-align: center;"><?= "Bem vindo, ".$_SESSION['nome']."!"; ?></h3>
</body>
</html>