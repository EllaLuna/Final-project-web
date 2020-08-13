<?php
require('DBCon.php');
if(isset($_POST['id'])) {
    $id=$_POST['id'];
    $query = "DELETE FROM `product` WHERE id=".$id;
    $db->query($query);
    echo "Deleted successfully! Reload the table to see it!";
    exit;
}
else {
    echo "Could not delete the product";
    exit;
}
?>
