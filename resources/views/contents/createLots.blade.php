@extends('layouts.main')
@section('content')
<div class="container" style="padding: 40px;">
	<h1>Welcome </h1>
	<h2>Create New Lots</h2>
	<div class="form-group">
		<form action="/created" method="post">
			
			<label for="sel1">Categories:</label>
				<input type="text" class="form-control">		
			<label for="title">Lot Name</label>
				<input type="text" class="form-control">
			<label for="title">Lot Price</label>
				<input type="text" class="form-control">
			<label for="title">Launched Date</label>
				<input type="Date" class="form-control">
			<hr>
				<input class="btn btn-primary" type="submit" value="Create">
				<input class="btn btn-primary" type="reset" value="Reset">

		</form>	
	</div>		

</div>
@endsection