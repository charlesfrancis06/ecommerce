

<script>
	$(document).ready(function(){
		showAllProduct();



		//add product
		$(document).on('submit', '#myForm', function(event){
			event.preventDefault();
			var product_name = $('#product_name').val();
			var product_code = $('#product_code').val();
			var product_stock = $('#product_stock').val();
			var extension = $('#product_image').val().split('.').pop().toLowerCase();
			var product_price = $('#product_price').val();
				if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
				{
					alert('Invalid image file');
					$('#product_image').val(''); 
					return false;
				}
					if(product_name != '' && product_code != '' && product_stock != '' && product_price != '')
					{
						$.ajax({
							url:"<?php echo base_url() . 'admin/addProduct' ?>",
							method:'POST',	
							data:new FormData(this),
							contentType:false,
							processData:false,
							success: function(data)
							{
								alert(data);
								$('#myForm')[0].reset();

							}
						
						});
					}
					else
					{
						alert('Other fields are required!');
					}


		});


		//show product
		function showAllProduct(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>Admin/showAllProduct	',
				async: false,
				dataType: 'json',
				success: function(data){
					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html +='<tr>'+
									'<td>'+data[i].product_id+'</td>'+
									'<td>'+data[i].product_name+'</td>'+
									'<td>'+data[i].product_code+'</td>'+
									'<td>'+data[i].product_stock+'</td>'+
									'<td><img width="20%" height="20%" src="../image/'+data[i].product_image+'" class="img-responsive" ></td>'+
									'<td>'+data[i].product_price+'</td>'+
									'<td>'+
										'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].product_id+'">Edit</a>'+
										'<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].product_id+'">Delete</a>'+
									'</td>'+
							    '</tr>';	
					}
					$('#showdata').html(html);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
		}


//edit
		$('#showdata').on('click', '.item-edit', function(){
			var product_id = $(this).attr('data');
			
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>admin/editProduct',
				data: {product_id: product_id},
				async: false,
				dataType: 'json',
				success: function(data){
					$('#product_name').val(data.product_name);
					$('#product_code').val(data.product_code);
					$('#product_stock').val(data.product_stock);
					$('#product_price').val(data.product_price);
					$('#product_id').val(data.product_id);
				},
				error: function(){
					alert('Could not Edit Data');
				}
			});
		});

		

	});

</script>

</div>

</body>
</html>
 