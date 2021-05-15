<?php

require 'rumusbalok.php';
$block = new Balok(3, 4, 5);

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

	<h1>Panjang Balok yaitu <?= $block->get_panjang() ?> cm, lebar balok yaitu <?= $block->get_lebar() ?> cm, dan tinggi balok yaitu <?= $block->get_tinggi() ?> cm, </h1>
	<h1>Luas Permukaan Balok yaitu <?= $block->get_luas() ?> cm2</h1>
	<h1>Volume Balok yaitu <?= $block->get_volume() ?> cm3</h1>

</body>
</html>