@extends('layouts.app')
@section('content')
<div class="x_section">
    @if(Session::has('success'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session::get('success') }}
    </div>
    @endif
    @if(Session::has('danger'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session::get('danger') }}
    </div>
    @endif
    <div class="row">
        <div class="col-sm-6">
          <div class="x_panel">
              <div class="x_title">
                 <h4> Add Service</h4>
              </div>
              <form method="post" action="{{ route('services.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group @error('ServiceImage') bad @enderror">
                    <label class="label-control" for="label-control">
                        <i class="fa fa-image"></i>
                        Service Banner
                    </label>
                    <input type="file" name="ServiceImage" class="form-control">
                    @error('ServiceImage') 
                      <span style="color:red">
                        {{ $message }}
                      </span>
                      @enderror
                </div>
                  <div class="form-group @error('Service') bad @enderror">
                      <label for="Service" class="label-control">
                          <i class="fa fa-tags"></i>&nbsp; Service Type
                      </label>
                      <input type="text" class="form-control" name="Service" placeholder="Service Name: Eg. OS Installation">
                      @error('Service') 
                      <span style="color:red">
                        {{ $message }}
                      </span>
                      @enderror
                  </div>
                  <div class="container justify-content-center">
                      <button class="btn btn-success" type="submit">Add Service</button>
                  </div>
              </form>
          </div>
        </div>
        <div class="col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                   <h4 class="text-center">Available Services</h4>
                </div>
                <table class="table table-condensed table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Banner</th>
                            <th>Service</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service )
                        <tr>
                            <td><img src="{{ $service->ServiceImage }}" width="40px"></td>
                            <td>{{ $service->Service }}</td>
                            <td><a href="{{ route('services.edit',[$service->id]) }}" class="fa fa-edit" style="font-size:18px;color:blue"></a>&nbsp;<a href="#" onclick="document.getElementById('delete').submit()" class="fa fa-trash text-danger" style="font-size:18px;color:red"></a>
                            <form method="post" action="{{ route('services.destroy',[$service->id]) }}" id="delete">
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
</div>
@stop