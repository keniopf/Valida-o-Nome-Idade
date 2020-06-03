<?php


$nome = $_POST['nome'];
$idade = $_POST['idade'];

include "servicos/msgSession.php";
include "servicos/validacao.php";
include "servicos/categoria.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');
?>