<?php 

require_once __DIR__ . '/../classes/CreditCard.php';
require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/Kart.php';
require_once __DIR__ . '/../classes/CreditCard.php';
require_once __DIR__ . '/../classes/User.php';

$user1 = new User(1, "Paolo");
$user2 = new User(2, 'Luca');

$product1 = new Product(1, "croccantini", "Dei buonissimi croccantini");
$product2 = new Product(2, "Cuccia", "Una bellissima cuccia");


// echo $product1->getId(). " " . $product1->getName() . " ". $product1->getDescription() . ".";
// echo $user2->getId(). " " . $user2->getName() . ".";



?>