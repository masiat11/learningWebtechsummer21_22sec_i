<?php 
	session_start();

	/*$_GET
	$_POST
	$_REQUEST
	$_SERVER 
	$GLOBALS*/ 

/*	print_r($_REQUEST['id']);
	echo "<br>";
	print_r($_REQUEST['password']);*/

	$id = $_REQUEST['id'];
	$password = $_REQUEST['password'];
    $confirm_Password = $_REQUEST['confirm_Password'];
    $name= $_REQUEST['name'];
	if ($id == null || $password == null||$confirm_Password==null||name==null) {
		echo "invalid username/password/id <br>";
	}else{

		$data=$id."|".$password."|".$confirm_Password."|".$name."|".$usertype."\r\n;
		$file=fopen('user.txt','a')
		fwrite($file, $data);

			if($fname == "create"){
				header('location: home.php');	
			}else{
				header('location: login.html');
			}
	}



?>


?> 
