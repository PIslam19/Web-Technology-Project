<?php
session_start();

setcookie("userName", "Islam", time() + 600000);

if (isset($_SESSION['userName'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin DashBoard</title>
        <link rel="stylesheet" href="fontAwesome/css/all.min.css">
        <link rel="stylesheet" href="fontAwesome/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                max-width: 100%;
                overflow-x: hidden;
            }

            ul {
                margin: 0;
                padding: 0;
            }

            .container {
                width: 80%;
                margin: auto;
            }

            .custom-file-input {
                color: transparent;
            }

            .custom-file-input::-webkit-file-upload-button {
                visibility: hidden;
            }

            .custom-file-input::before {
                content: 'choose Photo';
                color: black;
                display: inline-block;
                background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
                border: 1px solid #999;
                border-radius: 3px;
                padding: 6px 10px;
                outline: none;
                white-space: nowrap;
                -webkit-user-select: none;
                cursor: pointer;
                text-shadow: 1px 1px #fff;
                font-weight: 700;
                font-size: 10pt;
            }

            .custom-file-input:hover::before {
                border-color: black;
            }

            .custom-file-input:active {
                outline: 0;
            }

            .custom-file-input:active::before {
                background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
            }
        </style>
    </head>

    <body>
        <div class="menu">
            <?php include 'navBar.php'; ?>
        </div>

        <div class="row" style="min-height: 50vh">
            <div class="col-md-3 bg-#9dfab6 p-3"style="hight: 500px;">
                <div class="text-center">
                    <?php
                    echo "<div class='fw-bold w-75 btn btn-success my-2'>
                        <i class='fas fa-users mx-1'></i> <span  >Admin: " . $_SESSION['userName'] . "</span>
                    </div>";
                    ?>
                </div>
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="AdminDashBoard.php"></i>Admin Dashboard</a>
                </div>
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="studentListForAdmin.php"></i>Manage Student</a>
                </div>
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="teacherListForAdmin.php"></i>Manage Teacher</a>
                </div>
               
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="courseListForAdmin.php"></i>Manage Course</a>
                </div>
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="scheduleListForAdmin.php"></i>Manage Schedule</a>
                </div>
                <div class="text-center">
                    <a class="btn btn-danger fw-bold my-2 w-75" href="logout.php">Logout<i class="fas fa-sign-out-alt mx-3"></i></a>
                </div>

            </div>
            <div class="col-md-9 mb-5 pb-5">

                <h2 class="fw-bold text-center text-uppercase  mt-5">Admin Dashboard</h2>
                <div class="row px-5">
                    <div class="col-md-6">
                        <div class="mx-2 p-5 mt-5" style="border-radius: 10px; background: #9dfab6">
                            <?php
                            include '../Model/db_conn.php';
                            if (isset($_POST["submit"])) {

                                $currentUser = $_SESSION["userName"];
                                $photo_name = $_FILES["photo"]["name"];
                                $photo_tmp_name = $_FILES["photo"]["tmp_name"];
                                $photo_size = $_FILES["photo"]["size"];
                                $photo_new_name = rand() . $photo_name;
                                if ($photo_size > 5242880) {
                                    echo "<script>alert('Photo is very big. Maximum photo uploading size is 5MB.');</script>";
                                } else {
                                    $sql = "UPDATE admin SET userImage='$photo_new_name' WHERE username='$currentUser'";
                                    $result = mysqli_query($con, $sql);
                                    if ($result) {
                                        echo "<script>alert('Profile Updated successfully.');</script>";
                                        move_uploaded_file($photo_tmp_name, "uploadFiles/" . $photo_new_name);
                                    } else {
                                        echo "<script>alert('Profile can not Updated.');</script>";
                                        echo  $con->error;
                                    }
                                }
                            }
                            ?>
                            <h4 class="mb-5 fw-bold text-danger text-uppercase">PROFILE PHOTO</h4>
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php
                                $currentUser = $_SESSION["userName"];
                                $sql = "SELECT * FROM admin WHERE username='$currentUser'";
                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <img src="uploadFiles/<?php echo $row["userImage"]; ?>" width="120px" height="160px" alt="image">
                                        <div class="row mt-4">

                                            <div class="col-4"><input class="custom-file-input" type="file" accept="image/*" id="photo" name="photo" required>

                                            </div>
                                            <div class="col-8">
                                                <button type="submit" name="submit" class="btn btn-success btn-sm">Update Profile</button>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mx-2  p-5 mt-5" style="border-radius: 10px; background: #9dfab6">
                            <h4 class="mb-5 fw-bold text-danger text-uppercase"> Your Information</h4>
                            <?php

                            include('../Model/db_conn.php');
                            $currentUser = $_SESSION['userName'];

                            $sql = "SELECT * FROM admin WHERE username ='$currentUser'";

                            $gotResult = mysqli_query($con, $sql);

                            if ($gotResult) {
                                if (mysqli_num_rows($gotResult) > 0) {
                                    while ($row = mysqli_fetch_array($gotResult)) {
                            ?>
                                        <div class="h5 fw-bold my-3 form-control">
                                            UserName :
                                            <?php echo $row['username']; ?>
                                        </div>
                                        <div class="h5 fw-bold  my-3 form-control">
                                            Email :
                                            <?php echo $row['email']; ?>
                                        </div>
                                        <div class="h5 fw-bold  form-control my-3">
                                            Password :
                                            <input style="border: none; background: white;" disabled type="password" name="password" class="" value="<?php echo $row['password']; ?>">
                                        </div>
                                        <div>
                                            <a href="adminProfileChange.php" class="btn btn-success mt-3 btn-sm">Change Password</a>
                                        </div>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="menu">
            <?php include 'footer.php'; ?>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location:adminLogin.php");
    exit();
}
?>