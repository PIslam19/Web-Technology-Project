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
	$time = validate($_POST['time']);
	$teacherName = validate($_POST['teacherName']);

	$user_data = 'courseName=' . $courseName . '&time=' . $time . '&teacherName=' . $teacherName;

	if (empty($teacherName)) {
		header("Location: ../../View/scheduleListCreateForAdmin.php?error=Error occupied!&$user_data");
	} else if (empty($time)) {
		header("Location: ../../View/scheduleListCreateForAdmin.php?error=Error occupied!&$user_data");
	}else if (empty($courseName)) {
		header("Location: ../../View/scheduleListCreateForAdmin.php?error=Error occupied!&$user_data");
	}
	 else {

		$sql = "INSERT INTO schedule (teacherName, time, courseName) 
               VALUES('$teacherName', '$time', '$courseName')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("Location: ../../View/scheduleListForAdmin.php?success=successfully created");
		} else {
			header("Location: ../../View/scheduleListCreateForAdmin.php?error=unknown error occurred&$user_data");
		}
	}
}
