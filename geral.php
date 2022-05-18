<?php
$login = $_POST['nome'];
$senha = $_POST['senha'];

$usuario1 = 'raphael';
$senha1 = '123456';

if ($login == $usuario1 && $senha == $senha1) {
	header('location: aula1.html');
}
