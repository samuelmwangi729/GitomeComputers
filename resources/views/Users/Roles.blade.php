@extends('layouts.app')
@section('content')
<div class="container text-center">
  <!-- form input -->
    @if(Session::has('success'))
        <div class="alert alert-success" style="margin-top:70px">
            <a  href="#" class="close" data-dismiss="alert">&times;</a>
           <span><strong>Success</strong>  {{ Session::get('success') }}</span>
        </div>
    @endif
    @if(Session::has('danger'))
    <div class="alert alert-danger" style="margin-top:70px">
        <a  href="#" class="close" data-dismiss="alert">&times;</a>
       <span><strong>Ok..</strong>  {{ Session::get('danger') }}</span>
    </div>
@endif
  <div class="col-sm-6">
    <div class="x_panel">
      <div class="x_title">
        <h2 style="text-center">Add User Roles</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left" method="post" action="{{ route('roles.post') }}">
            @csrf
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">User Level</label>
            <div class="col-md-9 col-sm-9 col-xs-9 @error('Level') bad  @enderror">
              <input type="text" class="form-control" placeholder="Eg. Admin" name="Level">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
            @error('Level')
            <span class="bad" style="color:red">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="pull-right">
              <button type="submit" class="btn btn-success">Add Role</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--End form-->
  <!--Start the roles table-->
  <div class="col-sm-6 col-sm-12">
    <div class="x_panel">
       <div class="x_title">
        User Roles
       </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
            <table class="table table-condensed table-striped table-hover">
                <thead class="text-center">
                    <th class="text-center">Role</th>
                    <th class="text-center">Action</th>
                </thead>
                <tbody>
                    @foreach ($roles as  $role)
                    <tr>
                        <td>
                          {{$role->Level}}
                        </td>
                        <td>
                           <a href="#" class="fa fa-pencil text-primary" style="color:blue"></a>
                           <a href="{{ route('role.delete',[$role->id]) }}" class="fa fa-trash" style="color:red"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
    </div>
  </div>
  <!--End roles Tables-->
</div>
@endsection