<?php 

/**
 * Public => Access Everything
 * Private => Don't have access at all
 * Protected => Access with some limitations
 */
class Human
{
	private $name = "";

	public function setName($name = "") {
		$this->name = $name;
	}
	public function getName()
	{
		echo $this->name;
	}



	public function getPhone($phone = 0) {
		echo $phone;
	}

	public function getAge($age = 0) {
		echo $age;
	}
}