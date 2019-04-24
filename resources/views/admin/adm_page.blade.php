@extends('layouts.admin')
@section('content')
<div class="container" style="padding: 40px;">
<h1>Welcome Admin!</h1>
<div class="jumbotron">
	<h2>Here are all users</h2>

		<div class="pannel">
		@foreach($users as $user)
			<hr>
			
				<p>User name:  {{ $user->name }}</p>
			<pre>
			Email: {{ $user->email }} 
			Created Lot at: {{ $user->created_at }}
			</pre>

			
			
		@endforeach
		</div>	
	
	</div>		
</div>
	
@endsection