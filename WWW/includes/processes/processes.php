<?php
require '../../includes/config/config.php';
if(checkToken($_POST['formToken']) === true	&& !empty($_POST['formToken'])){
	$redirect = '/';
	switch ($_POST['Action']) {
		case 'Login':
		$redirect =	processLogin($_POST);
		break;
		
		
	}
	
	header('Location:'.$redirect);
	
}else{
	$_SESSION['error'] = 'There was an error with you request, please try again';
	if(!empty($_SERVER['HTTP_REFERER'])){
		header('Location:'.$_SERVER['HTTP_REFERER']);
		die();
	}else{
		echo'<script type="text/javascript">window.history.go(-2);</script>';
		die();
	}
}
