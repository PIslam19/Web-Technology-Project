<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontAwesome/css/all.min.css">
    <link rel="stylesheet" href="fontAwesome/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PATHSALA.COM</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        img {
            width: 100%;
        }

        #header {
            height: 90vh;
            
        }

        .textArea {
            padding-top: 230px;
            padding-left: 240px;
            color: green;
            font-size: 18px;
            font-style: italic;
        }

        .card-area {
            overflow: hidden;
            margin: 0 auto;
            height: 1150px;
        }

        .card {
            width: 29%;
            margin: 24px 2%;
            height: 305px;
            padding: 20px;
            float: left;
            box-shadow: 5px 5px 5px gray;
        }
    </style>
</head>

<body>

    <div class="menu">
        <?php include 'navBar.php'; ?>
    </div>

    <!-- header-area -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" indicators interval="1000" pause=false>
        <div>
                <img style="height: 720px;" src="./images/home.jpg" alt="Third slide">
            </div>
    </div>

    <!-- about area -->
    <div class="about-area">
        <h2 class="text-center mt-5 fw-bold">ABOUT US</h2>
        <hr style="color: red; width: 15%; margin: 20px auto; height: 3px">
        <div>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/path.png" style="height: 400px; width: 100%" alt="">
                    </div>
                    <div class="col-md-6">

                        <h3>PATHSALA.COM</h3>
                        <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dicta, animi
                            incidunt natus aspernatur iste est architecto perferendis sit, rem saepe beatae harum iusto
                            delectus quidem labore eius. Atque aspernatur natus perferendis laborum, asperiores unde aut
                            delectus assumenda tempora temporibus velit odit molestias perspiciatis beatae quo
                            exercitationem. Omnis possimus tenetur consequatur voluptatum eaque exercitationem
                            distinctio sapiente quod earum. Cum ullam quis consequuntur. Corporis perferendis dolore qui
                            magnam ad laborum quae vero explicabo, consequatur tenetur beatae voluptatem repellat
                            expedita animi nam accusantium, nulla facilis? Nostrum, culpa vero? Fugit velit ducimus
                            alias asperiores adipisci voluptatibus ad quibusdam eaque aperiam! Provident, velit
                            veritatis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti error fugiat
                            modi ipsam dignissimos laborum, harum provident quod distinctio beatae totam placeat animi,
                            molestias nemo dolor sit amet dolor sit amet inventore minus maxime! Pariatur, numquam.
                            dolor sit amet Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- course area -->
    <div class="course-area container mb-5 pb-5">
        <h2 class="text-center fw-bold">AVAILABLE COURSES</h2>
        <hr class="mb-5 " style="color: red; width: 15%; margin: 20px auto; height: 3px">
        <div class="card-area">


            <div class="card " style="color: red; background: #d4ebd3;">
                <h5 class=" text-uppercase text-center">JAVA</h5>
                <hr>
                <div class="img-area text-center">
                    <img src="images/ss1.png" alt="" class="w-25 mb-4">
                </div>
                <p aling="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                    neque sequi necessitatibus consequatur</p>
            </div>


            <div class="card " style="color: red; background: #d4ebd3;">
                <h5 class=" text-uppercase text-center">ALGORITHMS</h5>
                <hr>
                <div class="img-area text-center">
                    <img src="images/ss2.png" alt="" class="w-25 mb-4">
                </div>
                <p aling="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                    neque sequi necessitatibus consequatur</p>
            </div>


            <div class="card " style="color: red; background: #d4ebd3;">
                <h5 class=" text-uppercase text-center">CS Math</h5>
                <hr>
                <div class="img-area text-center">
                    <img src="images/ss3.png" alt="" class="w-25 mb-4">
                </div>
                <p aling="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                    neque sequi necessitatibus consequatur</p>
            </div>



            <div class="card " style="color: red; background: #d4ebd3;">
                <h5 class=" text-uppercase text-center">DATA STRUCTURE</h5>
                <hr>
                <div class="img-area text-center">
                    <img src="images/s4.png" alt="" class="w-25 mb-4">
                </div>
                <p aling="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                    neque sequi necessitatibus consequatur</p>
            </div>



            <div class="card " style="color: red; background: #d4ebd3;">
                <h5 class=" text-uppercase text-center">DISCRETE MATH</h5>
                <hr>
                <div class="img-area text-center">
                    <img src="images/s5.png" alt="" class="w-25 mb-4">
                </div>
                <p aling="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                    neque sequi necessitatibus consequatur</p>
            </div>



            <div class="card " style="color: red; background: #d4ebd3;">
                <h5 class=" text-uppercase text-center">SOFTWARE ENGINEERING</h5>
                <hr>
                <div class="img-area text-center">
                    <img src="images/s6.png" alt="" class="w-25 mb-4">
                </div>
                <p aling="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                    neque sequi necessitatibus consequatur</p>
            </div>

            <h2 class="text-center fw-bold">UPCOMMING COURSES</h2>
        <hr class="mb-5 " style="color: red; width: 15%; margin: 20px auto; height: 3px">
        <div class="card-area">



            <div class="card " style="color: red; background: #d4ebd3;">
                <h5 class=" text-uppercase text-center">C++</h5>
                <hr>
                <div class="img-area text-center">
                    <img src="images/s7.png" alt="" class="w-25 mb-4">
                </div>
                <p aling="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                    neque sequi necessitatibus consequatur</p>
            </div>



            <div class="card " style="color: red; background: #d4ebd3;">
                <h5 class=" text-uppercase text-center">C#</h5>
                <hr>
                <div class="img-area text-center">
                    <img src="images/s8.JPG" alt="" class="w-25 mb-4">
                </div>
                <p aling="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                    neque sequi necessitatibus consequatur</p>
            </div>




            <div class="card " style="color: red; background: #d4ebd3;">
                <h5 class=" text-uppercase text-center">PYTHON</h5>
                <hr>
                <div class="img-area text-center">
                    <img src="images/s9.Jpg" alt="" class="w-25 mb-4">
                </div>
                <p aling="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                    neque sequi necessitatibus consequatur</p>
            </div>
            </div>


        </div>
    </div>

        <!-- contact-area -->
        <div class="contact">
            <h2 class="text-center mt-3 fw-bold">CONTACT US</h2>
            <hr style="color: green ; width: 15%; margin: 20px auto; height: 3px">
            <div class="container  my-5">
                <div class=" mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class=" p-4" style="background-color: #9cffb6;">
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
                                <div class="mt-5 mx-5 px-5 text-danger">
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

        <!-- footer-area -->
        <div>
            <?php include 'footer.php'; ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script>
            $('.carousel').carousel({
                interval: 3000
            })
        </script>
</body>

</html>