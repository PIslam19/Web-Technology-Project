<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../View/css/style.css">
</head>

<body>
    <?php
    session_start();
    include "../Model/db_conn.php";

    $userNameErr = $emailErr  = $passErr = $confirmPassErr = "";
    $userName = $email   = $pass = $confirmPass = "";

    if (empty($_POST["userName"])) {
        $userNameErr = "UserName is required";
    } else {
        $userName = test_input($_POST["userName"]);
        if (!preg_match("/^[a-zA-Z-.' ]*$/", $userName)) {
            $userNameErr = "Only letters white space, period & dash allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["pass"])) {
        $passErr = "PassWord is required";
    } else {
        $pass = test_input($_POST["pass"]);
        if (strlen($pass) < 4) {
            $passErr = "Password must be 4 character";
        } else if (!preg_match("/[@,#,$,%]/", $pass)) {
            $passErr = "Password must contain special character";
        }
    }

    if (empty($_POST["confirmPass"])) {
        $confirmPassErr = "Confirm PassWord is required";
    } else {
        $confirmPass = test_input($_POST["confirmPass"]);
        if ($pass != $confirmPass) {
            $confirmPassErr = "Password dose not match";
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (empty($userNameErr) && empty($passErr) && empty($emailErr) && empty($confirmPassErr)) {

        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $s = "select * from student where username = '$userName'";

        $result =  mysqli_query($con, $s);
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            echo "<script>
                    alert('User already exist!');
                    window.location.href = '../View/studentRegistration.php';
                </script>";
        } else {
            $reg =  "insert into student (username, email, password ) values ('$userName', '$email', '$pass')";
            mysqli_query($con, $reg);
            echo "<script>
                    alert('Registration Successful!');
                    window.location.href = '../View/studentLogin.php';
                </script>";
        }
    } else {
        include('../View/studentRegistration.php');
    }
    ?>
</body>

</html>