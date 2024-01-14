<?php
session_start();

if (isset($_SESSION['userName'])) {

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Create Course (Admin)</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="fontAwesome/css/all.min.css">
        <link rel="stylesheet" href="fontAwesome/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <style>
            body {
                max-width: 100%;
                overflow-x: hidden;
            }

            .from {
                border-radius: 10px;
                box-shadow: 5px 5px 5px gray;
            }
        </style>
    </head>

    <body>
        <div class="menu">
            <?php include 'navBar.php'; ?>
        </div>
        <div class="row" style="height: 60vh">
            <div class="col-md-3 bg-#9dfab6 p-3">
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
            <div class="col-md-9 p-5">
                <div class="container">
                    <div class="w-75 mx-auto">
                        <h2 class="text-center fw-bold text-danger text-uppercase pb-3">Add Course</h2>
                        <form class="" action="../Controller/course_CRUD/courseCrudForAdmin_create.php" method="post">

                            <?php if (isset($_GET['error'])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_GET['error']; ?>
                                </div>
                            <?php } ?>

                            <div class="form-group my-2">
                                <label for="courseName" class="my-2 fw-bold">Course Name</label>
                                <input type="text" class="form-control" id="courseName" name="courseName" value="<?php if (isset($_GET['courseName'])) echo ($_GET['courseName']); ?>" placeholder="Enter course name">
                            </div>

                            <div class="form-group my-2">
                                <label for="teacherName" class="my-2 fw-bold">Teacher Name</label>
                                <input type="text" class="form-control" id="teacherName" name="teacherName" value="<?php if (isset($_GET['teacherName'])) echo ($_GET['teacherName']); ?>" placeholder="Enter Teacher name">
                            </div>

                            <div class="form-group my-2">
                                <label for="email" class="my-2 fw-bold">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_GET['email']))
                                 echo ($_GET['email']); ?>" placeholder="Enter email">
                            </div>

                           
                            <button type="submit" class="btn btn-primary my-2" onclick="JsValidation()" name="create">Create</button>
                            <a href="courseListForAdmin.php" class="btn btn-danger ms-3 px-4">List</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>

        <!-- <script src="../Controller/Js_courseValidation/createCourse_JsValidation.js"></script> -->

        <script>
            function JsValidation() {
    if (document.getElementById("courseName").value == "") {
        alert("Course Name cannot be null!");

    }

    if (document.getElementById("teacherName").value == "") {

        alert("Teacher Name cannot be null!");

    }
    reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@(([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (document.getElementById("email").value == "") {
        alert("Email cannot be null!");

    } else if (!reg.test(document.getElementById("email").value)) {
        alert("Invalid email formate!");

    }



}
        </script>
    </body>

    </html>
<?php
} else {
    header("Location:adminLogin.php");
    exit();
}
?>