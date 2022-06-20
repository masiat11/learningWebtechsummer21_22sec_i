
<?php 
	//session_start();
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
</head>
<body>
		<h1>Welcome!</h1>
		<a href="Profile.php"> logout </a>
		<a href="ChangePass.php"> logout </a>
		<a href="ViewUser.php"> logout </a>
 		<a href="distroy.php"> logout </a>
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>
