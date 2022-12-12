<?php
session_start();
require_once "../models/patientModel.php";

$status = showAllProduct();
echo "<table border=1>
<tr>
    <th> ID</th>
    <th> Email</th>
    <th>User Type</th>

 
</tr>";

    while ($data = mysqli_fetch_assoc($status)) {


        echo "<tr>
    <td>{$data['userName']}</td>
    <td>{$data['email']}</td>
    <td>{$data['userType']}</td>
 
    
    
    
</tr>";
    }

    echo "</table>";
    // $status = mysqli_query($conn, $sql);
    // return $status;
?>
