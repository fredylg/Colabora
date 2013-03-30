<?php 
require 'includes/config/config.php';

if(!empty($_SESSION['error']))$SM->assign('error',$_SESSION['error']);
if(!empty($_SESSION['notice']))$SM->assign('notice',$_SESSION['notice']);
$_SESSION['error'] = "";
unset($_SESSION['error']);
$_SESSION['notice'] = "";
unset($_SESSION['notice']);
$token = insertToken();
$SM->assign("token",$token);


$C = new Controller($_GET['url'], $CONFIG->controllers);
//die($C->template());
$SM->display("extends:pages/page.tpl|".$C->template());


