<?php
include_once  "RealProduct.php";

/**
 весосовой продукт
 */
class WeightProduct extends RealProduct
{
	public $kilo=25;

	function __construct($price){
		parent::__construct($price);
	}
	//финальная стоимость = стоимость
	public function finalPriceCount(){
		if ($this->kilo>100){
			return $this->price * 0.8; //20% discount
		}elseif ($this->kilo>50){
			return $this->price * 0.9; //10% discount
		}else{
			return $this->price;//no discount
		}
	}
	//факт продажи
	function addSale($sale){
		$this->saleCount=+$sale;
		$this->kilo=$sale;
		$this->proceeds =+ (int)($this->finalPriceCount());
	}

}

?>