<?php
session_start();

if (isset($_SESSION['userName'])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Change Password (Teacher)</title>
        
        <style>
            body {
                background: #1690A7;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                flex-direction: column;
            }

            * {
                font-family: sans-serif;
                box-sizing: border-box;
            }

            form {
                width: 500px;
                border: 2px solid #ccc;
                padding: 30px;
                background: #fff;
                border-radius: 15px;
            }

            h2 {
                text-align: center;
                margin-bottom: 40px;
            }

            input {
                display: block;
                border: 2px solid #ccc;
                width: 95%;
                padding: 10px;
                margin: 10px auto;
                border-radius: 5px;
            }

            label {
                color: #888;
                font-size: 18px;
                padding: 10px;
            }

            button {
                float: right;
                background: #555;
                padding: 10px 15px;
                color: #fff;
                border-radius: 5px;
                margin-right: 10px;
                border: none;
            }

            button:hover {
                opacity: .7;
            }

            .error {
                background: #F2DEDE;
                color: #A94442;
                padding: 10px;
                width: 95%;
                border-radius: 5px;
                margin: 20px auto;
            }

            .success {
                background: #D4EDDA;
                color: #40754C;
                padding: 10px;
                width: 95%;
                border-radius: 5px;
                margin: 20px auto;
            }

            h1 {
                text-align: center;
                color: #fff;
            }

            .ca {
                font-size: 14px;
                display: inline-block;
                padding: 10px 15px;
                text-decoration: none;
                background: aqua;
                font-weight: bold;
                border-radius: 5px;
            }

            .ca:hover {
                color: red;
            }

            .home-nav a {
                padding: 10px;
                color: #f7bd65;
                text-transform: uppercase;
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        <form action="../Controller/ProfileUpdate/teacherProfileUpdate.php" method="post">
            <h2>Change Password</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <label>Old Password</label>
            <input type="password" name="op" placeholder="Old Password">
            <br>

            <label>New Password</label>
            <input type="password" name="np" placeholder="New Password">
            <br>

            <label>Confirm New Password</label>
            <input type="password" name="c_np" placeholder="Confirm New Password">
            <br>

            <button type="submit">CHANGE</button>
            <a href="TeacherDashBoard.php" class="ca">HOME</a>
        </form>
    </body>

    </html>

<?php
} else {
    header("Location: TeacherDashBoard.php");
    exit();
}
?>