<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pandemic Shop</title>

    <script src="jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <?php
    require('./DBCon.php');
    require ('modals.php');
    require("header.php");
    require('itemList.php')
    ?>
</head>
<body>
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="btnNew">
    Create New Item
</button>
<br><br>
<button type="button" class="btn btn-primary" id="reload">Reload</button>
<br>
<!--                  this is the footer              -->
<br><br>
<?php
      require ('./footer.php');
    ?>
</body>
</html>