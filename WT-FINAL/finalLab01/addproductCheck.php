<?php 

    session_start();
    $productName = $_POST['productName'];
    $sellPrice = $_POST['sellPrice'];
    $buyPrice = $_POST['buyPrice'];

    if($productName == "" || $sellPrice == "" || $buyPrice == "") {
        header('location: addProduct.php?err=null');
    }

else{
    $conn = mysqli_connect('localhost', 'root', '', 'finaltask1');
    $sql = "INSERT INTO addproduct VALUES ('$productName', ' $sellPrice' ,'$buyPrice')";
     mysqli_query($conn, $sql);

     

     header('location: addProduct.php?err=addData');
}






?>