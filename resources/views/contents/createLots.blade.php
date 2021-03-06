
@extends('layouts.main')
@section('content')
<br><br><br>
@include ('partials.errors')
<body class="create_body">
		<h2 class="text-center">Create New Lots</h2>
			<div class="form-group">
	            <form action="{{ route('contents.createLots') }}"  method="POST">
	            	<legend><span>Auction Information</span></legend>
	            	
		            <label for="category_name" class="col-sm-8 control-label">Category</label>
		          	  <div class="col-sm-8">
		           	     <select class="form-control select2" name="category" required>
		            	        <option value="">Categories</option>
		                	    <option value="">Jewellaries</option>
		                 </select>
		              </div>
		            
		            <label for="title" class="col-sm-8 control-label">Auction Title</label>
		            <div class="col-sm-8">
		                <input type="text" class="form-control" name="title" placeholder="title" required>
		            </div>
		            
		            <div class="form-group">
	                        <label class="col-sm-8 control-label"><span class="ad_text"> Auction </span> Description</label>
	                        <div class="col-sm-8">
	                            <textarea name="description" class="form-control" id="editor" rows="8" required></textarea>	                        
	                        </div>
	                    </div>
			
		            <div class="form-group">
		                <label for="price" class="col-md-8 control-label"> <span class="price_text">Set Price</span> </label>
		                <div class="col-md-8">
		                    <div class="input-group">
		                        <span class="input-group-addon">USD</span>
		                        <input type="text" placeholder="10000" class="form-control" name="price" id="price" value="" required>
		                    </div>
		             </div>

		            <label for="title" class="col-sm-8 control-label">Deadline</label>
		            <div class="col-sm-8">
		                <input type="date" class="form-control" name="deadline" required>
		            </div>
				
				
				<label for="title" class="col-sm-8 control-label">Upload some Images</label>			
					<div class="form-group ">
	                        <div class="col-sm-8">
	                            <div class="col-sm-8 col-sm-offset-4">
	                                <div class="upload-images-input-wrap">
	                                    <input type="file" name="images[]" class="form-control" />
	                                    <input type="file" name="images[]" class="form-control" />
	                                </div>                               
	                            </div>                            
	                        </div>
	                    </div>	
			<div class="row">
				<div class="col-sm-12">
					<legend>Location Info</legend>
					<label for="title" class="col-sm-8 control-label">Country name</label>
			            <div class="col-sm-8">
			                <input type="text" class="form-control" name="country" required>
			            </div>
			        <label for="title" class="col-sm-8 control-label">City</label>
			            <div class="col-sm-8">
			                <input type="text" class="form-control" name="city" required>
			            </div>				
				</div>
			</div>                    

			<br>
			<div class="row">
						<div class="col-sm-12">
							<legend>Client Info</legend>
							<label for="title" class="col-sm-8 control-label">Full Name:</label>
					            <div class="col-sm-8">
					                <input type="text" class="form-control" name="client-name" required>
					            </div>
					        <label for="title" class="col-sm-8 control-label">E-mail: </label>
					            <div class="col-sm-8">
					                <input type="text" class="form-control" name="client-mail" placeholder="example-12@gmail.com" required>
				            </div>				

				            <label for="title" class="col-sm-8 control-label">Phone number: </label>
					            <div class="col-sm-8">
					                <input type="text" class="form-control" name="client-phone" required>
				            </div>				

				            <label for="title" class="col-sm-8 control-label">Address: </label>
					            <div class="col-sm-8">
					                <input type="text" class="form-control" name="client-address" required>
				            </div>				
						</div>
				</div>                    
				<br>
					<div class="col-sm-12">
	                <div class="panel panel-default" style="width: 50%;">
	                <div class="panel-heading">
	                    <h3 class="panel-title">Payment Info</h3>
	                </div>
	                <div class="panel-body">

	                    <div class="form-group ">
	                        <label for="price_plan" class="col-sm-4 control-label">Price plan</label>
	                        <div class="col-sm-8">

	                            <div class="price_input_group">
	                                <input type="radio" value="regular" name="reg" data-price="0" checked/>Cash<br/>
	                                <input type="radio" value="premium" name="price_plan" data-price="5" />Credit card 
	                                <hr />
	                            </div>
	                        </div>
	                    </div>
					</div>
		<hr>
		<div class="col-sm-12" style="padding: 10px;">
			@csrf
			<button class="btn btn-success" type="submit">Save Post</button>
			<button class="btn btn-success" type="reset">Reset</button>

		</div>

	    				</form>
					</div>

	  			</div>
			</div>
		</div>	

	</div>
</body>
@endsection

@section('js')
	<script src="vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
@endsection