<?php
        class Car
	{
		private $brand_name;
		private $color;
		private $price;

		public function set_car_info($brand_name, $color, $price)
		{
			$this->brand_name = $brand_name;
			$this->color = $color;
			$this->price = $price;
			echo 'Car info set successfully !';
		}
		public function get_car_info()
		{
			echo 'Brand Name : '.$this->brand_name.'<br>'.
				'Color : '.$this->color.'<br>'.
				'Price : '.$this->price;
		}
	}
	$carObj = new Car();
	$carObj->set_car_info('TATA', 'Red', '700000');
	echo '<br>'; 
	$carObj->get_car_info();
	echo '<hr>';
	$carObj->set_car_info('FORD', 'Red Black', '1000000');
	echo '<br>';
	$carObj->get_car_info();
	echo '<hr>';
	$carObj->set_car_info('TOYOTA', 'white', '50,00,000');
	echo '<br>';
	$carObj->get_car_info();
?>