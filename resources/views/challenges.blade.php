@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@foreach($challenges as $challenge)
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4 class="panel-title">
						{{ $challenge->title }}
					</h4>
				</div>
				<div class="panel-body">
					<p>Category: {{ $challenge->category }}</p>
					<p>Score: {{ $challenge->score }}</p>
					<p>Description: {{ $challenge->content }}</p>
					<input class="btn btn-default" value="Solve" type="submit">
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection