<?php
session_start();

if (isset($_GET['err'])) {
    if ($_GET['err'] == 'invalid_request') {
        echo "invalid request error..";
    }


    if ($_GET['err'] == 'addData') {
        echo "Data inserted";
    }

/*     $_GET['err']; */

    $conn = mysqli_connect('localhost', 'root', '', 'finaltask1');

/*     echo $_GET['err']; */


    echo "<table border=1>
            <tr>
                <th>Product name</th>
                <th>Buying price</th>
                <th>Selling Price</th>
             
            </tr>";

    $sql = "select * from addproduct where productName='{$_GET['err']}'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    echo "<tr>
    <td>{$data['productName']}</td>
    <td>{$data['buyingPrice']}</td>
    <td>{$data['sellingPrice']}</td>
    <td><a href="."dataDeleteCheck.php?err={$data['productName']}"."> <button>Delete Product</button> </a></td>
    
    
</tr>


";
    echo "</table>";
}
?>


<!-- 
<html>
<html>

<head>

    <title></title>
</head>

<body>
    <form method="post" action="addproductCheck.php" enctype="">
        <fieldset>
            <legend>Edit product</legend>
            Product Name: <br> <input type="text" name="productName" value="{$data['productName']}" /> <br>
            Buying price: <br> <input type="number" name="sellPrice" value="{$data['buyingPrice']}" /> <br>
            Selling price: <br> <input type="number" name="buyPrice" value="{$data['sellingPrice']}" /> <br>
            <input type="submit" name="btn" value="Submit" />
            
        </fieldset>
    </form>

  <form action="displayProfit.php">
  <input type="submit" name="btn" value="Display" />
   
  </form>

</body>

</html> -->