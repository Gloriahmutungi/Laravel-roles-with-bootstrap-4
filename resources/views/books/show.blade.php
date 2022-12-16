@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
    <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
        </div>
        <div class="justify-content-center">
            <h2> Show Book Details</h2>
        </div>
    
    </div>
</div>


<div class="row justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $book->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Author:</strong>
            {{ $book->author }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Book Category:</strong>
            {{ $book->category }}
        </div>
    </div>
</div>
@endsection