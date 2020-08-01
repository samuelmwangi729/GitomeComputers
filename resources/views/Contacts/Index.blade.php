@extends('layouts.app')
@section('content')
<div class="row">
    @if(Session::has('danger'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session::get('danger') }}
    </div>
    @endif
    @if(Session::has('success'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="col-sm-6">
     <div class="x_panel">
         <div class="x_title">
             <form class="form-horizontal" action="{{ route('contacts.store') }}" method="post">
                @csrf
                 <div class="row">
                    <div class="form-group @error('Type') bad @enderror"><br>
                        <label for="Type" class="label-control">
                            <i class="fa fa-chevron-circle-down"></i>&nbsp;
                            Contact Type
                        </label>
                        <select class="form-control" name="Type">
                            <option label="--Choose Contact Type--"></option>
                            <option>Mobile</option>
                            <option>Building</option>
                            <option>Email</option>
                        </select>
                        @error('Type')
                        <span style="color:red">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group @error('Address') bad @enderror">
                        <label class="label-control" for="Address">
                            <i class="fa fa-tag"></i> &nbsp; Address
                        </label>
                        <input type="text" class="form-control" name="Address" placeholder="Eg. Room 3 G Street or 0705933053">
                        @error('Address') 
                        <span style="color:red">
                        {{ $message }}
                        </span>
                        @enderror
                    </div>
                 </div>
                 <div class="row">
                     <button class="btn" type="submit" style="background-color:gold;color:purple">Add Address</button>
                 </div>

             </form>
         </div>
     </div>
    </div>
    <div class="col-sm-6">
    <div class="x_panel">
        <table class="table table-condensed table-hover table-striped">
            <thead>
                <tr>
                    <td>Service Type</td>
                    <td>Address</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as  $contact)
                  <tr>
                      <td>{{ $contact->Type }}</td>
                      <td>{{ $contact->Address }}</td>
                      <td>
                          <a href="{{ route('contacts.edit',[$contact->id]) }}" class="fa fa-edit" style="color:blue;font-size:18px"></a>
                          <button class="fa fa-trash" style="color:red;font-size:18px" onclick="document.getElementById('delete').submit()"></button>
                          <form action="{{ route('contacts.destroy',[$contact->id]) }}" id="delete" method="post">
                              @csrf
                              @method('DELETE')
                          </form>
                      </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection