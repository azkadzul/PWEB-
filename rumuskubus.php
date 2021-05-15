<?php
class Kubus
{
	
	private $sisi;
	
	function __construct($sisi)
	{
		$this->sisi = $sisi;
	}
	
		function get_sisi()
	{
		return $this->sisi;
	}
	
	function get_luas()
	{
		return $this->sisi * $this->sisi * 6;
	}
	
	function get_volume()
	{
		return $this->sisi * $this->sisi * $this->sisi;
	}
}

?>