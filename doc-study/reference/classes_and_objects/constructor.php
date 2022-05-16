<?php
/* Constructors */
class Foo {
	public function __construct() {
		print "In Foo constructor\n";
	}
}

class Bar extends Foo {
	public function __construct() {
		parent::__construct();
		print "In bar constructor\n";
	}
}

$obj = new Foo();
$obj = new Bar();

/* Similarity to other methods concerning to parameters */
class Point {
	protected int $x;
	protected int $y;

	public function __construct(int $x, int $y = 0) {
		$this->x = $x;
		$this->y = $y;
	}
}

$p1 = new Point(4);
$p2 = new Point(4, 5);

/* Parameter promoted to property */
class FooBar {
	public function __construct(protected int $x, protected int $y = 0) {}
}

$foobar = new FooBar(4);

/* Static methods for construction
 * (Sort of constructor overload) */

class Product {
	private ?int $id;
	private ?string $name;

	private function __construct(int $id = null, ?string $name = null) {
		$this->id = $id;
		$this->name = $name;
	}

	public static function fromBasicData(int $id, string $name): static {
		$new = new static($id, $name);
		return $new;
	}

	public static function fromJson(string $json): static {
		$data = json_decode($json);
		return new static($data['id'], $data['name']);
	}

	public static function fromXml(string $xml): static {
		$data = convert_xml_to_array($xml);
		$new = new static();
		$new->id = $data['i'];
		$new->name = $data['name'];
		return $new;
	}
}

// EOF

