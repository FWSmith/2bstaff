<?php 
	if(!empty($_POST['login'])){
            if(!empty($_POST['username']) && !empty($_POST['password'])){
                $loginClass = new loginClass();
                $login = $loginClass->login($_POST['username'],$_POST['password']);
                if($login){
                    echo "<script>window.location='index.php?page=main';</script>";
                }else{
                    echo "<script>swal('ไม่สำเร็จ','ชื่อผู้ใช้หรือรหัสผ่านผิด','error');</script>";
                }
            }else{
                echo "<script>swal('ผิดพลาด','โปรดกรอกข้อมูลให้ครบ','warning');</script>";
            }
        }

?>