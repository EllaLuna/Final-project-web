<!--    this is the table      -->
<?php
$result = mysqli_query($db, "SELECT *FROM product");
?>
<br><br>
<div id="test">
    <a name="tableStart"></a>
    <table class="table" id = "data">

        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Picture</th>
            <th scope="col">Options</th>
        </tr>
        </thead>

        <tbody id="tableBody">
        <?php
        $i=0;
        while ($row =mysqli_fetch_array($result)){
            echo "<tr class='tableRow' onmouseover='colorRow()' onmouseout='uncolorRow()'>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['description'] . "</td>
            <td>" . $row['price'] . "$</td>
            <td><img class='picture' src=" . $row['picture'] . "></td>
            <td> <button type='button' class='btnUpdate' data-toggle='modal' data-target='#myModal' id='btnU".$row['id']."'>Update</button>
             <br><br> <button class ='btnRemove' id='btnR".$row['id']."' )>Remove</button></td>
            </tr>";
            $i++;
        }
        ?>
        </tbody>

    </table>
</div>
