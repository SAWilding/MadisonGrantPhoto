<?php 
require_once "../../library/build-functions.php";

$action = trim(filter_input(INPUT_POST, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
if ($action == NULL){
 $action = trim(filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
}
switch ($action){
case "home":
    include  $_SERVER["DOCUMENT_ROOT"] . '/MadisonGrantPhoto/views/home.php';
    break;

case "portfolio":
    $portfolioList = buildPortfolio();
    include  $_SERVER["DOCUMENT_ROOT"] . '/MadisonGrantPhoto/views/portfolio.php';
    break;

case "pricing":
    include  $_SERVER["DOCUMENT_ROOT"] . '/MadisonGrantPhoto/views/pricing.php';
    break;

case "contact":
    include  $_SERVER["DOCUMENT_ROOT"] . '/MadisonGrantPhoto/views/contact.php';
    break;

case "about":
    include  $_SERVER["DOCUMENT_ROOT"] . '/MadisonGrantPhoto/views/about.php';
    break;




default:
include  $_SERVER["DOCUMENT_ROOT"] . '/MadisonGrantPhoto/views/home.php';
}


?>