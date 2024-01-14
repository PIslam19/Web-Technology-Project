<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
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
    <div class="content form " >
        <form class="form-border" method="POST" action="../Controller/adminLoginValidation.php">
            <fieldset>
                <legend>
                    <h3 class="form-heading ">Admin Login Form</h3>
                </legend>
                <br>
                <table>
                    <tr>
                        <td><label for="userName">UserName:</label></td>
                        <td>
                            <input id="userName" name="userName" type="text">
                            <span class="error">*
                                <?php if (isset($userNameErr)) { ?>
                                    <p><?php echo $userNameErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><label for="pass">Password</label></td>
                        <td>
                            <input id="pass" name="pass" type="password">
                            <span class="error">*
                                <?php if (isset($passErr)) { ?>
                                    <p><?php echo $passErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><input class="btn btn-success btn-sm px-4" type="submit" name="Login" value="Login"></td>
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
                $(this).css("background-color", "#738ff5");
              
            });
        });
    </script>
</body>

</html>
<?php
// }
?>