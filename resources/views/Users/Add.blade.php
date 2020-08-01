@extends('layouts.app')
@section('content')
<!--Start Row-->
<div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success" style="margin-top:70px">
        <a  href="#" class="close" data-dismiss="alert">&times;</a>
       <span><strong>Success</strong>  {{ Session::get('success') }}</span>
    </div>
@endif
@if(Session::has('danger'))
<div class="alert alert-danger" style="margin-top:70px">
    <a  href="#" class="close" data-dismiss="alert">&times;</a>
   <span><strong>Error</strong>  {{ Session::get('danger') }}</span>
</div>
@endif
    <div class="col-sm-12">
        <div class="x_panel">
          <div class="x_title">
            <h2 class="text-center">Add Users</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" method="post" action="{{ route('users.store') }}">
                @csrf
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">User Name</label>
                <div class="col-md-9 col-sm-9 col-xs-9 @error('name') bad  @enderror">
                  <input type="text" class="form-control" placeholder="Eg. Samuel Mwangi " name="name">
                  <span class="fa fa-tag form-control-feedback right" aria-hidden="true"></span>
                  @error('name')
                <span class="bad" style="color:red">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Email Address</label>
                <div class="col-md-9 col-sm-9 col-xs-9 @error('email') bad  @enderror">
                  <input type="text" class="form-control" placeholder="Eg. admin@admin.com " name="email">
                  <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                  @error('email')
                  <span class="bad" style="color:red">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
               
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">User Level</label>
                <div class="col-md-9 col-sm-9 col-xs-9 @error('role') bad  @enderror">
                  <select class="form-control" name="role">
                      <option label="----Choose User Level----"></option>
                      @foreach ($roles as $role)
                          <option value="{{ $role->Level }}">{{ $role->Level }}</option>
                      @endforeach
                  </select>
                  <span class="fa fa-arrow-circle-down form-control-feedback right" aria-hidden="true"></span>
                  @error('role')
                  <span class="bad" style="color:red">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Password</label>
                <div class="col-md-9 col-sm-9 col-xs-9 @error('password') bad  @enderror">
                  <input type="password" class="form-control" placeholder="Password " name="password">
                  <span class="fa fa-lock form-control-feedback right" aria-hidden="true"></span>
                  @error('password')
                  <span class="bad" style="color:red">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Confirm Password</label>
                <div class="col-md-9 col-sm-9 col-xs-9 @error('password_confirmation') bad  @enderror">
                  <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                  <span class="fa fa-lock form-control-feedback right" aria-hidden="true"></span>
                  @error('password_confirmation')
                  <span class="bad" style="color:red">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="pull-right">
                  <button type="submit" class="btn btn-primary fa fa-user-plus">&nbsp; Add User</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
<!--end row-->
@endsection