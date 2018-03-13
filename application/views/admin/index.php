




<div class="container-fluid" style="margin-top: 50px;">
  <div class="row">

    <div class="col-sm-4">
    <div class="panel panel-info">
    <div class="panel-heading">Add product</div>
    <div class="panel-body">
    	
  <form id="myForm" class="form-horizontal" action="post" enctype="multipart/form-data">
    <input type="hidden" name="product_id" value="0">
  
  <div class="form-group"> 
  	<div class="col-sm-9">
      <label for="productName">Product Name</label>
     
      <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name">
  	</div>
  </div>

  <div class="form-group">	
  	<div class="col-sm-9">
    	<label  for="productCode">Product Code</label>
    
        <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter product code">
        </div>
  </div>

   <div class="form-group">
   	<div class="col-sm-6">
    	<label  for="productStock">Product Stock</label>
    	
        <input type="text" class="form-control" id="product_stock" name="product_stock" placeholder="Enter product stock">
  		</div>
  	</div>

   	<div class="form-group">
   			<div class="col-sm-9">
   	<label  for="product_image">Product Image</label>
  	<input type="file" id="product_image" name="product_image" class="form-control">
  	<span class="user_upload_image"></span>
	</label>
 		</div>
 	</div>

   <div class="form-group">
   	<div class="col-sm-6">
    	<label  for="productCode">Product Price</label>
    	
        <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter product code">
    </div>
  </div>

  
  <div class="form-group"> 
    <div class="col-sm-9">
      <button type="submit" name="action" value="Add" id="action" class="btn btn-default">Submit</button>
  </div>
  </div>

</form>
    	
    </div>
    <div class="panel-footer">Panel Footer</div>
  </div>


    </div>
    
    <div class="col-sm-8" >
    
	<div class="alert alert-success" style="display: none;">
		
	</div>
	<table class="table table-striped table-responsive" style="margin-top: 20px;">
		<thead>
			<tr>

				<td><b>Product ID</b></td>
				<td><b>Product Name</b></td>
				<td><b>Product Code</b></td>
        <td><b>Product Stock</b></td>
        <td><b>Product Image</b></td>
        <td><b>Product Price</b></td>
        <td><b>Action</b></td>
			</tr>
		</thead>
		<tbody id="showdata">
			
		</tbody>
	</table>


    </div>
  </div>
</div>  
      