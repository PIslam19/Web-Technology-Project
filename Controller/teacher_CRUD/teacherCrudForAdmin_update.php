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

        $sql = "SELECT * FROM teacher WHERE id=$id";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        } else {
                header("Location: teacherCrudForAdmin_read.php"); // read
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

        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $id = validate($_POST['id']);

        if (empty($name)) {
                header("Location: ../../View/teacherUpdateForAdmin.php?id=$id&error=Error occupied!");
        } else if (empty($email)) {
                header("Location: ../../View/teacherUpdateForAdmin.php?id=$id&error=Error occupied!");
        } else if (empty($password)) {
                header("Location: ../../View/teacherUpdateForAdmin.php?id=$id&error=Error occupied!");
        } else {
                $sql = "UPDATE teacher
               SET username='$name', email='$email', password='$password'
               WHERE id=$id ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                        header("Location: ../../View/teacherListForAdmin.php?success=successfully updated");
                } else {
                        header("Location: ../../View/teacherUpdateForAdmin.php?id=$id&error=Unknown Error!&$user_data");
                }
        }
} else {
        header("Location: teacherCrudForAdmin_read.php");
}
