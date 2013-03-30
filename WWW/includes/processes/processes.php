<?php
require '../../includes/config/config.php';
if(checkToken($_POST['formToken']) === true	&& !empty($_POST['formToken'])){
	$redirect = '/';
	switch ($_POST['Action']) {
		case 'Login':
		$redirect =	processLogin($_POST);
		break;
		case 'forgot-password':
		$redirect =	processForgotPassword($_POST);	
		break;	
		case 'create-account':
		$redirect='/create-account';
		if(!empty($_POST['team'])){
			$team_id = processCreateTeam($_POST['team']);	
			if($team_id ==  false){
				break;
			}
		}else{
			$team_id = 0 ;
		}
		$user = processCreateUser($_POST);
		if($user != false){
			if($team_id != 0 ){
				$res = processLinkUserTeam($user,$team_id);
			}
			$redirect = '/projects/home';	
		} 
		
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
