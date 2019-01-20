<?php
	class memberClass{
		public function listMember(){
			try {
				$db = getDBDATA();
				$stmt = $db->prepare("SELECT * FROM member WHERE test != '1'");
				$stmt->execute();
				$data = $stmt->fetchAll();
				return $data;
			} catch (Exception $e) {
				echo "error".$e;
			}
		}
		public function listMemberCount(){
			try {
				$db = getDBDATA();
				$stmt = $db->prepare("SELECT * FROM member WHERE test != '1'");
				$stmt->execute();
				$data = $stmt->rowCount();
				return $data;
			} catch (Exception $e) {
				echo "error".$e;
			}
		}

		public function dataMember($id){
			try {
				$db = getDBDATA();
				$stmt = $db->prepare("SELECT * FROM personal_information WHERE member_id = '$id'");
				$stmt->execute();
				$data = $stmt->fetch(PDO::FETCH_OBJ);
				return $data;
			} catch (Exception $e) {
				echo "error".$e;
			}
		}
	}
?>