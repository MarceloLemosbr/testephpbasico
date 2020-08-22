<?php
error_reporting( E_ALL );
$servidor = 'remotemysql.com';
$usuario = 'pOc75LwyUJ';
$senha = 'YOKGEgd8g3';
$banco = 'pOc75LwyUJ';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

$sql = "SELECT * FROM conteudo";
$result = $mysqli -> query($sql);
$pai = mysqli_fetch_array($result);

var_dump($pai);

		?>