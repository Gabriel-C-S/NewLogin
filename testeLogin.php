<?php
print_r($_REQUEST);

if (isset($_POST['email']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo 'Email: ' . $email . '<br>';
    echo 'Senha: ' . $senha . '<br>';
} else {
    header('Location: index.php');
    exit;
}
?>
