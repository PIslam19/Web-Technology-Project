<?php

if (isset($_POST['create'])) {
	include "../../Model/db_conn.php";
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	} 

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	$user_data = 'name=' . $name . '&email=' . $email . '&password=' . $password;

	if (empty($name)) {
		header("Location: ../../View/teacherListCreateForAdmin.php?error=Error occupied!&$user_data");
	} else if (empty($email)) {
		header("Location: ../../View/teacherListCreateForAdmin.php?error=Error occupied!&$user_data");
	}else if (empty($password)) {
		header("Location: ../../View/teacherListCreateForAdmin.php?error=Error occupied!&$user_data");
	}
	 else {

		$sql = "INSERT INTO teacher (username, email, password) 
               VALUES('$name', '$email', '$password')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("Location: ../../View/teacherListForAdmin.php?success=successfully created");
		} else {
			header("Location: ../../View/teacherListCreateForAdmin.php?error=unknown error occurred&$user_data");
		}
	}
}
