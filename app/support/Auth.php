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
			echo $email_uname . $pass;
		}
		


	}








?>