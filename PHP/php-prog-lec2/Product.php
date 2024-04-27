<?php 
include 'User.php';
/**
 * 
 */
class Product extends User
{
	function productName($title = "")
	{
		echo $title;
		// code...
	}
}

$prodOBJ = new Product();


$prodOBJ = new Product();
$prodOBJ->setName("Farhan");
$prodOBJ->getName().' '.$prodOBJ->productName("Mobile") ;

$prodOBJ->setName("Ali");
$prodOBJ->getName().' '.$prodOBJ->productName("Laptop") ;

$prodOBJ->setName("Ansar");
$prodOBJ->getName().' '.$prodOBJ->productName("Beaty Product") ;

 ?>