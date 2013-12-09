<?
	const ADMIN = 2;	
	class Auth
	{
		public static function IsLoggedIn()
		{
			return self::GetUser() != null;
			
		}
		public static function GetUser()
		{
			return $_SESSION['User'];
			
		}
		public static function HasPermission()
		{
			$user=self::GetUser();
			return $user['UserType']== ADMIN;
		
		}
		public static function LogIn($userName, $assword)
		{
			$sql = "        SELECT U.*
                            FROM User U
                            WHERE U.LastName='$userName'
                                        ";
                        $user = fetch_one($sql); 
						if($user['Password']== $password){
							$_SESSION['User'] = $user;
						}         
		}
		public static function Secure()
		{
			id(!self::IsLoggedIn()){
				header('Location: ' . dir(__FILE__ ) . "/~n02704859/2013/Final/Views/Auth/?action=submitlogin"); die(); 
			}
		}
	
	
	}
	
