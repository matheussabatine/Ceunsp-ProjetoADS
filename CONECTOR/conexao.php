<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'loja');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('erro ao conectar-se ao banco');