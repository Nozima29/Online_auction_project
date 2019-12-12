@extends('layouts.admin')
@section('content')
<h1>Admin page</h1>
<div class="jumbotron jumbotron-fluid">
	<div class="container">
	<div class="row">
		<div class="col-md-12 col-lg-12">
	<h2>News</h2>
		<div class="pannel">
<form method="post">
<table class="table table-dark table-striped ">
    <thead>
      <tr>
        <th>Title</th>
        <th>Add news</th>
        <th>Images</th>
        <th>Date</th>
        <th>Submit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @for($i=0;$i<36;$i++)				
			<tr>
	 <td><input type="text" class="form-control" placeholder="Title" name="text2"></td>
	  <td>
	  <div class="input-group"><textarea class="form-control" aria-label="text"></textarea></div>
	  </td>
		<td>
<form  method="post" enctype="multipart/form-data">
<input type="file" name="fileToUpload" id="fileToUpload">
</form>		</td>
			<td><form class="form-inline">
				<input type="Date" class="form-control">
				<input class="btn btn-primary" type="reset" value="Reset" style="margin-left:5px;"></form></td>
			<td><button type="submit" value="Upload Image" name="submit" class="btn btn-success" >Submit</button></td>
			<td><button type="button" class="btn btn-danger" value="Delete">Delete</button></td>
      </tr>
		@endfor  
    </tbody>
  </table>
</form>
            </div>
	</div>
</div>
</div>	

@endsection
