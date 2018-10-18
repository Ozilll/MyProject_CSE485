<?php

/***********************Helper functions****************/
	
	function clean($string){
		return htmlentities($string);
	}

	function redirect($location){
		return header("Location: {$location}");
	}

	function set_message($message){
		if (!empty($message)) {
			$_SESSION['message'] = $message;
		}else{
			$message = "";
		}
	}

	function display_message(){
		if (isset($_SESSION['message'])) {
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		}
	}

	function token_generator(){
		$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
		return $token;
	}

	function validation_errors($error_message){
		$error_message = <<<DELIMITER
			<div class="alert alert-danger alert-dismissible" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 				 <strong>Warning!</strong> '.$error_message.'
			</div>
DELIMITER;
			return $error_message;
	}

	function email_exists($email){
		$sql = "SELECT id FROM users WHERE email = '$email'";
		$result = query($sql);

		if (row_count($result) == 1) {
			return true;
		}else{
			return false;
		}
	}

	function username_exists($username){
		$sql = "SELECT id FROM users WHERE username = '$username'";
		$result = query($sql);

		if (row_count($result) == 1) {
			return true;
		}else{
			return false;
		}
	}

/******************Validation functions*****************/

function validate_user_registration(){

	$errors = [];
	$min = 3;
	$max = 20;
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = clean($_POST['username']);
		$email = clean($_POST['email']);
		$password = clean($_POST['password']);
		$confirm_password = clean($_POST['confirm_password']);

	}

	if (strlen($username) < $min) {
		$errors[] =  "Your first name cannot be less than {$min} characters";
	}

	if (strlen($username) > $max) {
		$errors[] = "Your first name cannot be more than {$max} characters";
	}

	if (email_exists($email)) {
		$errors[] = "Email đã tồn tại!";
	}

	if (username_exists($username)) {
		$errors[] = "Tên tài khoản này đã được sử dụng";
	}

	if (!empty($errors)) {
		foreach ($errors as $error) {
			
			echo validation_errors($error);
		}
	}else{
		if (register_user($first_name, $last_name, $username, $email, $password)) {
			echo "Tài khoản đã được đăng ký";
		}
	}

	function register_user($first_name, $last_name, $username, $email, $password){

		$first_name = escape($first_name);
		$last_name = escape($last_name);
		$username = escape($username);
		$email = escape($email);
		$password = escape($password);

		if (email_exists($email)) {
			return false;

		}elseif ($username_exists($username)) {

			$password = md5($password);
			$validation = md5($username + microtime());
			$sql = "INSERT INTO users(first_name, last_name, username, email, password, confirm_code, 0)";
			$sql.= "VALUES('$first_name', '$last_name', '$username', '$email', '$password', 'confirm_code', 0)";
			$result = query($sql);
			confirm($result);

			return true;
		}
	}

}






 ?>