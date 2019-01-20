<?php 
	class getClass{
		
		public function memberTable($session_auth){
			try {
				$db = getDB();
				$stmt = $db->prepare("SELECT * FROM member WHERE ID='$session_auth'");
				$stmt->execute();
				$data = $stmt->fetch(PDO::FETCH_OBJ);
				return $data;
			} catch (Exception $e) {
				echo "error $e";
			}
		}

		public function schoolTable($session_auth){
			try {
				$db = getDB();
				$stmt = $db->prepare("SELECT * FROM school_information WHERE member_id='$session_auth'");
				$stmt->execute();
				$data = $stmt->fetch(PDO::FETCH_OBJ);
				return $data;
			} catch (Exception $e) {
				echo "error $e";
			}
		}

		public function profileTable($session_auth){
			try {
				$db = getDB();
				$stmt = $db->prepare("SELECT * FROM personal_information WHERE member_id='$session_auth'");
				$stmt->execute();
				$data = $stmt->fetch(PDO::FETCH_OBJ);
				return $data;
			} catch (Exception $e) {
				echo "error $e";
			}
		} 

		public function check($data){
			try {
				if($data != null || $data != ""){
					return 1;
				}else{
					return 0;
				}
			} catch (Exception $e) {
				echo "error $e";
			}
		}
	}
?>