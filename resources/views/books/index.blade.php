@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Books Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-dark" href="{{ route('books.create') }}">Create New book</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Category</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $key=>$value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email}}</td>
                <td>{{ $value->role}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('books.show',$value->id) }}">Show</a>
                    <a class="btn btn-dark" href="{{ route('books.edit',$value->id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('books.destroy', $value->id) }}">Delete</a>
                    <!-- <form action="{{ route('users.destroy', $value->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" title="Delete" type="submit">delete</button>
                    </form> -->
                </td>
            </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Category</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>




<p class="text-center text-primary"><small>codelabs</small></p>
@endsection