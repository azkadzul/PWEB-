<?php

require 'rumuskubus.php';
$kotak = new Kubus(4);

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

	<h1>Sisi Kubus yaitu <?= $kotak->get_sisi() ?> cm</h1>
	<h1>Luas Permukaan Kubus yaitu <?= $kotak->get_luas() ?> cm2</h1>
	<h1>Volume Kubus yaitu <?= $kotak->get_volume() ?> cm3</h1>

</body>
</html>