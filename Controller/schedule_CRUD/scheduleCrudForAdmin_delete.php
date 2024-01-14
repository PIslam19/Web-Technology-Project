<?php  

if(isset($_GET['id'])){
   include "../../Model/db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM schedule
	        WHERE id=$id";
   $result = mysqli_query($con, $sql);
   if ($result) {
   	  header("Location: ../../View/scheduleListForAdmin.php?success=successfully deleted");
   }else {
      header("Location: ../../View/scheduleListForAdmin.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../../View/scheduleListForAdmin.php");
}