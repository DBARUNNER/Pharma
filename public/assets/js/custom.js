$(function(){
$('a[title]').tooltip();
});



// Table Script

/*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});



// Java Script code form Import Bill form 


function calc_total(){
    var sum = 0;
    $('.input-totalPrice').each(function(){
        sum += parseFloat($(this).text());
    });
    $(".preview-total").val(sum);    
}
$(document).on('click', '.input-remove-row', function(){ 
    var tr = $(this).closest('tr');
    tr.fadeOut(200, function(){
        tr.remove();
        calc_total()
    });
});

$(function(){
    $('.preview-add-button').click(function(){
        var form_data = {};
        form_data["name"] = $('.payment-form input[name="name"]').val();
        form_data["madeIn"] = $('.payment-form input[name="madeIn"]').val();
        form_data["amount"] = parseFloat($('.payment-form input[name="amount"]').val()).toFixed(2);
        form_data["status"] = $('.payment-form #status option:selected').text();
        form_data["product_date"] = $('.payment-form input[name="product_date"]').val();
        form_data["exp_date"] = $('.payment-form input[name="expire_date"]').val();
        form_data["price"]  = $('.payment-form input[name="price"]').val();
        form_data["weight"] = $('.payment-form input[name="weight"]').val();
        form_data["label"]  = $('.payment-form input[name="label"]').val();
        form_data["totalPrice"]=$('.payment-form input[name="TotalPrice"]').val();
        form_data["remove-row"] = '<span class="glyphicon glyphicon-remove"></span>';
        var row = $('<tr></tr>');
        $.each(form_data, function( type, value ) {
            $('<td class="input-'+type+'"><input></input></td>').html(value).appendTo(row);
        });
        $('.preview-table > tbody:last').append(row); 
        calc_total();
    });  
});



function total() {
    var amount = document.getElementById('amount').value;
    var price  = document.getElementById('price').value;
    var totalPrice = amount * price; 
    document.getElementById('totalPrice').value = totalPrice;
}



// SUBMIT THE FORM 

function submit() {
    document.getElementById('change-password').submit();
}


// import model java script code 

function loan() {
    var total = document.getElementById('bill-total').value;
    var paid = document.getElementById('paid-input').value;
    var loan = total - paid; 
    document.getElementById('loan-input').value = loan;
}


$(document).ready(function(){

    $('div#error-message').fadeTo(3000,0.4);
    $('div#error-message').fadeOut(6000);

});




// AJAX CODE TO DISPLAY SUPLIER LIST

$(document).ready(function(){
  $("li#importSplier").click(function(){
    $.get("listSuplier",function(data,status){
      document.getElementById('import-table-body').innerHTML = data;
    });
  });
});





// Submit Table Data 
function import_from_suplier() {
    var cell = $('.input-name,.input-madeIn,.input-amount,.input-status,.input-product_date,.input-exp_date,.input-price,.input-weight,.input-label,.input-totalPrice');
    var i = 0;
    var data = new Array();
    while(cell[i] != undefined) {
        data[i] = cell[i].innerHTML;
        i++;
    }

    var paid = document.getElementById('paid-input').value;
    var loan = document.getElementById('loan-input').value;
    var total = document.getElementById('bill-total').value;
    var person_id = document.getElementById('suplier_id').value;
    $(document).ready(function(){
        
    $.post("importFromSuplier",
    {
      material:data,
      pay:paid,
      remain:loan,
      all:total,
      suplier_id: person_id 
      
    },
    function(data,status){
      alert(data);
    });
});

}

    

    /*
    |SALES TO CUSTOMER BILL 
    */ 


// Submit Table Data 
function sell_to_customer() {
    var cell = $('.input-name,.input-madeIn,.input-amount,.input-status,.input-product_date,.input-exp_date,.input-price,.input-weight,.input-label,.input-totalPrice');
    var i = 0;
    var data = new Array();
    while(cell[i] != undefined) {
        data[i] = cell[i].innerHTML;
        i++;
    }

    var paid        = document.getElementById('paid-input').value;
    var loan        = document.getElementById('loan-input').value;
    var total       = document.getElementById('bill-total').value;
    var person_id   = document.getElementById('suplier_id').value;
    var person_type = document.getElementById('person_type').innerHTML;
    $(document).ready(function(){
        
    $.post("salesToCustomer",
    {
      material:data,
      pay:paid,
      remain:loan,
      all:total,
      suplier_id: person_id,
      person_type:person_type 
      
    },
    function(data,status){
      alert(data);
    });
});

}


    // set person id in the div 
    function setId(id) {
        document.getElementById('suplier_id').value = id;
    $(document).ready(function(){    
    $.post("setSuplierName",
    {
       id:id
    },
    function(data,status){
      document.getElementById('person-name').innerHTML = "Customer name:";
      document.getElementById('person_type').innerHTML = "Customer";
      document.getElementById('suplier-name').innerHTML = data;
    });
});

    }

// show Import History content 
$(document).ready(function(){
  $("li#showHistory").click(function(){
    $.get("importHistory",function(data,status){
        document.getElementById('table-history-body').innerHTML = data;
    });
  });
});


// show import material base on bill id 
function seeImportMaterial(id){

$(document).ready(function(){
        
    $.post("setImportMaterial",
    {
       id:id
    },
    function(data,status){
      document.getElementById('import-material-body').innerHTML = data;
    });
});

}



        /*
        | RETRIEVE DATE FROM ON BLURE 
        */ 

        function retriveValue() {
            var batchNumber = document.getElementById('label').value;
            
            $(document).ready(function(){
        
            $.post("retrieveDate",
            {
               batchNumber:batchNumber
            },
            function(data,status){
                document.getElementById('sales-content-bill').innerHTML = data;
            });
        });


        }

    
        /*
        | List all agent infromation AJAX 
        */ 
        $(document).ready(function(){
          $("li#listAgent").click(function(){
            $.get("listAgent",function(data,status){
                document.getElementById('agent-table-body').innerHTML = data;
            });
          });
        });


        /*
        | SET AGENT ID 
        */ 

        function setAgentId(id) {
            document.getElementById('id').value = id;
        }


        /*
        | List Agency on table
        */ 
        $(document).ready(function(){
          $("li#saleAgency").click(function(){
            $.get("selAgency",function(data,status){
                document.getElementById('list-agency').innerHTML= data;
            });
          });
        });

        /*
        | set name of agency
        */ 

        function setName(id) {
        document.getElementById('suplier_id').value = id; 
        $(document).ready(function(){
        
            $.post("setAgencyName",
            {
               id:id
            },
            function(data,status){
                document.getElementById('person-name').innerHTML = "Agency Name:";
                document.getElementById('person_type').innerHTML = "Agency";
                document.getElementById('suplier-name').innerHTML=data;
            });
        });
     }


     /*
     | CUSTOMER SALES HISTORY AJAX CODE 
     */ 
     $(document).ready(function(){
      $("li#customerSaleHistory").click(function(){
        $.get("salesHistory",function(data,status){
            document.getElementById('customer-sale-history').innerHTML = data;
        });
      });
    });

     /*
     | see customer sell materials 
     */ 

     function seeCustomerMaterial(id) {
        $(document).ready(function(){
        
            $.post("customerMaterial",
            {
               id:id
            },
            function(data,status){
                document.getElementById('import-material-body').innerHTML = data;
            });
        });
     }



     /*
     | AGENCY SALES HISTORY
     */ 
     $(document).ready(function(){
      $("li#agency-sales").click(function(){
        $.get("agencyHistory",function(data,status){
            document.getElementById('agency-sales-history').innerHTML = data;
        });
      });
    });


     /*
     | MINES THE SELL QUANTITY FROM STOCK 
     */ 
     function minQuantity() {
        total()
        var batchNumber    = document.getElementById('label').value;
        var quantity       = document.getElementById('amount').value;
        var price          = document.getElementById('price').value;
        $(document).ready(function(){
        
            $.post("minQuantity",
            {
               batchNumber:batchNumber,
               quantity:quantity,
               price:price
            },
            function(data,status){
               
               alert(data);
            });
        });
        
     }


     /*
     | RETURN STOCK STATUS 
     */ 
      $(document).ready(function(){
      $("div#stockStatus").click(function(){
        $.get("stockStatus",function(data,status){
            document.getElementById('stock-status-body').innerHTML = data;
        });
      });
    });


    /*
    | MEDICIN STATUS AJAX CODE
    */ 
    $(document).ready(function(){
      $("div#medicin-status").click(function(){
        $.get("medicinStatus",function(data,status){
            document.getElementById('medicin-status-table').innerHTML = data;
        });
      });
    });

