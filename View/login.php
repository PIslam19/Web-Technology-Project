<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {
        font-weight: bold;
    }

    * {
        margin: 0;
        padding: 0;
    }

    .text {
        color: black;
        margin-top: 10px;
        font-weight: bold;
        text-align: center;
    }

    .content {
        width: 30%;
        margin: 50px auto;
        overflow: hidden;
        border: 3px solid green;
        padding: 0px;
        border-radius: 15px;
        box-shadow: 5px 5px 10px rgb(110, 93, 93);
    }
    /* ul li a {
  text-decoration: none;
} */
    </style>
</head>

<body>
    <div class="menu">
        <?php include 'navBar.php';?>
    </div>
    <h1 style="text-align:center; margin-top:10px ;color:#f73bde" >Login Page</h1>
    <div class="loginSection">
        <div class="content">
            <div class="text">
                <div class="mb-5">
                    <h3 style="color:red;padding: 30px;">Log in as Your section</h3>
                    
                   
                        <a class="btn btn-success  fw-bold text-white text-uppercase mx-2" href="adminLogin.php">Admin</a></li><br><br>
                        <a class="btn btn-success  fw-bold text-white text-uppercase mx-2"  href="teacherRegistration.php">Teacher</a></li><br><br>
                        <a class="btn btn-success  fw-bold text-white text-uppercase mx-2"  href="studentRegistration.php">Student</a></li>
                    
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php include 'footer.php';?>
    </div>
</body>

</html>