<?php
	class loginClass{
		public function login($user,$pass){
			try {
				$db = getDB();
				$pass = md5($pass);
				$stmt = $db->prepare("SELECT * FROM member WHERE username='$user' AND password = '$pass'");
				$stmt->execute();
				$count = $stmt->rowCount();
				$data = $stmt->fetch(PDO::FETCH_OBJ);
				if($count){
					$_SESSION['user'] = $data->ID;
					$_SESSION['time'] = md5(date('H:i:s'));
					return 1;
				}else{
					return 0;
				}
			} catch (Exception $e) {
				echo "error = ".$e;
			}
		}
	}

?>