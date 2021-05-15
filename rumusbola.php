<?php
class Bola
{
	
	private $jarijari;
	
	function __construct($jarijari)
	{
		$this->jarijari = $jarijari;
	}
	
	function get_jarijari()
	{
		return $this->jarijari;
	}
	
	function get_luas()
	{
		return $this->jarijari * $this->jarijari * 3.14 * 4;
	}
	
	function get_volume()
	{
		return $this->jarijari * $this->jarijari * $this->jarijari * 3.14 * 4 / 3;
	}
}

?>