@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row justify-content-center">
            <h2>Edit Role</h2>
        </div>
    </div>
</div>
<div class="row justify-content-center">
<form action="{{ route('roles.update',$role->id) }}" method="POST">
    @csrf
    @method('PUT')
 <input type="hidden" name="id" value="{{ $role->id }}" class="form-control">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $role->name }}" required>
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Name:</label>
          
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
</div>

@endsection


