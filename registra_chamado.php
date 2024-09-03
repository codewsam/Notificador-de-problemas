<?php


$arquivo = fopen('arquivo.hd','a');


//montagem texo
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);
$texto =$titulo . '#' . $categoria . '#' .$descricao . PHP_EOL;

//abrindo arquivo
fwrite($arquivo, $texto);
//fechando
fclose($arquivo);

echo $texto;

header('location:abrir_chamado.php')

?>