<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PATHSALA.COM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>

    <div style="background-color: #9cffb6;">
        <nav class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
            <div class="container-fluid">
                <a class="navbar-brand text-success h5 fw-bold text-uppercase">PATHSALA.COM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link px-3  text-success fw-bold text-uppercase" href="index.php">Home</a>
                        <a class="nav-link px-3  text-success fw-bold text-uppercase" href="about.php">About</a>
                        <a class="nav-link px-3  text-success fw-bold text-uppercase" href="contact.php">Contact</a>

                        <?php
                        if (isset($_SESSION['userName'])) {
                            echo ' <a class="nav-link px-3  btn btn-success btn-sm text-white fw-bold text-uppercase" href="logout.php">Logout</a>';
                            echo "<div class='fw-bold btn btn-success ms-2'>
                                <i class='fas fa-users mx-1'></i>" . $_SESSION['userName'] . "
                            </div>";
                        } else {
                            echo ' <a class="nav-link px-3  btn btn-success btn-sm text-white fw-bold text-uppercase" href="login.php">Login</a>';
                        }



                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</body>

</html>