<?php 
	class userClass{
		public function userLogout(){
			try {
				if(!empty($_SESSION['user']) && !empty($_SESSION['time'])){
					$_SESSION['user'] == NULL;
					$_SESSION['time'] == NULL;
					unset($_SESSION['user']);
					unset($_SESSION['time']);
				?>
				<script type="text/javascript">
					swal("สำเร็จ!","ออกจากระบบเรียบร้อยแล้ว","success").then((value) => {
				 	 window.location='index.php';
					});				
				</script>
			<?php
				}else{}
			} catch (Exception $e) {
				echo " $e";
			}
		}
	}
?>