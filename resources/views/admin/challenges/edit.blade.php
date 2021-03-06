@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form role="form" method="post" action="{{ route('admin.challenges.update', $challenge->id) }}">
                {{ method_field('post') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputCategory">
                        Category
                    </label>
                    <div class="input-group Category">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select class="form-control" id="inputCategory" name="inputCategory">
                        @foreach($categories as $category)
                            <option value="{{ $challenge_category->category_id }}">
                                {{ $category->category }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputScore">
                        Score
                    </label>
                    <div class="input-group Score">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-screenshot"></i></span><input type="text" class="form-control" id="inputScore" name="inputScore" value="{{ $challenge->score }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTitle">
                        Title
                    </label>
                    <div class="input-group Title">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span><input type="text" class="form-control" id="inputTitle" name="inputTitle" value="{{ $challenge->title }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTitle">
                        Flag
                    </label>
                    <div class="input-group Flag">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span><input type="text" class="form-control" id="inputFlag" name="inputFlag" value="{{ $challenge->flag }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTitle">
                        Content
                    </label>
                    <div class="input-group Content">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span><input type="text" class="form-control" id="inputContent" name="inputContent" value="{{ $challenge->content }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFile">
                        File
                    </label>
                    <div class="input-group Content">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-floppy-disk"></i></span>
                        <input type="file" class="form-control" id="inputFile" name="inputFile" value="{{ $challenge->attachments->filename }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFile">
                        URL
                    </label>
                    <div class="input-group Content">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                        <input type="text" class="form-control" id="inputURL" name="inputURL" value="{{ $challenge->attachments->url }}">
                    </div>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection