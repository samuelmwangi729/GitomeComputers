@csrf
<div class="form-group row">
  <label class="control-label col-md-3 col-sm-3 col-xs-3">User Name</label>
  <div class="col-md-9 col-sm-9 col-xs-9 @error('name') bad  @enderror">
    <input type="text" class="form-control" placeholder="Eg. Samuel Mwangi " name="name" value="{{ $user->name }}">
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
    <input type="text" class="form-control" placeholder="Eg. admin@admin.com " name="email" value="{{ $user->email }}" readonly>
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
            <option value="{{ $role->Level }}" @if($user->role==$role->Level) selected  @endif>{{ $role->Level }}</option>
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