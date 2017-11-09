<?php

include 'views/header.php';

if(isset($_GET['action'])){

switch ($_GET['action']) {
  case 'contact': $vue = 'views/contact.php'; break;
  case 'DidiMotte': $vue = 'views/didier-motte.php'; break;
  case 'inStock': $vue = 'views/inStock.php'; break;
  case 'front': $vue = 'views/index.html'; break;
  default : $vue = 'views/404.php'; break;
}include $vue;
}else {
  include 'views/404.php';
}



include 'views/footer.php';

?>
