<?php 


$action = trim(filter_input(INPUT_POST, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
if ($action == NULL){
 $action = trim(filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
}
switch ($action){
case 'template':
include 'view/template.php';
break;

default:
include  $_SERVER["DOCUMENT_ROOT"] . '/MadisonGrantPhoto/views/home.php';
}
?>