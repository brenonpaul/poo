<?php
require_once ('../model/Cliente.php');


function login() {
    $cliente = new Cliente;
    $query = $cliente->loginCliente($_POST['nome'], $_POST['senha']);
    
    if ($query && mysqli_num_rows($query) != 0) {
        $row = mysqli_fetch_assoc($query);
     
        session_start();
        $_SESSION['idCliente'] = $row['id_cliente'];
        $_SESSION['nome'] = $row['nome'];
        
        header("Location: redirect.php?action=home");

    } else {
        session_start();
        $_SESSION['nome'] = $_POST['nome'];

        $_SESSION['categoria'] = "Erro";
        $_SESSION['mensagem'] = "Usuário ou senha incorretos";

        header("Location: redirect.php?action=telaLogin");
    }

}

//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {
    call_user_func($_GET['action']);
}
?>