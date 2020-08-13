$(document).ready(function() {
    $('.btnRemove').click(remove);
    $('.btnUpdate').click(updateForm);
    $('#submit').click(updateItem);
    $('#reload').on("click", reloadTable);
    $('#addItem').on("click", addItem);

    $(".tableRow").mouseover(function(){
        $(this).css("background-color", "lightcoral");
    });
    $(".tableRow").mouseleave(function(){
        $(this).css("background-color", "bisque");
    });
})

function remove() {
    console.log(this.id);
    var id = this.id.substring(4, this.id.length);
    $.ajax( {
        url: 'removeItem.php',
        type: 'POST',
        data: {id: id},
        success: function(response) {
            if(response==1) {
                alert(response);
                $(id).closest('tr').fadeOut(500);
            }
            else {
                alert(response);
            }
        }

    })
}


function updateForm() {
    console.log(this.id);
    var modalForm = document.getElementById("modalForm");
    let submit = document.getElementById("submit");
    var id = this.id.substring(4, this.id.length);
    console.log(id);
    $.ajax( {
        url: 'updateForm.php',
        type: 'POST',
        data: {id: id},
        success: function(response) {
            console.log(response);
            if(response==0) {
                alert("Error");
            }
            else {
                modalForm.innerHTML = response;
            }
        }

    })

}

function updateItem () {
    let $id = $('#idItem').val();
    console.log($id);
    let $name = $('#nameItem').val();
    let $description = $('#descriptionItem').val();
    let $price = $('#priceItem').val();
    let $image = $('#imageItem').val();
    $.ajax( {
        url: 'updateItem.php',
        type: 'POST',
        data: {
            id: $id,
            name: $name,
            description: $description,
            price: $price,
            picture: $image
        },
        success: function(response) {
            alert(response);
        }

    })

}

function reloadTable() {
    $('#test').load('index.php' + ' #data', function () {

        $('input').unbind();
        $('button').unbind();

        $('#reload').on("click", reloadTable);
        $('.btnRemove').click(remove);
        $('.btnUpdate').click(updateForm);
        $('#submit').click(updateItem);
        $('#addItem').on("click", addItem);

    });

}

function filter(){

    let filter = document.getElementById('search-bar').value.toUpperCase();

    let myTable = document.getElementById('data');
    let tr =myTable.getElementsByTagName('tr');

    for(var i=0; i<tr.length; i++){

        let td= tr[i].getElementsByTagName('td')[1];

        if (td){
            let textValue = td.textContent || td.innerHTML ;

            if(textValue.toUpperCase().indexOf(filter) > -1 ){
                tr[i].style.display ="";
            } else{
                tr[i].style.display ="none";
            }
        }

    }
}

function addItem() {
    let $name = $('#nameAddItem').val();
    let $description = $('#descriptionAddItem').val();
    let $price = $('#priceAddItem').val();
    let $image = $('#imageAddItem').val();
    console.log($name);
    $('#close').click();
    $.ajax( {
        url: 'addItem.php',
        type: 'POST' ,
        data: {
            name: $name,
            description: $description,
            price: $price,
            picture: $image
        },
        success: function(response) {
            alert(response), 1000;
        }

    })

}

function colorRow() {
    $(this).css("background", "lightcoral");
}

function uncolorRow() {
    $(this).css("background", "bisque");
}