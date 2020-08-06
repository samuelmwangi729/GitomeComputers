@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="x_panel">
            <div class="x_title">
                <h4>Update Your Password</h4>
            </div>
            <form method="post" action="{{ route('password.update') }}">
                @csrf
                <div class="from-group @error('password') bad @enderror">
                    <label class="label-control" for="password">
                        <i class="fa fa-lock"></i>
                        Password
                    </label>
                    <input type="password" class="form-control" name="password">
                    @error('password') 
                    <span style="color:red">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="from-group @error('password_confirmation') bad @enderror">
                    <label class="label-control" for="password">
                        <i class="fa fa-lock"></i>
                        Password Confirmation
                    </label>
                    <input type="password" class="form-control" name="password_confirmation">
                    @error('password_confirmation') 
                    <span style="color:red">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="container" style="margin-top:20px">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection