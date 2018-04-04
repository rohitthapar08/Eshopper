// alert(1)
	$(function(){
		// alert(1)
		$(".login_btn").click(function(){
			// alert(1)
			$.ajax({
				type:"post",
				data:$("#login_form").serialize(),
				url:"../controller/login_action.php",
				success:function(response){
					// alert(response);
					if(response==1)
					{
						window.location.href="index.php";
					}
					else
					{

					$(".login_err").html("Loading...");

					setTimeout(function(){
						$(".login_err").html(response);
					},1000);
						}
				}
			})
		})
	
	//////////////////////////////////////

$(".register_btn").click(function(){
			// alert(1)
			$.ajax({
				type:"post",
				data:$("#register_form").serialize(),
				url:"../controller/register_action.php",
				success:function(response){
					// alert(response);
					$(".err_register").html("Loading...");

					setTimeout(function(){
						$(".err_register").html(response);
					},1000);

				}
			})
		})
	//////////////////////////////////////

$(".br_btn").click(function(){
			// alert(1)
			$.ajax({
				type:"post",
				data:$("#br_form").serialize(),
				url:"../controller/brand_action.php",
				success:function(response){
					// alert(response);
					$(".err_register").html("Loading...");

					setTimeout(function(){
						$(".err_br").html(response);
					},1000);

				}
			})
		})
	//////////////////////////////////////

$(".ca_btn").click(function(){
			// alert(1)
			$.ajax({
				type:"post",
				data:$("#ca_form").serialize(),
				url:"../controller/category_action.php",
				success:function(response){
					// alert(response);
					$(".err_ca").html("Loading...");

					setTimeout(function(){
						$(".err_ca").html(response);
					},1000);

				}
			})
		})
	//////////////////////////////////////

$(".pa_btn").click(function(){
			// alert(1)
			$.ajax({
				type:"post",
				data:$("#pa_form").serialize(),
				url:"../controller/password_action.php",
				success:function(response){
					// alert(response);
					$(".err_pa").html("Loading...");

					setTimeout(function(){
						$(".err_pa").html(response);
					},1000);

				}
			})
		})
	//////////////////////////////////////


$(".pro_btn").click(function(){
			// alert(1)
			var objform=document.getElementById("pro_form");
			var dataobj=new FormData(objform);

			$.ajax({
				type:"post",
				data:dataobj,
				url:"../controller/product_action.php",
				contentType:false,
				processData:false,
				success:function(response){
					// alert(response);
					$(".pro_err").html(response);

					
				}
			})
		})
	//////////////////////////////////////
$(".category_data").click(function(aobj){
	// alert(1);
	aobj.preventDefault();
	 var result=$(this).attr("for");
	 // alert(result);
	 // alert("categoryid="+result);
	 $.ajax({
	 	type:"post",
	 	url:"../controller/filter_category.php",
	 	data:"categoryid="+result,
	 	success:function(response){
	 		$(".features_items").html(response);
	 	}
	 })
})
	//////////////////////////////////////

$(".brand_data").click(function(aobj){
	// alert(1);
	aobj.preventDefault();
	var result=$(this).attr("for");
	// alert(result);
	// alert("categoryid="+result);
		 $.ajax({
	 	type:"post",
	 	url:"../controller/filter_brand.php",
	 	data:"brandid="+result,
	 	success:function(response){
	 		$(".features_items").html(response);
	 	}
	 })
})
	//////////////////////////////////////

$(".add-wishlist").click(function(aobj){
	// alert(1);
	aobj.preventDefault();
	var result=$(this).attr("for");
	// alert(result);
	// alert("categoryid="+result);
		 $.ajax({
	 	type:"post",
	 	url:"../controller/wishlist_action.php",
	 	data:"productid="+result,
	 	success:function(response){
	 		alert(response);
	 	}
	 })
	})
///////////////////////////
$(".delete-wishlist").click(function(aobj){
	// alert(1);
	aobj.preventDefault();
	var result=$(this).attr("for");
	var cura =$(this);
	// alert(result);
	// alert("categoryid="+result);
		 $.ajax({
	 	type:"post",
	 	url:"../controller/wishlist_delete_action.php",
	 	data:"productid="+result,
	 	success:function(response){
	 		// alert(response);

	 		if(response==1)
	 		{
	 			cura.parent().parent().parent().parent().parent().fadeOut();
	 		}
	 	}
	 })
	})
//////////////////////////

$(".cartdata").click(function(aobj){
	// alert(1);
	aobj.preventDefault();
	var result=$(this).attr("for");
	// alert(result);
	// alert("categoryid="+result);
		 $.ajax({
	 	type:"post",
	 	url:"../controller/cart_action.php",
	 	data:"productid="+result,
	 	success:function(response){
	 		alert(response);
	 	}
	 });
	});
	//////////////////////////
	$(".deletecart").click(function(aobj){
	// alert(1);
	aobj.preventDefault();
	var result=$(this).attr("for");
	// alert(result);
	// alert("categoryid="+result);
	var cura=$(this);
		 $.ajax({
	 	type:"post",
	 	url:"../controller/delete_cart_action.php",
	 	data:"productid="+result,
	 	success:function(response){
	 		// alert(response);
	 		cura.parent().parent().parent().parent().parent().fadeOut();

	 	
	 	}
	 });
	});


});