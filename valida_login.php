<?php

session_start();


$usuario_autenticado = false;

$usuarios_app = array(
    array('email' => 'samuel@teste.com', 'senha' => '123456'),
    array('email' => 'user@teste.com', 'senha' => 'abcd'),
);

if (isset($_POST['email']) && isset($_POST['senha'])) {
    foreach ($usuarios_app as $user) {
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
           
        }
    }

    if ($usuario_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = "sim";
        header('location: home.php');
    } else {
        $_SESSION['autenticado'] = "nao";
        header('location:index.php?login=erro');
    }
}

/* Debugging: 
echo $_POST['email'];
echo '<br/>';
echo $_POST['senha'];
echo '<hr>';
*/
?>
