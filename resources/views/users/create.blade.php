@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row justify-content-center">
            <h2>New User</h2>
        </div>
    </div>
</div>
<div class="row justify-content-center">
<form action="{{ route('users.store') }}" method="POST">
    @csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Name" name="name" required>
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" placeholder="Email Address" name="email" required>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Mobile:</label>
            <input type="text" class="form-control" placeholder="Mobile" name="mobile" required>
            @if ($errors->has('mobile'))
                <span class="text-danger">{{ $errors->first('mobile') }}</span>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            @if ($errors->has('confirm-password'))
                <span class="text-danger">{{ $errors->first('confirm-password') }}</span>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" class="form-control" placeholder="Name" name="confirm-password" required>
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <select class="form-control" name="role" id="role">
        <option value="" disabled selected>Select role</option>
        @foreach($roles as $role)
            <option value="{{ $role->id }}">
            {{ $role->name }}
            </option>
        @endforeach  
        </select>
        @if ($errors->has('role'))
        <span class="text-danger">{{ $errors->first('role') }}</span>
        @endif
        <label>Role</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
</div>

@endsection