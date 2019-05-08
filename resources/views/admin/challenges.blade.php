@extends('layouts.app')

@section('content')
<div id="sidebar" class="col-md-4">
	@include('layouts.sidebar')
</div>
<div class="container">
	<div class="row">
		<a class="btn btn-primary" href="{{ route('adminchallengesnew') }}" role="button" style="float: right;">New Challenge</a> 
		<table class="table table-hover">
		  <thead>
		    <tr>
			  	<th scope="col">#</th>
			  	<th scope="col">Category</th>
			  	<th scope="col">Score</th>
			  	<th scope="col">Title</th>
				<th scope="col">Flag</th>
			  	<th scope="col">Content</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($challenges as $challenge)
		  	<tr>
		  		<th scope="row">{{ $challenge->id }}</th>
		  		<td>{{ $challenge->category }}</td>
		  		<td>{{ $challenge->score }}</td>
		  		<td>{{ $challenge->title }}</td>
		  		<td>{{ $challenge->flag }}</td>
		  		<td>{{ $challenge->content }}</td>
		  	</tr>
		  	@endforeach
		  </tbody>
		</table>
	</div>
</div>
@endsection
