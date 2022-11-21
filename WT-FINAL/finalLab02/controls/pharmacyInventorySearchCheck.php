<?php
session_start();
require_once "../models/pharmacistModel.php";
$searchproduct = $_POST['searchproduct'];

$user = ['searchproduct' => $searchproduct];
$status = showSpecificValue($user);


?>
<html>
<html>
<head>

</head>
<body>
    <table>
        <tr>
            <td>Product Name</td>
            <td>Product Cost</td>
            <td>Product status</td>
        </tr>
        <tr>
            <td>
                <input type="text" name="" id=""value="{$status['productName']}">
            </td>
        </tr>
    </table>
    
</body>
</html>
