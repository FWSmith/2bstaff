<?php 
	if(!empty($_SESSION['time']) && !empty($_SESSION['user'])){
		$session_auth = $_SESSION['user'];
		include ('./class/getClass.php');
		include ('./class/userClass.php');
		$getClass = new getClass();
		$profile  = $getClass->profileTable($session_auth);
		//$userTable = $userClass->userTable($session_auth);
		//$userPort = $userClass->userportfolio($session_auth);

	}

	if(empty($session_auth)){
		 error_reporting(E_ALL & ~E_NOTICE);
		?>
		<script type="text/javascript">
			swal("ผิดพลาด","กรุณาเข้าสู่ระบบ","error").then((value) => {
			window.location='index.php?page=login';
			});	
		</script>
		<?php
		/*
		$url='index.php';
		header("Location: $url");
		*/
	}

	if(!empty($_GET['logout']) && $_GET['logout'] == 1){
		require_once ('./class/userClass.php');
		$userClass = new userClass();
		$userClass->userLogout();
	}
?>