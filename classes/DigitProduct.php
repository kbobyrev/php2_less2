<?php
include_once  "Product.php";

/*
 Цифровой продукт
 */
class DigitProduct extends Product
{
	const PRICE =100;
	private $price=0;
	private $saleCount;
	private $proceeds=0;

	public function getPrice(){
		return self::PRICE;
	}
	function getSaleCount(){
		return $this->sellCount;
	}
	function getProceeds(){
		return $this->proceeds;
	}
	
	//финальная стоимость = стоимость
	public function finalPriceCount(){

		return $this->getPrice();
		
	}
	//добавляем продажу
	public function addSale(float $sale){
		$this->$saleCount=+$sale;
		$this->$proceeds=+((int)($this->finalPriceCount())*$sale);
	}
	// считаем прибыль
	public function revenueCount()
	{
		return $this->$proceeds*0.87;
	}
}
?>