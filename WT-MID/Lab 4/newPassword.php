<html>

<head>
    <title>Form Submission</title>
</head>

<body>



    <form action="loginCheck.php" method="post" enctype="">
        <fieldset>
            <legend>Change Password</legend>
            <table>
                <tr>
                    <td>Current Password</td>
                    <td><input type="text" name="currentPassword" value=""></td>
                </tr>
                <tr>
                    <td>New password</td>
                    <td><input type="password" name="newPassWord" value=""></td>
                </tr>
                <tr>
                    <td>Retype password</td>
                    <td><input type="password" name="retypedPassword" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>

</html>