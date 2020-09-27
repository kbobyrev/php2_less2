<?php
	require_once "classes.php";

	$realProd = new RealProduct();
	$digitProd =new DigitProduct();
	$weigthProd =new WeightProduct(1);


	$realProd->addSale(1);
	$digitProd->addSale(5);
	$weigthProd->addSale(1000);

	//echo $realProd->getSaleCount().PHP_EOL;
	echo $realProd->revenueCount().PHP_EOL;
	echo $digitProd->revenueCount().PHP_EOL;
	echo $weigthProd->revenueCount().PHP_EOL;



?>



