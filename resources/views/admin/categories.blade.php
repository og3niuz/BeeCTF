@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="max-width: 90%">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <a class="btn btn-primary btn-sm pull-left" href="{{ route('admin.categories.create') }}" role="button">New Category</a> 
        <table class="table table-hover">
          <thead>
            <tr>
                  <th scope="col">#</th>
                  <th scope="col">Category</th>
                  <th scope="col">Description</th>
                  <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
              @foreach($categories as $category)
              <tr>
                  <th scope="row">{{ $category->id }}</th>
                  <td>{{ $category->category }}</td>
                  <td>{{ $category->description }}</td>
                  <td>
                      <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-info">Edit</a>
                      <a href="{{ route('admin.categories.delete', $category->id) }}" class="btn btn-danger">Delete</a>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>

@endsection
