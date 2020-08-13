<?php
require ('DBCon.php');

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $picture = $_POST['picture'];
    $query = "UPDATE `product` SET `id` = '$id', `name` = '$name', `description` = '$description',
        `price` = '$price', `picture` = '$picture' WHERE `product`.`id` = $id;";
    $db->query($query);
    echo "Update successful! Reload the table to see it!";
    exit;
}
else {
    echo "Update not successful ):";
    exit;
}
?>