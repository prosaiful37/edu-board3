<?php  

	namespace Edu\Board\Support;
	
	use Edu\Board\Support\Database;
	use PDO;

	/**
	 * Auth Managements
	 */
	class Auth extends Database
	{
		
		/**
		 * Log in management systme
		 */
		
		public function userLoginSystem($email_uname, $pass)
		{

			  
			 $data = $this -> emailUsernameCheck($email_uname);
			
			

			 $num = $data['num']; 
			 $login_user_data = $data['data'] ->  fetch( PDO::FETCH_ASSOC);


			if ($num == 1 ) {

				if ( password_verify( $pass , $login_user_data['pass'] ) ) {
					
					header('location:dashboard.php');

				}else{
					return '<p class="alert alert-danger">Wrong password!<button class="close" data-dismiss="alert">&times;</button></p>';
				}

			}else{
				return '<p class="alert alert-danger">Email or username all ready incorrect !<button class="close" data-dismiss="alert">&times;</button></p>';
			}


		}


		/**
		 * username
		 */
		public function emailUsernameCheck($email_uname)
		{
			return $this ->dataCheck('users', $email_uname);

			

			
		}
		


	}








?>