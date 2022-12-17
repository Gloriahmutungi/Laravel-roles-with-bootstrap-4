@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Users Logs</h2>
        </div>
    </div>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Ip Address</th>
                <th>Description</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userlogs as $key=>$value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->username }}</td>
                <td>{{ $value->ip_address }}</td>
                <td>{{ $value->description }}</td>
                <td>{{  $value->created_at }}</td>
            </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Ip Address</th>
                <th>Created at</th>
            </tr>
        </tfoot>
    </table>




<p class="text-center text-primary"><small>codelabs</small></p>
@endsection