<?php
include_once "Product.php";

/**
 штучный продукт
 */
class RealProduct extends Product
{
	
	function __construct($price){
		$this->price =$price;
	}
	//финальная стоимость = стоимость
	public function finalPriceCount(){
		return $this->price;
	}
	//факт продажи
	public function addSale($sale){
		$this->saleCount=$sale;
		$fRprice =(int)($this->finalPriceCount());
		$this->proceeds =+ ($fRprice*$sale);
	}

}

?>