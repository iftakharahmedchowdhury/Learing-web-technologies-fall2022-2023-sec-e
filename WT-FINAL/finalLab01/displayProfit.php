


<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'finaltask1');


    $sql = "select * from addproduct ";
    $result = mysqli_query($conn, $sql);

    echo "<table border=1>
            <tr>
                <th>Product name</th>
                <th>Profit</th>
             
            </tr>";

    while($data = mysqli_fetch_assoc($result)){
        $profit=$data['sellingPrice']-$data['buyingPrice'];

       echo "<tr>
                <td>{$data['productName']}</td>
                <td>{$profit}</td>
                <td><a href="."dataEdit.php?err={$data['productName']}"."> <button>Edit</button> </a></td>
                <td><a href="."dataDelete.php?err={$data['productName']}"."> <button>Delete</button> </a></td>
                
                
            </tr>";
    }

    echo "</table>";
?>

<!-- 
       <th>Selling Price</th>
<td>{$data['buyingPrice']}</td>
                <td>{$data['sellingPrice']}</td> -->