<?php
include 'settings.php';
include 'db.php';
$Uid=$_GET['id'];
$db=new db($dbhost,$dbuser,$dbpass,$dbname);
if( isset($_POST['submit']) ){ // from form
	$email = $_POST['email'];
	$password = $_POST['password'];
	// 2. create query
	$sql = "UPDATE user
			SET email = ?,
			password = ?
            WHERE id = ?";
    $result = $db -> query( $sql, $email, $password, $uid );
}
else{
	// 2. create query
	$sql =	"SELECT * FROM user
		WHERE id = ?";
	// 3. execute query
	$result = $db -> query( $sql, $uid ); // mysqli_query
	$user = $result -> fetchArray();
	$email = $user['email'];
	$password = $user['password'];
	
	// show form view
	include 'editprof-view.php';
}
?>