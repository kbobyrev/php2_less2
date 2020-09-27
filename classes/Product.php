<?php
	abstract class Product 
	{	
		
		// подсчет финальной стоимости оставляем абстрактным
		abstract public function finalPriceCount();
		//факт продажи
		abstract public function addSale(float $sale);
		abstract public function revenueCount();
	}
?>