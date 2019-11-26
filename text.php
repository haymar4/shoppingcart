<?php

class Item {

	private $name;
	private $price;
	private $cn;
	private $cid;


	function __construct(string $name, int $price,string $cn, int $cid) {
		$this->name = $name;
		$this->price = $price;
		$this->cn = $cn;
		$this->cid = $cid;
	}



	function setName(string $name):void {
		$this->name = $name;
	}
	function getName():string {
		return $this->name;
	}

	function setPrice(int $price):void {
		$this->price = $price;
	}
	function getPrice():string {
		return number_format($this->price);
	}
	function setCn(string $cn):void {
		$this->cn = $cn;
	}
	function getCn():string {
		return $this->cn;
	}
	function setCid(int $cid):void {
		$this->cid = $cid;
	}
	function getCid():string {
		return number_format($this->cid);
	}
}
?>