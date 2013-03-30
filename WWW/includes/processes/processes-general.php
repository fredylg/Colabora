<?php
function processLogin($post){
	GLOBAL $DB;
	$temp_str = getPass($post['password']);
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

function processForgotPassword($post){
	GLOBAL $DB;
	$user = $DB->GetRow('tbl_user', ' user_email = :user_email AND user_active = 1 AND user_deleted IS NULL ',array('user_email' => $post['email']));
	if(!empty($user)){
		$temp_key = getPass(time().$post['password']);
		//delete old keys
		$data = array('user_id' => $user['id']);
		$sql ="UPDATE tbl_forgot_password SET forgot_deleted = NOW() WHERE forgot_user_id = :user_id ";
		$res = $DB->wrappedSQLINSERT($sql, $data);
		//insert new key
		$data = array('user_id' => $user['id'] , 'rdm' => $temp_key);
		$sql ="INSERT INTO tbl_forgot_password ( forgot_user_id , forgot_user_rdm ) VALUES ( :user_id , :rdm  )";
		$res = $DB->wrappedSQLINSERT($sql, $data);
		//TODO SEND EMAIL
		$_SESSION['notice'] = 'An email has been sent to <strong>'.$post['email'].'</strong> with instructions on how to reset your password.';
	}else{
		$_SESSION['notice'] = 'Wrong email address or inactive user';
	}
	return '/forgot-password';
	
}
function processCreateTeam($team_name){
	GLOBAL $DB;
	//Check team name is not in use
	$team_existing = $DB->GetRow('tbl_team', ' team_name = :team_name AND team_deleted IS NULL ',array('team_name' => $team_name));
	if(!empty($team_existing)){
		$_SESSION['error'] = 'Already exisiting team, Team name needs to be unique.';
		return false;
	}else{
		$data = array('team_name' => $team_name );
		$sql ="INSERT INTO tbl_team ( team_name ) VALUES ( :team_name  )";
		$team_id = $DB->wrappedSQLINSERT($sql, $data);
	}
	return $team_id;	
}
function processCreateUser($post){
	GLOBAL $DB;
	//check email is unique
	$user_test = $DB->GetRow('tbl_user', ' user_email = :user_email AND user_active = 1 AND user_deleted IS NULL ',array('user_email' => $post['email']));
	if(empty($user_test)){
		$data = array( 'user_name' => $post['name'] , 'user_surname' => $post['surname'] , 'user_email' => $post['email'] , 'user_password' => $post['password']  );
		$sql ="INSERT INTO tbl_user ( user_name , user_surname , user_email , user_password ,  user_active) VALUES (  :user_name , :user_surname , :user_email , :user_password  , 1  )";
		$user_id = $DB->wrappedSQLINSERT($sql, $data);
		return  $user_id ;
	}else{
		$_SESSION['error'] = 'Email address already in use.';
		return false;
	}
}
function processLinkUserTeam($user_id,$team_id){
	// check link does not exist
	GLOBAL $DB;
	$data = array('user_id' => $user_id,'team_id'=> $team_id);
	$link_test = $DB->GetRow('tbl_team_user', ' user_id = :user_id AND team_id = :team_id AND team_user_deleted IS NULL ',$data);
	if(empty($link_test)){
		$sql = 'INSERT INTO tbl_team_user (user_id,team_id) VALUES (:user_id,:team_id)';
		$link_id= $DB->wrappedSQLINSERT($sql, $data);
		return  $link_id ;
	}else{
	
	}
	return false;
	
}







