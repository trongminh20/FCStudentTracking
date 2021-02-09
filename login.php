<?php
session_start();

if(isset($_POST['submit'])) {
	$targetUser = filter_input(INPUT_POST, 'username');
	$targetPasswd = filter_input(INPUT_POST, 'password');	
	$mysqli = mysqli_connect("localhost", "athomas", "letmein", "studenttracking"); // Change this to match the database were using for the site
	$sql = "SELECT * FROM Employees WHERE Username = '".$targetUser. "' AND Password = '".$targetPasswd. "'";	
	$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

	if (mysqli_num_rows($result) == 1) {
		echo "<p> User: " . $targetUser ."</p>";
		echo "<p> Pass: " . $targetPasswd ."</p>";
		//header("Location: login_form_template.html");  <-- Uncomment this, change it to redirect to the homepage & delete echo statements above
	} else {		
		echo "<p> Failed to connect </p>";
		exit;
	}
}
?>