@extends('layouts.app')
@section('content')
<div id="sidebar" class="col-md-4">
	@include('layouts.sidebar')
</div>
<div class="container">
	<div class="row">
		<form role="form" method="post" action="{{ route('admin.announcements.update') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="inputTitle">
					Title
				</label>
				<div class="input-group Announcement">
					<span class="input-group-addon"><i class="fa fa-address-book"></i></span>
					<input type="text" class="form-control" id="inputTitle" name="inputTitle" value="{{ $announcement->title }}">
				</div>
				<label for="inputContent">
					Content
				</label>
				<div class="input-group Announcement">
					<span class="input-group-addon"><i class="fa fa-address-book"></i></span>
					<input type="text" class="form-control" id="inputContent" name="inputContent" value="{{ $announcement->title }}">
				</div>
				<input type="submit" class="submit" value="Submit">
			</div>
		</form>
	</div>
</div>
@endsection