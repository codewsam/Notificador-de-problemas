<?php


$arquivo = fopen('../../app_help_desk/arquivo.hd','a');

session_start();
//montagem texo
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' .$descricao . PHP_EOL;

//abrindo arquivo
fwrite($arquivo, $texto);
//fechando
fclose($arquivo);

echo $texto;

header('location:abrir_chamado.php')

?>