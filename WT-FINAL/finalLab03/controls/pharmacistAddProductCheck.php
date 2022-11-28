<?php
session_start();
require_once "../models/pharmacistModel.php";
$pharmaProductName = $_POST['pharmaProductName'];
$pharmaCost = $_POST['pharmaCost'];
$pharmaSetStatus = $_POST['pharmaSetStatus'];

if ($pharmaProductName == "" || $pharmaCost == "" || $pharmaSetStatus == "") {
    header('location: ../views/pharmacistAddProduct.php?err=null');
} 
/*else  {
     $pAddProduct = ['pharmaProductName'=> $pharmaProductName, 'pharmaCost'=>$pharmaCost, 'pharmaSetStatus'=>$pharmaSetStatus];
        $_SESSION['pAddProduct'] = $pAddProduct;
        $pAddProduct = $pharmaProductName."|".$pharmaCost."|".$pharmaSetStatus."\r\n";
        $file = fopen('pharmacyInventory.txt', 'a');
        fwrite($file, $pAddProduct);
        fclose($file);
       

    header('location: pharmacistHomePage.php');
} */
else {
    {
        $user = ['pharmaProductName'=> $pharmaProductName, 'pharmaCost'=>$pharmaCost, 'pharmaSetStatus'=> $pharmaSetStatus];
        $status = insertProduct($user);
       
        if($status){
            header('location: ../views/pharmacistHomePage.php');
        }else{
            echo "Database error...";
        }
    }
}