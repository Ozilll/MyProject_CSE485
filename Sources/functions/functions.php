<?php
/*******************HELPER FUNCTIONS*********************/
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
		$error_message = '    
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Cảnh báo:</strong> '.$error_message.'
</div>
		';
			
return $error_message;
	}


	function email_exists($email){
		$sql = "SELECT id_student from students WHERE email = '$email'";

		$result = query($sql);

		if (row_count($result) == 1) {
			return true;
		}else{
			return false;
		}
	}

	function username_exists($username){
		$sql = "SELECT id_student from students WHERE username_student = '$username'";

		$result = query($sql);

		if (row_count($result) == 1) {
			return true;
		}else{
			return false;
		}
	}

	function send_email($email, $subject, $msg, $headers){

		return mail($email, $subject, $msg, $headers);
	}


/*******************VALIDATION FUNCTIONS*********************/

function validate_user_registration(){
	$errors = [];
	$min_words = 3;
	$max_words = 20;

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username	 		= clean($_POST['username_student']);
		$first_name 		= clean($_POST['first_name_student']);
		$last_name 			= clean($_POST['last_name_student']);
		$email		 		= clean($_POST['email_student']);
		$password	 		= clean($_POST['password_student']);
		$confirm_password 	= clean($_POST['confirm_password']);

		if (strlen($username) < $min_words) {
			$errors[] = "Tên tài khoản phải gồm 3 từ trở lên!";
		}

		if (strlen($username) > $max_words) {
			$errors[] = "Tên tài khoản không quá 25 từ!";
		}

		if (email_exists($email)) {
			$errors[] = "Email đã tồn tại!";
		}

		if (username_exists($username)) {
			$errors[] = "Tên tài khoản đã tồn tại!";
		}

		if ($password !== $confirm_password) {
			$errors[] = "Xác thực mật khẩu sai!";
		}


		if (!empty($errors)) {
		 	foreach ($errors as $error) {

			//Errors display
		 	echo validation_errors($error);

		 	}
		 }else{

		 	if (register_user($first_name, $last_name, $username, $email, $password)) {

		 		set_message("<div class='alert alert-success' role='alert'>Đăng ký thành công! Vui lòng kiểm tra email của bạn trước khi đăng nhập</div>");

		 		redirect("login.php");

		 	} else{

		 		set_message("<div class='alert alert-warning' role='alert'>Đăng ký tài khoản không thành công</div>");

		 		redirect("index.php");
		 	}
		 } 

	}//post request
}

function register_user($first_name, $last_name, $username, $email, $password){

	$first_name 	= escape($first_name);
	$last_name 		= escape($last_name);
	$username 		= escape($username);
	$email 			= escape($email);
	$password 		= escape($password);


	if (email_exists($email)) {

		return false;

	}elseif (username_exists($username)) {

		return false;

	}else{

		$password = md5($password);

		$validation_code = md5(microtime());

		$sql = "INSERT INTO students(first_name_student, last_name_student, username_student, email, password_student, validation_code, active)";

		$sql.= " VALUES('$first_name', '$last_name', '$username', '$email', '$password', '$validation_code', 0)";

		$result = query($sql);
		confirm($result);

		$subject = "Active Account";
		$msg = "Please click the link below to activate your account
		
		http://doan.dev.localhost.com/Sources/active-account.php?email=$email&code=$validation_code

		";

		$headers = "From: doan@wru.vn";

		send_email($email, $subject, $msg, $headers);

		return true;
	}
}

/*******************ACTIVATE USER FUNCTIONS*********************/
function activate_user(){

	if ($_SERVER['REQUEST_METHOD'] == "GET") {
		
		if (isset($_GET['email'])) {

			$email = clean($_GET['email']);

			$validation_code = clean($_GET['code']);

			$sql = "SELECT id_student FROM students WHERE email = '".escape($_GET['email'])."' AND validation_code = '".escape($_GET['code'])."'";

			$result = query($sql);
			confirm($result);

			if (row_count($result) == 1) {

				$sql2 = "UPDATE students SET active = 1, validation_code = 0 WHERE email = '".escape($email)."' AND validation_code = '".escape($validation_code)."'";
				$result2 = query($sql2);
				confirm($result2);

				set_message("<div class='alert alert-success' role='alert'>Kích hoạt tài khoản thành công! Vui lòng đăng nhập</div>");

				redirect("login.php");

			}else{

				set_message("<div class='alert alert-warning' role='alert'>Tài khoản của bạn đã được kích hoạt!</div>");

			}

			
		}
	}

} //function





/*******************VALIDATE USER LOGIN FUNCTIONS*********************/

function validate_user_login(){
	$errors = [];

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		$email		 		= clean($_POST['email_student']);
		$password	 		= clean($_POST['password_student']);
		$remember 			= isset($_POST['remember']);

		if (empty($email)) {
			$errors[] = "Vui lòng nhập địa chỉ email!";
		}

		if (empty($password)) {
			$errors[] = "Vui lòng nhập mật khẩu!";
		}

		if (!empty($errors)) {
		 	foreach ($errors as $error) {

			//Errors display
		 	echo validation_errors($error);

		 	}
		}else{

			if (login_user($email, $password, $remember)) {

				redirect("page-students-index.php");
			} else{

				echo validation_errors("Email hoặc mật khẩu của bạn không đúng!");

			}

		}
	}
} //function





/*******************USER LOGIN FUNCTIONS*********************/
function login_user($email, $password, $remember){

	$sql = "SELECT password_student, id_student FROM students WHERE email ='".escape($email)."' AND active = 1";

	$result = query($sql);

	if (row_count($result) == 1) {
		
		$row = fetch_array($result);

		$db_password = $row['password_student'];

		if (md5($password) === $db_password) {

			if ($remember == "on") {
				setcookie('email_student', $email, time() + 86400);
			}
			
			$_SESSION['email_student'] = $email;


			return true;

		}else{

			return false;

		}

		return true;


	} else{

		return false;

	}



} //function

/*******************LOGGED IN FUNCTIONS*********************/

function logged_in(){

	if (isset($_SESSION['email_student']) || isset($_COOKIE['email_student'])) {

		return true;

	}else{

		return false;

	}

}





















?>