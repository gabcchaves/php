<?php
class Cart {
	const APPLE = 0.7;
	const BANANA = 0.3;
	
	protected $product_list = array();

	// Add products to cart
	public function add($product, $quantity) {
		$this->product_list[$product] = $quantity;
	}

	// Get quantity of a given product
	public function get_quantity($product) {
		return isset($this->product_list[$product]) ? $this->product_list[$product] : false;
	}

	// Get total price
	public function get_total($tax) {
		$total = 0.0;
		// Callback to calculate price of an amount of a product with tax
		$callback = function ($quantity, $product) use ($tax, &$total) {
			$price_item = constant(__CLASS__ . "::" . strtoupper($product));
			$total += ($price_item * $quantity) * ($tax + 1.0);	
		};

		array_walk($this->product_list, $callback);

		return round($total, 2);
	}
}

$cart = new Cart();
$cart->add('apple', 3);
$cart->add('banana', 3);

print $cart->get_total(0.05) . PHP_EOL;

// EOF

