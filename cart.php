<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];

    // Adiciona o produto ao carrinho
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['remover'])) {
    $indice = $_GET['remover'];

    // Remove o produto do carrinho

}

?>