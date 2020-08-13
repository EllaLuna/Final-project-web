<?php
    require ('DBCon.php');
    if(isset($_POST['name'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $picture = $_POST['picture'];
        $query = "INSERT INTO product (name, description, price, picture) VALUES ('$name' ,'$description','$price','$picture')";
        $res = mysqli_query($db, $query) or die($db->error);
        echo "Item added successfully! Reload the table to see it!";
        exit;
    }
    echo "Could not add item ):";
    exit;
?>
