@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            @can('role-create')
            <a class="btn btn-dark" href="{{ route('users.create') }}">New User</a>
            @endcan
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
                <th>Email</th>
                <th>Roles</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key=>$value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email}}</td>
                <td>@if(!empty($value->getRoleNames()))
                        @foreach($value->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td style="display: flex">
                    <a href="{{ route('users.show',$value->id) }}" title="show" class="btn btn-primary m-2">
                        <i class="fa fa-eye"></i>
                    </a>

                    @can('role-edit')
                    <a href="{{ route('users.edit',$value->id) }}" title="edit" class="btn btn-primary m-2">
                    <i class="fa fa-edit"></i>
                    </a>
                    @endcan
                    @can('role-delete')
                    <form method="POST" action="{{ route('users.destroy',  $value->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-2" title="delete" type="submit">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    @endcan
                    
                </td>
            </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>




<p class="text-center text-primary"><small>codelabs</small></p>
@endsection