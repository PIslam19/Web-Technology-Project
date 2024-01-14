<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontAwesome/css/all.min.css">
    <link rel="stylesheet" href="fontAwesome/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    * {
        margin: 0;
        padding: 0;
    }
    </style>
</head>

<body>
    <div class="menu">
        <?php include 'navBar.php';?>
    </div>

    <div class="contact">
            <h2 class="text-center mt-3 fw-bold">CONTACT US</h2>
            <hr style="color: green ; width: 15%; margin: 20px auto; height: 3px">
            <div class="container  my-5">
                <div class=" mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class=" p-4"style="background-color: #9cffb6;">
                                <form class="">
                                    <fieldset style ="color: green;">
                                        <legend>
                                            <h3 class="form-heading">Message Us!</h3>
                                        </legend>
                                        <table>
                                            <tr>
                                                <td>Name : </td>
                                                <td><input placeholder="Name" type="text" name="userName">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email : </td>
                                                <td><input placeholder="Email" type="text" name="email">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td> <input placeholder="Phone" type="password" name="pass">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Message:</td>
                                                <td>
                                                    <textarea id="w3review" name="w3review" rows="4" cols="26">

                                                    </textarea>
                                                </td>
                                            </tr <tr>
                                            <td><br>
                                            </td>
                                            </tr>
                                            <td>
                                                <input class="btn btn-sm btn-success px-4" type="submit" name="submit" value="Send Message">
                                            </td>
                                        </table>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 p-4">
                            <div class="">
                                <h3 class="text-center form-heading">Contact Us Via</h3>
                                <div class="mt-5 mx-5 px-5 text-success">
                                    <div class="mt-5">
                                        <div class="my-2">
                                            <a href="https://www.facebook.com/md.alislam.1690/" target="_blank"><i class="fab fa-facebook h4">Facebook</i></a>
                                        </div>
                                        <div class="my-2">
                                            <a href="https://www.linkedin.com/in/md-islam-sardar-64a0491ab/" target="_blank"> <i class="fab fa-linkedin h4">LinkedIn</i></a>
                                        </div>
                                        <div class="my-2">
                                            <a href="https://twitter.com/MdAlIsl43115990" target="_blank"> <i class="fab h4 fa-twitter-square">Twitter</i></a>
                                        </div>
                                    </div>
                                    <h5 class="mt-5" style="color:green;">Bashundhara R/A <br>
                                        Dhaka,Bangladesh</h5>
                                    <a href="" class="btn btn-success btn-sm">+8801971508247</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    <div>
        <?php include 'footer.php';?>
    </div>
</body>

</html>