@extends('layouts.admin')
@section('content')
<div class="container" style="padding: 40px;">
<h1>Welcome Admin!</h1>
<div class="jumbotron">
	<h2>Here are all users</h2>
		<div class="pannel">
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($users as $user)
			<hr>
				<td>User name:{{ $user->name}}</td>
			<td><pre>
			Email: {{ $user->email }}</pre></td>
			<td><pre> 
			Created Lot at: {{ $user->created_at }}
			</pre></td>
		@endforeach
      </tr>
    </tbody>
  </table>
		</div>	
	
	</div>		
</div>
       
@endsection