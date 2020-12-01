<?php
Class A{}

Class B extends A
{
	public function __construct($a, $b)
	{
		$this->a=$a;
		$this->b=$b;
	}
	protected $a;
	protected $b;

}

Class C extends B
{
	public function __construct($a,$b,$c)
	{
		$this->c=$c;
		parent::__construct($a,$b);
	}
	protected $c;
}

$a1=new A();
$b2=new B($a1);
$b3=new B($a1);
$b4= new B($b2);
$c5=new C($b3, $b4);
?>