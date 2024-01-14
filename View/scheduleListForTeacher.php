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
        <title>Schedule List (Teacher)</title>
        <link rel="stylesheet" href="fontAwesome/css/all.min.css">
        <link rel="stylesheet" href="fontAwesome/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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

            #result {
                position: absolute;
                width: 100%;
                max-width: 870px;
                cursor: pointer;
                overflow-y: auto;
                max-height: 400px;
                box-sizing: border-box;
                z-index: 1001;
            }

            .link-class:hover {
                background-color: #f1f1f1;
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
                        <i class='fas fa-users mx-1'></i> <span  >Teacher: " . $_SESSION['userName'] . "</span>
                    </div>";
                    ?>
                </div>
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="TeacherDashBoard.php"></i>Teacher DashBoard</a>
                </div>
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="courseListForTeacher.php"></i>Add Course</a>
                </div>
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="studentListForTeacher.php"></i>Student List</a>
                </div>
                <div class="text-center">
                    <a class="btn btn-info my-2 w-75" href="scheduleListForTeacher.php"></i>See Schedule</a>
                </div>
                <div class="text-center">
                    <a class="btn btn-danger fw-bold my-2 w-75" href="logout.php">Logout<i class="fas fa-sign-out-alt mx-3"></i></a>
                </div>

            </div>
            <div class="col-md-9">
                <?php include "../Controller/schedule_CRUD/scheduleCrudForAdmin_read.php"; ?>

                <h2 class="text-center text-uppercase py-5  text-danger fw-bold">Available Schedule</h2>

                <div class="" style="width: 80%; margin: 0 auto;">

                    <div class="row">
                        <div class="col-md-10">
                            <select name="schedule_list" id="schedule_list" class="form-control">
                                <option value="">Select Course</option>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    echo '<option value="' . $row["id"] . '">' . $row["courseName"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="button" name="search" id="search" class="btn btn-info">Search</button>
                        </div>
                    </div>
                    <br />
                    <div class="table-responsive" id="schedule_details" style="display:none">
                        <table class="table table-bordered">
                           
                            <tr>
                                <td width="20%" align="right"><b>Teacher Name:</b></td>
                                <td width="90%"><span id="teacherName"></span></td>
                            </tr>
                            <tr>
                                <td width="10%" align="right"><b>Course Name:</b></td>
                                <td width="90%"><span id="courseName"></span></td>
                            </tr>

                            <tr>
                                <td width="10%" align="right"><b>Schedule:</b></td>
                                <td width="90%"><span id="time"></span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        </div>
    </body>

    </html>
    <script>
        $(document).ready(function() {
            $('#search').click(function() {
                var id = $('#schedule_list').val();
                if (id != '') {
                    $.ajax({
                        url: "../Controller/JSON/json.php",
                        method: "POST",
                        data: {
                            id: id
                        },
                        dataType: "JSON",
                        success: function(data) {
                            $('#schedule_details').css("display", "block");
                            $('#courseName').text(data.courseName);
                            $('#teacherName').text(data.teacherName);
                            $('#time').text(data.time);
                        }
                    })
                } else {
                    alert("Please Select course");
                    $('#schedule_details').css("display", "none");
                }
            });
        });
    </script>
<?php
} else {
    header("Location:teacherLogin.php");
    exit();
}
?>