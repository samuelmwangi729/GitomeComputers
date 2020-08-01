@extends('layouts.app')
@section('content')
<div class="row">
    <div class="x_panel">
        <form class="form-horizontal" action="{{ route('contacts.update',[$contact->id]) }}" method="post">
            @csrf
            @method('PATCH')
             <div class="row">
                <div class="form-group @error('Type') bad @enderror"><br>
                    <label for="Type" class="label-control">
                        <i class="fa fa-chevron-circle-down"></i>&nbsp;
                        Contact Type
                    </label>
                    <select class="form-control" name="Type">
                        <option label="--Choose Contact Type--"></option>
                        <option @if($contact->Type=='Mobile') selected @endif  >Mobile</option>
                        <option @if($contact->Type=='Building') selected @endif >Building</option>
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
                    <input type="text" class="form-control" name="Address" value="{{ $contact->Address }}">
                    @error('Address') 
                    <span style="color:red">
                    {{ $message }}
                    </span>
                    @enderror
                </div>
             </div>
             <div class="row">
                 <button class="btn" type="submit" style="background-color:gold;color:purple">Update Address</button>
             </div>

         </form>
    </div>
</div>
@endsection