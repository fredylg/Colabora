<?php 
require 'includes/config/config.php';

$_POST = clean($_POST);
$_GET = clean($_GET);
$_REQUEST = clean($_REQUEST);
$C = new Controller($_GET['url'], $config->controllers);


$SM->display("extends:page.tpl|".$C->template."|footer.tpl");
