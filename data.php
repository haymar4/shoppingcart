<?php
require_once "text.php";
?>
<?php

function createItems():array {
	$items = array(
		new Item("Head First PHP & MySQL", 4,650),
		new Item("リーダブルコード", 2,600), 
		new Item("Head First デザインパターン", 5,060),
		new Item("PHPによるデザインパターン入門", 2,400)
	);	
	return $items;
}
?>