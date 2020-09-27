<?php
include_once "DigitProduct.php";
class RealProduct extends DigitProduct{
	
	public function getPrice(){
		return parent::PRICE /2;
	}

	

}



?>