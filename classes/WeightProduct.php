<?php
include_once  "DigitProduct.php";

/*
 весосовой продукт
 */
class WeightProduct extends DigitProduct{
	public $kilo=0;

	function __construct($price){
		$this->price=$price;
	}


	//финальная стоимость = стоимость
	public function finalPriceCount(){
		return $this->price;
	}

	private function discountCount($sale){
		if ($sale>100){
			return 0.8; //20% discount
		}elseif ($sale>50){
			return 0.9; //10% discount
		}else{
			return 1;//no discount
		}
	}
	//факт продажи
	function addSale(float $sale){
		$this->saleCount=+$sale;
		$this->$proceeds=+(int)($this->finalPriceCount())*$this->discountCount($sale)*$sale;
	}

}

?>