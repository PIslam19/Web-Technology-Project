<?php
session_start();

if (isset($_SESSION['userName'])) {

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Create Teacher (Admin)</title>
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
                        <h2 class="text-center text-danger fw-bold text-uppercase pb-3">Add Teacher</h2>
                        <form class="" action="../Controller/teacher_CRUD/teacherCrudForAdmin_create.php" method="post">

                            <?php if (isset($_GET['error'])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_GET['error']; ?>
                                </div>
                            <?php } ?>

                            <div class="form-group my-2">
                                <label for="name" class="my-2 fw-bold">UserName</label>
                                <input type="name" class="form-control" id="name" name="name" value="<?php if (isset($_GET['name'])) echo ($_GET['name']); ?>" placeholder="Enter name">
                            </div>

                            <div class="form-group my-2">
                                <label for="email" class="my-2 fw-bold">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_GET['email']))
                                                                                                            echo ($_GET['email']); ?>" placeholder="Enter email">
                            </div>

                            <div class="form-group my-2">
                                <label for="password" class="my-2 fw-bold">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php if (isset($_GET['password']))
                                                                                                                        echo ($_GET['password']); ?>" placeholder="Enter password">
                            </div>


                            <button type="submit" class="btn btn-primary my-2" onclick="JsValidation()" name="create">Create</button>
                            <a href="teacherListForAdmin.php" class="btn btn-danger ms-3 px-4">List</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>

        <script src="../Controller/Js_teacherValidation/createTeacher_JsValidation.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location:adminLogin.php");
    exit();
}
?>