@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Roles Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-dark" href="{{ route('roles.create') }}">Create New Role</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table id="example" class="table table-striped table-bordered justify-content-center" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Permissions</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $key=>$value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->name }}</td>
                <td>test</td>
                <td style="display: flex">
                <a href="{{ route('roles.edit',$value->id) }}" title="edit" class="btn btn-primary m-2">
                    <i class="fa fa-eye"></i>
                </a>
                    <a href="{{ route('roles.edit',$value->id) }}" title="edit" class="btn btn-primary m-2">
                         <i class="fa fa-edit"></i>
                    </a>
                    <form method="POST" action="{{ route('roles.destroy',  $value->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-2" title="delete" type="submit">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Permissions</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
<p class="text-center text-primary"><small>codelabs</small></p>
@endsection