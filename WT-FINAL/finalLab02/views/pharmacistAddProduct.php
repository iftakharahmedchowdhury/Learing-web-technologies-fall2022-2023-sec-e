<?php

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
    <title>Add product</title>
</head>

<body>
    <form method="post" action="../controls/pharmacistAddProductCheck.php" enctype="">


        <table align="center" width="100%">
            <tr align="center">
                <td colspan="4">
                    <h2>Add product</h2>
                </td>

            </tr>
        </table>

        <table align="center">
            <tr align="left">
                <td colspan="4">
                    <p>Product Name: </p>
                </td>
                <td>
                    <input type="text" name="pharmaProductName" value="">
                </td>

            </tr>



            <tr align="left">
                <td colspan="4">
                    <p>Product Cost: </p>
                </td>
                <td>
                    <input type="number" name="pharmaCost" value="">
                </td>

            </tr>
            <tr align="left">
                <td colspan="4">
                    <p>Set status: </p>
                </td>
                <td>
                    <input type="text" name="pharmaSetStatus" value="">
                </td>
                

            </tr>
            <tr align="left">
                <td colspan="4">

                </td>

                <td align="right"><input type="submit" name="btn" value="Submit" /></td>



            </tr>
        </table>


    </form>
    <table align="center">
        <tr>
            <td>
            <a href="pharmacistHomePage.php"><button>Back to home page</button></a>
            </td>
        </tr>
    </table>
</body>

</html>