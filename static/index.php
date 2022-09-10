<?php 

// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con
// le seguenti caratteristiche:
// L'e-commerce vende prodotti per gli animali.
// prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di
// sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.
// BONUS :
// Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo
// particolare (es. da maggio ad agosto).

require_once __DIR__ . '/../classes/CreditCard.php';
require_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/Kart.php';
require_once __DIR__ . '/../classes/CreditCard.php';
require_once __DIR__ . '/../classes/User.php';

$creditCard1 = new CreditCard(1, "Intesa", '12/2026', '661', 300);

$user1 = new User(1, "Paolo", $creditCard1);
$user2 = new User(2, 'Luca', $creditCard1);

$products=[];
$products[] = new Product(1 , "croccantini" , "Dei buonissimi croccantini" , 3.99);
$products[] = new Product(2 , "Cuccia" , "Una bellissima cuccia" , 4.99);

$kart1= new Kart(1, $products, $user1);

var_dump($creditCard1);
var_dump($user1);
var_dump($products);
var_dump($kart1);



?>