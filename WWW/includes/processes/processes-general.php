<?php
function processLogin($post){
	GLOBAL $DB;
	$temp_str = getPass($post['email'],$post['password']);
	$data = array('user_email' => $post['email'] ,  'temp_str' => $temp_str);
	$user = $DB->GetRow('tbl_user', ' user_email = :user_email AND user_password = :temp_str AND user_active = 1 AND user_deleted IS NULL ',$data);
	if($user){
		$_SERVER['user']=$user;
		return '/projects-home';
	}else{
		$_SESSION['error'] = 'Wrong user or password';
		return '/login';
	}
}