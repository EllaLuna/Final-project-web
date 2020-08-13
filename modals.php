
<?php

echo "<div class=\"container\">
    <!-- The Modal -->
    <div class=\"modal\" id=\"myModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Modal Header -->
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Update your products</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body\">
                    <form id =\"modalForm\">

                    </form>
                </div>

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-danger\" data-dismiss=\"modal\" id=\"submit\" value=\"Submit\">Submit</button>
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>



<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Create New Item</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\" id=\"addModal\">
                Name: <br><input type='text' id='nameAddItem' placeholder=\"Item name\"><br>
                Description: <br><input type='text' id='descriptionAddItem' placeholder=\"Item description\"><br>
                Price:<br> <input type='text' id='priceAddItem' placeholder=\"Item price\"><br>
                Image: <br><input type='text' id='imageAddItem' placeholder=\"Image link\"><br>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id='close'>Close</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"addItem\">Add item</button>
            </div>
        </div>
    </div>
</div>";
?>