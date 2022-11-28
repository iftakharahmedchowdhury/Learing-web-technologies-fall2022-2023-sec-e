<?php
require_once "db.php";

/*     function login($user){
        $con = getConnection();
        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        if($user != null){
            return true;
        }else{
            return false;
        }
    } */

function insertProduct($user)
{


    $conn = getConnection();
    $sql = "insert into phramacistaddproduct values('', '{$user['pharmaProductName']}', '{$user['pharmaCost']}', '{$user['pharmaSetStatus']}')";
    $status = mysqli_query($conn, $sql);
    return $status;
}

function showAllProduct()
{
    $conn = getConnection();
    $sql = "select * from phramacistaddproduct ";

    //////////////////////////////////
    $result = mysqli_query($conn, $sql);
    echo "<table border=1>
<tr>
    <th>Product ID</th>
    <th>Product name</th>
    <th>Product cost</th>
    <th>Product status</th>
 
</tr>";

    while ($data = mysqli_fetch_assoc($result)) {


        echo "<tr>
    <td>{$data['medicineId']}</td>
    <td>{$data['productName']}</td>
    <td>{$data['productCost']}</td>
    <td>{$data['setStatus']}</td>
    
    
    
</tr>";
    }

    echo "</table>";
    // $status = mysqli_query($conn, $sql);
    // return $status;

}

function updateProduct($user)
{

    $conn = getConnection();
    $sql = "UPDATE phramacistaddproduct SET productName='{$user['productName']}',productCost='{$user['productCost']}',setStatus='{$user['setStatus']}' where medicineId='{$user['searchproduct']}'";;
    $status = mysqli_query($conn, $sql);
    return $status;
}

function deleteProduct($user)
{
    $conn = getConnection();
    $sql = "DELETE from phramacistaddproduct where productName='{$user['searchproduct']}'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function showSpecificValue($user)
{
    $conn = getConnection();
    //SELECT * FROM `phramacistaddproduct` WHERE productName='c1'
    $sql = "SELECT * FROM phramacistaddproduct where productName='{$user['searchproduct']}'";
    $result = mysqli_query($conn, $sql);
  

    $data = mysqli_fetch_assoc($result);

    if ($data==null) {
        header('location: ../views/pharmacyAndInventoryStockmanagement.php?err=dataNotFound');
    }
    else{
        return $data;
    }
    /////////////while ($data = mysqli_fetch_assoc($result)) {


        /*         "
        <table align=" . "center" . " border=" . "1" . ">" .
        "<tr align=" . "center" . ">
    <td colspan=" . "4" . ">
    <input type=" . "text" . " value=" . "{$data['productName']}" . " readonly>
    </td>
    <td> 
        <input type=" . "text" . " value=" . "{$data['productCost']}" . ">
    </td>
    <td>
        
        <input type=" . "text" . " value=" . "{$data['setStatus']}" . ">
    </td>
    


</tr>
</table>
        ";

        echo "<tr>
    <td>{$data['medicineId']}</td>
    <td>{$data['productName']}</td>
    <td>{$data['productCost']}</td>
    <td>{$data['setStatus']}</td>
    
    
    
</tr>"; */

       
   //////// }
}
