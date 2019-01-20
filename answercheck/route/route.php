<!-- route section form index.php-->
<?php
	if(!empty($_SESSION['user'])){
		if(isset($_GET['page'])){
			require_once('./auth/session.php');
			$page = $_GET['page'];
			$view = "./views/".$page.".page.php";
			if(file_exists($view)){
				require_once ($view);
			}else{
				require_once('./views/error404.page.php');
			}
		}else{
			header("Location:index.php?page=main");
		}	
		
	}else{

	}
?>