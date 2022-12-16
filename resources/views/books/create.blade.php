@extends('layouts.app')
@section('content')
<div class="row ">
    <div class="col-lg-12">
        <div class="row justify-content-center">
            <h2>New Book</h2>
        </div>
    </div>
</div>
<div class="row justify-content-center">
<form action="{{ route('books.store') }}" method="POST">
    @csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Book Name:</label>
            <input type="text" class="form-control" placeholder="Book Name" name="name" required>
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Category:</label>
            <input type="text" class="form-control" placeholder="Category" name="category" required>
            @if ($errors->has('category'))
                <span class="text-danger">{{ $errors->first('category') }}</span>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Author:</label>
            <input type="text" class="form-control" placeholder="author" name="author" required>
            @if ($errors->has('author'))
                <span class="text-danger">{{ $errors->first('author') }}</span>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
</div>

@endsection