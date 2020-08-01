@extends('layouts.app')
@section('content')
<div class="x_content">
    <h3  class="text-center">Update Users Details</h3>
    @if(Session::has('success'))
<div class="alert alert-success">
  <strong>Success</strong>{{ Session::get('success') }}
</div>
@endif
@if(Session::has('danger'))
<div class="alert alert-success">
  <strong>Success</strong>{{ Session::get('danger') }}
</div>
@endif
    {{-- this is where the form details will fo  --}}
    <form class="form-horizontal form-label-left" method="post" action="{{ route('users.update',[$user->id]) }}">
        @method('patch')
        @include('Users.form')
        <div class="containe text-center">
            <button class="btn" style="color:purple;background-color:gold">Update User</button>
        </div>
    </form>
    <button class="fa fa-backward btn btn-primary" onclick="window.open('/users','_parent')"> &nbsp;Back</button>
</div>
@stop