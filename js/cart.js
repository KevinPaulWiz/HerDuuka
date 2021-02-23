$(document).ready(function(){
	/* update product quantity in cart*/
    $(".quantity").change(function() {		
		 var element = this;
		 setTimeout(function () { update_quantity.call(element) }, 2000);	
	});	
	function update_quantity() {
		var pcode = $(this).attr("data-code");
		var quantity = $(this).val(); 
		$(this).parent().parent().fadeOut(); 
		$.getJSON( "manage_cart.php", {"update_quantity":pcode, "quantity":quantity} , function(data){		
			window.location.reload();			
		});
	}	
	/* add item to cart*/
	$(".product-form").submit(function(e){
		var form_data = $(this).serialize();
		var button_content = $(this).find('button[type=submit]');
		button_content.html('Adding...'); 
		$.ajax({
			url: "manage_cart.php",
			type: "POST",
			dataType:"json",
			data: form_data
		}).done(function(data){		    
			$("#cart-container").html(data.products);
			$("#cart-container1").html(data.products);
			// $('#shopping-cart').html(''); // leave this div blank
			// $('#shopping-cart').show();      // load ajax loader on button click
			button_content.html('Add to Cart'); 
			/************************************/
			
     $('#dynamic-content').html(''); // leave this div blank
     $('#modal-loader').show();      // load ajax loader on button click
 
           // alert('True');
     $.ajax({
          url: 'modalCart.php',
          type: 'POST',
          // data: 'id='+uid,
          dataType: 'html'
     })
     .done(function(data){
          console.log(data); 
          $('#dynamic-content').html(''); // blank before load.
          $('#dynamic-content').html(data); // load here
          $('#modal-loader').hide(); // hide loader 
     })
     .fail(function(){
          $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#modal-loader').hide();
     });
			
		})
		e.preventDefault();
	});	


	/*Remove items from cart*/
	     $(document).on('click','a[data-role=deleted]',function(e){
		// alert('Alert');
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); 
		$(this).parent().parent().fadeOut();
		$.getJSON( "manage_cart.php", {"remove_code":pcode} , function(data,htm){
			$("#cart-container").html(data.products); 	
			window.location.reload();			
		});
	});
});




//     $(document).ready(function(){
//     $(document).on('click', '#modalCart', function(e){
// 	e.preventDefault();
  		
//      // var uid = $(this).data('id'); // get id of clicked row
  
//      $('#dynamic-content').html(''); // leave this div blank
//      $('#modal-loader').show();      // load ajax loader on button click
 
//            // alert('True');
//      $.ajax({
//           url: 'modalCart.php',
//           type: 'POST',
//           // data: 'id='+uid,
//           dataType: 'html'
//      })
//      .done(function(data){
//           console.log(data); 
//           $('#dynamic-content').html(''); // blank before load.
//           $('#dynamic-content').html(data); // load here
//           $('#modal-loader').hide(); // hide loader 
//      })
//      .fail(function(){
//           $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
//           $('#modal-loader').hide();
//      });

//     });
// });
