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

	$courseName = validate($_POST['courseName']);
	$email = validate($_POST['email']);
	$teacherName = validate($_POST['teacherName']);

	$user_data = 'courseName=' . $courseName . '&email=' . $email . '&teacherName=' . $teacherName;

	if (empty($teacherName)) {
		header("Location: ../../View/courseListCreateForAdmin.php?error=Error occupied!&$user_data");
	} else if (empty($email)) {
		header("Location: ../../View/courseListCreateForAdmin.php?error=Error occupied!&$user_data");
	}else if (empty($courseName)) {
		header("Location: ../../View/courseListCreateForAdmin.php?error=Error occupied!&$user_data");
	}
	 else {

		$sql = "INSERT INTO course (teacherName, email, courseName) 
               VALUES('$teacherName', '$email', '$courseName')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("Location: ../../View/courseListForAdmin.php?success=successfully created");
		} else {
			header("Location: ../../View/courseListCreateForAdmin.php?error=unknown error occurred&$user_data");
		}
	}
}
