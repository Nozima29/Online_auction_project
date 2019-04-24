@extends('layouts.main')
@section('content')
	<br><br><br>
	
	@if(count($news)>0)
		<h1>News</h1>
			@foreach($news as $new)
				<div class="well">
					<h3>
						{{ $new->place}}
					</h3>
					<p>{{ $new->news}}</p>
					<small>Date {{ $new->created_at}}</small>						
				</div>
			@endforeach	
			{{ $news->links() }}
		@else
			<h1>No news found yet!</h1>
	@endif
@endsection


