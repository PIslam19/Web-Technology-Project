<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <style>
        body {
            font-weight: bold;
        }
        .content form{
            background:#93f582;
            
        }
    </style>
</head>

<body>

    <div class="menu">
        <?php include 'navBar.php'; ?>
    </div>
    <div class="content form">
        <form class="form-border" method="POST" enctype="multipart/form-data" action="../Controller/teacherRegValidation.php">

            <fieldset>
                <legend>
                    <h3 class="form-heading">Teacher Registration Form</h3>
                </legend>
                <table>
                    <tr>
                        <td>UserName : </td>
                        <td><input placeholder="UserName" value="" type="text" name="userName">
                            <span class="error">*
                                <?php if (isset($userNameErr)) { ?>
                                    <p class="error"><?php echo $userNameErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td><input placeholder="Email" type="text" name="email">
                            <span class="error">*
                                <?php if (isset($emailErr)) { ?>
                                    <p><?php echo $emailErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                    <tr>
                        <td>PassWord:</td>
                        <td> <input placeholder="PassWord" type="password" name="pass">
                            <span class="error">*
                                <?php if (isset($passErr)) { ?>
                                    <p><?php echo $passErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm PassWord:</td>
                        <td> <input placeholder="Confirm PassWord" type="password" name="confirmPass">
                            <span class="error">*
                                <?php if (isset($confirmPassErr)) { ?>
                                    <p><?php echo $confirmPassErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn btn-sm btn-success px-4" type="submit" name="submit" value="Register">

                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                    <tr>
                        <td>Already have an Account?</td>
                        <td><a class="btn-sm btn btn-primary ms-3 px-4" href="teacherLogin.php">Login</a></td>
                    </tr>

                </table>
            </fieldset>
        </form>
    </div>
    <div>
        <?php include 'footer.php'; ?>
    </div>
    <script>
        $(document).ready(function() {


            $("input").blur(function() {
                $(this).css("background-color", "lightgray");

            });
        });
    </script>
</body>

</html>