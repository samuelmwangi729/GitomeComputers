@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="x_panel">
            <form method="post" action="{{ route('services.update',[$service->id]) }}">
                @csrf
                @method('PATCH')
                  <div class="form-group @error('Service') bad @enderror">
                      <label for="Service" class="label-control">
                          <i class="fa fa-tags"></i>&nbsp; Service
                      </label>
                      <input type="text" class="form-control" name="Service" value="{{ $service->Service }}">
                      @error('Service') 
                      <span style="color:red">
                        {{ $message }}
                      </span>
                      @enderror
                  </div>
                  <div class="container justify-content-center">
                      <button class="btn btn-success" type="submit">Update Service</button>
                  </div>
              </form>
        </div>
    </div>
</div>
@stop