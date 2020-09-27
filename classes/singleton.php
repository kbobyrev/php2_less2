<?php
	trait testTrait{
		public function testFunction(){
			return 'trait is work';
		}
	}

	class testSingleton
	{
		static $testItem;
		private function __construct()
		{
		}
		public static function getObj(){
			if (self::$testItem==null){
				self::$testItem= new self;
			}
			return self::$testItem;
		}
		use testTrait;
	}
?>