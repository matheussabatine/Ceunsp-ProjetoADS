<?php
session_start();
unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['endereco']);
header('Location: index.php');
exit();

//session_destroy();
// destrói todas as sessões