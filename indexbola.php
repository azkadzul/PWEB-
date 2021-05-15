<?php

require 'rumusbola.php';
$sphera = new Bola(2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<h1>Jari-Jari Bola yaitu <?= $sphera->get_jarijari() ?> cm</h1>
	<h1>Luas Permukaan Bola yaitu <?= $sphera->get_luas() ?> cm2</h1>
	<h1>Volume Bola yaitu <?= $sphera->get_volume() ?> cm3</h1>

</body>
</html>