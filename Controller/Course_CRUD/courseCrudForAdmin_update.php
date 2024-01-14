<?php

if (isset($_GET['id'])) {
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "project";

        $con = mysqli_connect($serverName, $userName, $password);
        mysqli_select_db($con, $dbName);
        if (!$con) {
                echo ("connection field!");
        }

        function validate($data)
        {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        $id = validate($_GET['id']);

        $sql = "SELECT * FROM course WHERE id=$id";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        } else {
                header("Location: courseCrudForAdmin_read.php"); // read
        }
} else if (isset($_POST['update'])) {
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
        $id = validate($_POST['id']);

        if (empty($courseName)) {
                header("Location: ../../View/courseUpdateForAdmin.php?id=$id&error=Error occupied!");
        } else if (empty($email)) {
                header("Location: ../../View/courseUpdateForAdmin.php?id=$id&error=Error occupied!");
        } else if (empty($teacherName)) {
                header("Location: ../../View/courseUpdateForAdmin.php?id=$id&error=Error occupied!");
        } else {
                $sql = "UPDATE course
               SET teacherName='$teacherName', email='$email', courseName='$courseName'
               WHERE id=$id ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                        header("Location: ../../View/courseListForAdmin.php?success=successfully updated");
                } else {
                        header("Location: ../../View/courseUpdateForAdmin.php?id=$id&error=Unknown Error!&$user_data");
                }
        }
} else {
        header("Location: courseCrudForAdmin_read.php");
}
