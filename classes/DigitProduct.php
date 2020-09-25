<?php
include_once  "RealProduct.php";

/**
 Цифровой продукт
 */
class DigitProduct extends RealProduct
{
	
	function __construct($price){
		parent::__construct($price);
	}
	//финальная стоимость = стоимость
	public function finalPriceCount(){

		return (int)(parent::getPrice())/2;
		
	}

}

?>