<?php
session_start();

if (isset($_SESSION['userName'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teacher List (Admin)</title>
        <!-- <link rel="stylesheet" href="css/CRUD/style.css"> -->
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

            ul {
                margin: 0;
                padding: 0;
            }

            .container {
                width: 80%;
                margin: auto;
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
            <div class="col-md-9">
                <?php include "../Controller/teacher_CRUD/teacherCrudForAdmin_read.php"; ?>

                <h2 class="text-center text-uppercase py-5 fw-bold text-danger" >Teacher List</h2>

                <div class="container">
                    <div class="box">
                        <?php if (isset($_GET['success'])) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_GET['success']; ?>
                            </div>
                        <?php } ?>
                        <?php if (mysqli_num_rows($result)) { ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    while ($rows = mysqli_fetch_assoc($result)) {
                                        $i++;
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i ?></th>
                                            <td><?= $rows['username'] ?></td>
                                            <td><?php echo $rows['email']; ?></td>
                                            <td><a href="teacherUpdateForAdmin.php?id=<?= $rows['id'] ?>" class="btn btn-success">Update</a>

                                                <a href="../Controller/teacher_CRUD/teacherCrudForAdmin_delete.php?id=<?= $rows['id'] ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php } ?>
                        <a href="teacherListCreateForAdmin.php" class="btn btn-primary px-4">Add</a>
                    </div>
                </div>
            </div>
        </div>
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