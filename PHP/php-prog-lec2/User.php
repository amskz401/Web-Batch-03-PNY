<?php 
include("Human.php");
include 'SuperPower.php';
/**
 * 
 */

class User extends Human
{
	use SuperPower;
	// function getName() {
	// 	echo "Farhan";
	// }

	public function userFunction()
	{
		echo "From User Function";
		// code...
	}
}

$userOBJ = new User();

// is it possible ?
$userOBJ2 = new User();

$userOBJ->ironMan();

echo "<br>";

$userOBJ2->userFunction();