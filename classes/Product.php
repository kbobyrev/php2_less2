<?php
	abstract class Product 
	{	
		protected $price;
		protected $saleCount;
		protected $proceeds;

		public function getPrice(){
			return $this->price;
		}
		function getSaleCount(){
			return $this->sellCount;
		}
		function getProceeds(){
			return $this->proceeds;
		}
		function setPrice($newPrice){
			$this->price =$newPrice;
		}
		//считаем доход(выручка - 13%)
		function revenueCount(){

			return $this->proceeds * 0.87;
		}
		// подсчет финальной стоимости оставляем абстрактным
		abstract public function finalPriceCount();
		//факт продажи
		abstract public function addSale($sale);

	}
?>