// $(document).ready(function(){

// 	var productList;

 

// 	$(".add-product").on("click", function(){

// 		$.ajax({

// 			url : '../admin/classes/Products.php',
// 			method : 'POST',
// 			data : new FormData($("#add-product-form")[0]),
// 			contentType : false,
// 			cache : false,
// 			processData : false,
// 			success : function(response){
// 				console.log(response);
// 				var resp = $.parseJSON(response);
// 				if (resp.status == 202) {
// 					$("#add-product-form").trigger("reset");
// 					$("#add_product_modal").modal('hide');
// 					getProducts();
// 					// window.location.href = "index.php";
// 					//window.location = '../admin/classes/Products.php';
// 				}else if(resp.status == 303){
// 					// window.location.href = "products.php";
// 					alert(resp.message);
					
// 				}
// 			}

// 		});

// 	});


// 	$(document.body).on('click', '.edit-product', function(){

// 		console.log($(this).find('span').text());

// 		var product = $.parseJSON($.trim($(this).find('span').text()));

// 		console.log(product);

// 		$("input[name='e_product_name']").val(product.product_title);
// 		$("textarea[name='e_product_desc']").val(product.product_desc);
// 		$("input[name='e_product_qty']").val(product.product_qty);
// 		$("input[name='e_product_price']").val(product.product_price);
// 		$("input[name='e_product_keywords']").val(product.product_keywords);
// 		$("input[name='e_product_image']").siblings("img").attr("src", "../product_images/"+product.product_image);
// 		$("input[name='pid']").val(product.product_id);
// 		$("#edit_product_modal").modal('show');

// 	});

// 	$(".submit-edit-product").on('click', function(){

// 		$.ajax({

// 			url : '../admin/classes/Products.php',
// 			method : 'POST',
// 			data : new FormData($("#edit-product-form")[0]),
// 			contentType : false,
// 			cache : false,
// 			processData : false,
// 			success : function(response){
// 				console.log(response);
// 				var resp = $.parseJSON(response);
// 				if (resp.status == 202) {
// 					$("#edit-product-form").trigger("reset");
// 					$("#edit_product_modal").modal('hide');
// 					getProducts();
// 					alert(resp.message);
// 					window.location.href = "products.php";
// 				}else if(resp.status == 303){
// 					alert(resp.message);
// 				}
// 			}

// 		});


// 	});

// 	$(document.body).on('click', '.delete-product', function(){

// 		var pid = $(this).attr('pid');
// 		if (confirm("Are you sure to delete this item ?")) {
// 			$.ajax({

// 				url : '../admin/classes/Products.php',
// 				method : 'POST',
// 				data : {DELETE_PRODUCT: 1, pid:pid},
// 				success : function(response){
// 					console.log(response);
// 					var resp = $.parseJSON(response);
// 					if (resp.status == 202) {
// 						getProducts();
// 					}else if (resp.status == 303) {
// 						alert(resp.message);
// 					}
// 				}

// 			});
// 		}else{
// 			alert('Cancelled');
// 		}
		

// 	});

// });