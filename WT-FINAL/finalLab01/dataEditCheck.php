<?php
session_start();

$productName = $_POST['productName'];
$sellPrice = $_POST['sellPrice'];
$buyPrice = $_POST['buyPrice'];

if (isset($_GET['err'])) {
    if ($_GET['err'] == 'invalid_request') {
        echo "invalid request error..";
    }


    if ($_GET['err'] == 'addData') {
        echo "Data inserted";
    }
}

/*     $_GET['err']; */

$conn = mysqli_connect('localhost', 'root', '', 'finaltask1');

/*     echo $_GET['err']; */



    $sql = "UPDATE addproduct SET productName='$productName ',buyingPrice='$buyPrice',sellingPrice='$sellPrice' where productName='{$_GET['err']}'";
    $result = mysqli_query($conn, $sql);
   // $data = mysqli_fetch_assoc($result);

    header('location: displayProfit.php');

    ?>