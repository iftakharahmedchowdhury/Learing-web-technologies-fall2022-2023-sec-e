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
    <title>Signup</title>
</head>

<body>
    <form method="post" action="../controls/registrationCheck.php" enctype="">
        <fieldset>
            <legend></legend>
            <table align="center" width="100%">
                <tr align="center">
                    <td colspan="4">
                        <h2>Profile</h2>
                    </td>

                </tr>
            </table>

            <table align="center">

                <tr align="left">
                    <td colspan="4">
                        <p>ID: </p>
                    </td>
                    <td>
                        <input type="text" name="userName" value=" <?php echo $_SESSION['user']['userName'] ?>" readonly>
                    </td>

                </tr>
                <!--     <tr align="left">
                    <td colspan="4">
                        <p>Password: </p>
                    </td>
                    <td>
                        <input type="password" name="password" value="">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>confirm password: </p>
                    </td>
                    <td>
                        <input type="password" name="confirmpassword" value="">
                    </td>

                </tr> -->

                <tr align="left">
                    <td colspan="4">
                        <p>Email: </p>
                    </td>
                    <td>
                        <!--  <input type="email" name="age" value=""> -->
                        <input type="email" name="email" value=" <?php echo $_SESSION['user']['email'] ?>" readonly>
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>User type: </p>
                    </td>
                    <td>
                        <!-- <input type="radio" name="userType" value="Male" id="">Admin
                        <input type="radio" name="userType" value="Female" id="">User -->
                        <!--        <select id="userType" name="userType">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option> -->

                        <!--   </select> -->
                        <input type="text" name="userType" value=" <?php echo $_SESSION['user']['userType'] ?>" readonly>

                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">

                    </td>

               



                </tr>
            </table>

        </fieldset>
    </form>
    <table align="center">
        <tr>
            <td>
             
            </td>
        </tr>
    </table>
</body>

</html>