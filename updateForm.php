<?php
require('DBCon.php');
if(isset($_POST['id'])) {
    $result = mysqli_query($db, "SELECT *FROM product");
    while ($row =mysqli_fetch_array($result)){
        if($_POST['id'] == $row['id']) {
            $response = "id:<br> <input type='text' id='idItem' value='" .$row['id']. "' disabled /> <br>
                        Name: <br><input type='text' id='nameItem' value = '".$row['name']."'><br>
                        Description: <br><input type='text' id='descriptionItem' value='".$row['description']."'><br>
                        Price:<br> <input type='text' id='priceItem' value='".$row['price']."'><br>
                        Image: <br><input type='text' id='imageItem' value='".$row['picture']."'><br>";
            echo $response;
            exit;
        }
    }
    echo 0;
    exit;
}
else {
    echo 0;
    exit;
}
?>
