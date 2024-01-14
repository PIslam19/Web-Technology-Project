<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../View/css/style.css">
</head>
<body>
<?php 

session_start();
include "../Model/db_conn.php";

$userNameErr = $passErr = "";
$userName = $pass ="";

if (empty($_POST["userName"])) {
    $userNameErr = "UserName is required";
}
else {
   $userName = test_input($_POST["userName"]);
   if (!preg_match("/^[a-zA-Z-.' ]*$/",$userName)) {
    $userNameErr = "Only letters white space, period & dash allowed";
  }    
}

   if (empty($_POST["pass"])) {
                $passErr = "PassWord is required";
             }
            else {
               $pass = test_input($_POST["pass"]);
                if (strlen($pass)<4) {
                $passErr = "Password must be 5 character";
               }
               else if (!preg_match("/[@,#,$,%]/",$pass)) {
                 $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
            }
     } 
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
if(empty($userNameErr) && empty($passErr) ){
    

    $name = $_POST['userName'];
    $pass = $_POST['pass'];

    $s = "select * from admin where username = '$name' && password = '$pass'";

    $result =  mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['userName'] = $name;
        echo "<script>
                alert('Login Successful!');
                window.location.href = '../View/AdminDashBoard.php';
              </script>";
    }
    else{
        echo "<script>
        alert('Invalid UserName Or Password!');
        window.location.href = '../View/adminLogin.php';
      </script>";
    }
}else{
    include('../View/adminLogin.php');   
}
?>
</body>
</html>