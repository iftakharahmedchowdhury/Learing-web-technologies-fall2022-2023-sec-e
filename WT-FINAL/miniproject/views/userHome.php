<?php
session_start();
if (isset($_GET['err'])) {
    if ($_GET['err'] == 'invalid_request') {
        echo "invalid request error..";
    }

    if ($_GET['err'] == 'null') {
        echo "null username/password";
    }
}


?>

<html>

<head>
    <title>

    </title>
</head>

<body>
    <form method="post" action="" enctype="">
        <h2>Welcome <?php echo $_SESSION['user']['userName'] ?></h2>
        <a href="profile.php">Profile</a> <br>
        <a href="">change password</a> <br>
        <a href="../controls/logout.php">logout</a> <br>


    </form>


</body>

</html>