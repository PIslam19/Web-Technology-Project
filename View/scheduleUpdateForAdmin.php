<?php include '../Controller/schedule_CRUD/scheduleCrudForAdmin_update.php'; ?>
<?php
session_start();

if (isset($_SESSION['userName'])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Schedule Update (Admin)</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
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
                <div class="container w-75 mx-auto">
                    <form action="../Controller/schedule_CRUD/scheduleCrudForAdmin_update.php" method="post">

                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['error']; ?>
                            </div>
                        <?php } ?>
                        <h2 class="text-center pb-5 fw-bold"><span class="text-danger"> <?= $row['courseName'] . "'s Information! " ?></span></h2>

                        <div class="form-group">
                            <label for="courseName">Course name</label>
                            <input type="text" class="form-control" id="courseName" name="courseName" value="<?= $row['courseName'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="teacherName">Teacher name</label>
                            <input type="text" class="form-control" id="teacherName" name="teacherName" value="<?= $row['teacherName'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="time">Schedule</label>
                            <input type="text" class="form-control" id="time" name="time" value="<?= $row['time'] ?>">
                        </div>


                        <input type="text" name="id" value="<?= $row['id'] ?>" hidden>

                        <button type="submit" class="btn btn-primary" onclick="JsValidation()" name="update">Update</button>
                        <a href="scheduleListCreateForAdmin.php" class="btn btn-danger px-4 ms-3">Add Schedule</a>
                        <a href="scheduleListForAdmin.php" class="btn btn-success px-4 mx-3 ">Schedule List</a>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>

        <!-- <script src="../Controller/Js_courseValidation/UpdateCourse_JsValidation.js"></script> -->
        <script>
            function JsValidation() {

                if (document.getElementById("courseName").value == "") {

                    alert("CourseName cannot be null!");
                }
                if (document.getElementById("teacherName").value == "") {
                    alert("teacherName cannot be null!");

                }

                if (document.getElementById("time").value == "") {
                    alert("Schedule cannot be null!");

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