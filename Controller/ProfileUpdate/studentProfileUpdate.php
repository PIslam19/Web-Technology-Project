<?php 
session_start();

if (isset($_SESSION['userName'])) {

    include "../../Model/db_conn.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: ../../View/studentProfileChange.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location:  ../../View/studentProfileChange.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location:  ../../View/studentProfileChange.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
        $name = $_SESSION['userName'];

        $sql = "SELECT password
                FROM student WHERE 
                username='$name' AND password='$op'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE student
        	          SET password='$np'
        	          WHERE username='$name'";
        	mysqli_query($con, $sql_2);
        	header("Location: ../../View/studentProfileChange.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: ../../View/studentProfileChange.php?error=Incorrect old password");
	        exit();
        }

    }

    
}else{
	header("Location: ../../View/studentProfileChange.php");
	exit();
}

}else{
     header("Location: StudentDashBoard.php");
     exit();
}