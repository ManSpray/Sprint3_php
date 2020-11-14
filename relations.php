<?php 
include_once "bootstrap.php";

use \Doctrine\Common\Util\Debug;

// Helper functions
function redirect_to_root(){
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

// 1:M bidirectional
print("<pre>");

$page = $entityManager->find('Models\Page', 1);
Debug::dump($page);
// Debug::dump($customer->getCart());
// Debug::dump($customer->getCart()->getCustomer());

// $features = $entityManager->find('Models\Feature', 2);
// Debug::dump($features);


print("</pre>");