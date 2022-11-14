<?php 
    session_start();
    $productName = $_POST['productName'];
    $sellPrice = $_POST['sellPrice'];
    $buyPrice = $_POST['buyPrice'];

    if($productName == "" || $sellPrice == "" || $buyPrice == "") {
        header('location: reg.php?err=null');
    }

else{
    $conn = mysqli_connect('localhost', 'root', '', 'finaltask1');
    $sql = ".INSERT INTO addproduct (productName, buyingPrice, sellingPrice) VALUES ('{$productName}', '{$sellPrice}' , '{$buyPrice}' ";
    $result = mysqli_query($conn, $sql);

   
}


?>