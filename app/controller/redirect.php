<?php 

function telaLogin() {

    session_start();
    $nomePagina = "Tela de Login";
    $mensagem = isset($_SESSION['mensagem']) ? $_SESSION['mensagem'] : "";
    $categoria = isset($_SESSION['categoria']) ? $_SESSION['categoria'] : "";

    unset($_SESSION['mensagem']);
    unset($_SESSION['categoria']);

    require("../view/telaLogin.php");
}

function home() {

    session_start();
    $nomePagina = "Página Principal";
    $mensagem = isset($_SESSION['mensagem']) ? $_SESSION['mensagem'] : "";
    $categoria = isset($_SESSION['categoria']) ? $_SESSION['categoria'] : "";

    unset($_SESSION['mensagem']);
    unset($_SESSION['categoria']);

    require("../view/home.php");
}


//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {
    call_user_func($_GET['action']);
} 
?>