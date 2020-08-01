@extends('layouts.app')
@section('content')
<div class="col-sm-12">
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
    <div class="x_panel">
      <div class="x_title">
        <h2 class="text-center">Send Message</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left" method="post" action="{{ route('messages.store') }}">
            @csrf
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Message Subject</label>
            <div class="col-md-9 col-sm-9 col-xs-9 @error('subject') bad  @enderror">
              <input type="text" class="form-control" name="subject">
              <span class="fa fa-tag form-control-feedback right" aria-hidden="true"></span>
              @error('subject')
            <span class="bad" style="color:red">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
            
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Recipient</label>
            <div class="col-md-9 col-sm-9 col-xs-9 @error('role') bad  @enderror">
              <select class="form-control" name="role">
                  <option label="----Choose Receiver----"></option>
                  @foreach ($users as $user)
                      <option value="{{ $user->role }}">{{ $user->role }}</option>
                  @endforeach
              </select>
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              @error('role')
              <span class="bad" style="color:red">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Message</label>
            <div class="col-md-9 col-sm-9 col-xs-9 @error('message') bad  @enderror">
           <textarea id="summernote" name="message">

           </textarea>
              @error('message')
              <span class="bad" style="color:red">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          
          </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="pull-right">
              <button type="submit" class="btn btn-primary fa fa-send">&nbsp; Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection