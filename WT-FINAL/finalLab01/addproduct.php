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
<html>
<head>
  
    <title></title>
</head>
<body>
<form method="post" action="addproductCheck.php" enctype="">
            <fieldset>
                <legend>Add product</legend>
               Product Name: <br> <input type="text" name="productName" value=""/> <br>
                Buying price: <br> <input type="number" name="sellPrice" value=""/> <br>
                Selling price: <br> <input type="number" name="buyPrice" value=""/> <br>
                    <input type="submit" name="btn" value="Submit"/>
            </fieldset>
        </form>
</body>
</html>