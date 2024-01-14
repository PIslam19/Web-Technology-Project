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
        <title>Schedule List (Student)</title>
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
                        <i class='fas fa-users mx-1'></i> <span  >Student: " . $_SESSION['userName'] . "</span>
                    </div>";
                    ?>
                </div>
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="studentDashBoard.php">Student Dashboard</a>
                </div>
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="scheduleListForStudent.php">Schedule List</a>
                </div>
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="courseListForStudent.php">Course List</a>
                </div>
                <!-- <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href=""></i>Manage Review</a>
                </div> -->
                <div class="text-center">
                    <a class="btn btn-danger fw-bold my-2 w-75" href="logout.php">Logout<i class="fas fa-sign-out-alt mx-3"></i></a>
                </div>

            </div>
            <div class="col-md-9">
                <?php include "../Controller/schedule_CRUD/scheduleCrudForStudent_read.php"; ?>

                <h2 class="text-center text-uppercase py-5  text-danger fw-bold">Available Schedule</h2>

                <div class="container">
                    <div class="box">
                        <?php
                        include "../Model/db_conn.php";

                        if (isset($_POST['search'])) {
                            $searchKey = $_POST['search'];
                            $sql = "SELECT * FROM schedule WHERE courseName LIKE '%$searchKey%'";
                        } else {
                            $sql = "SELECT * FROM schedule";
                            $searchKey = "";
                        }
                        $result = mysqli_query($con, $sql);

                        ?>
                        <form action="" method="POST" class="my-3 w-75 from-group " align="center">
                            <div class="row">
                                <div class="col-md-3 mt-2 fw-bold text-danger text-uppercase"> <label for="">Search Course</label></div>
                                <div class="col-md-9"><input class="form-control" type="text" placeholder="search by course name" name="search" value="<?php echo $searchKey; ?>"> </div>
                            </div>
                        </form>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Teacher name</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Schedule</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                while ($rows = mysqli_fetch_object($result)) {
                                    $i++;
                                ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?php echo $rows->teacherName ?></td>
                                        <td><?php echo $rows->courseName ?></td>
                                        <td><?php echo $rows->time ?></td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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
    header("Location:studentLogin.php");
    exit();
}
?>