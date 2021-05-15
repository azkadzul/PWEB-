<?php
class Balok
{
	
	private $panjang;
	private $lebar;
	private $tinggi;
	
	function __construct($panjang, $lebar, $tinggi)
	{
		$this->panjang = $panjang;
		$this->lebar = $lebar;
		$this->tinggi = $tinggi;
	}
	
		function get_panjang()
	{
		return $this->panjang;
	}
	
		function get_lebar()
	{
		return $this->lebar;
	}
	
		function get_tinggi()
	{
		return $this->tinggi;
	}
	
	function get_luas()
	{
		return $this->panjang * $this->lebar * 2 + $this->lebar * $this->tinggi * 2 + $this->panjang * $this->tinggi * 2;
	}
	
	function get_volume()
	{
		return $this->panjang * $this->lebar * $this->tinggi;
	}
}

?>