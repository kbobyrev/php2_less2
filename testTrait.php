<?php
	include "classes/singleton.php";

	$test = testSingleton::getObj();

	echo $test->testFunction();

?>