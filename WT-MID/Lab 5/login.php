<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }


?>

<html>

<head>

    <title>Document</title>
</head>

<body>
    <fieldset>
        <img width="40px" src="x.png" alt=""> Company



        <table align="right">
            <td><a href="publicHome.html">Home</a></td>
            <td><a href="login.php">Login</a></td>
            <td><a href="registration.php">Registration</a></td>
        </table>

    </fieldset>

    <form method="post" action="loginCheck.php">
        <table align="center">

            <tr>
                <td>
                    <p> User Name :</p>

                </td>

                <td>
                    <input type="text" name="username">

                </td>

            </tr>
            <br>
            <tr>
                <td>
                    <p>User Password :</p>

                </td>
                <td>
                    <input type="password" name="password">

                    <hr>

                </td>


            </tr>

            <br>

            <tr>
                <td>

                    <input type="checkbox"> Remember me


                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                </td>
                <td><a href="">Forgot password</a></td>
            </tr>

        </table>

    </form>
    </fieldset>



</body>

</html>