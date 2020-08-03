@extends('layouts.app')
@section('content')
<div class="row">
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
<div class="col-sm-6">
    <div class="x_panel">
        <div class="x_title">
            <h5>Add Products Brands</h5>
        </div>
        <div class="form">
            <form method="post" action="{{ route('brands.store') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group @error('BrandImage') bad @enderror">
                    <label class="label-control" for="BrandImage">
                        <i class="fa fa-picture-o"></i>&nbsp; Brand Image
                    </label>
                    <input type="file" name="BrandImage"  class="form-control">
                    @error('BrandImage') 
                    <span style="color:red">
                        {{ $message }}
                    </span>
                     @enderror
                </div>
                <div class="form-group @error('BrandName') bad @enderror">
                    <label for="BrandName" class="label-control">
                        <i class="fa fa-tags"></i>&nbsp; Brand Name
                    </label>
                    <input type="text" name="BrandName"  class="form-control" placeholder="Eg. HP">
                    @error('BrandName') 
                    <span style="color:red">
                        {{ $message }}
                    </span>
                     @enderror
                </div>
                <div class="container">
                    <button class="btn  btn-success" type="submit">
                        <i class="fa fa-send"></i>
                        Add Brand</button>
                </div>
            </form>
        </div>
    </div>
    {{-- End form --}}
</div>
<div class="col-sm-6">
    <div class="x_panel">
        <div class="x_title">
            <h5 class="text-center">Available Products Brands</h5>
        </div>
        <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                   <th> Brand Image</th>
                   <th> Brand Name</th>
                   <th> Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $brand)
                <tr>
                    <td class="text-center">
                        <img src="{{ asset($brand->BrandImage ) }}" style="height:30px;width:30px;border-radius:30px">
                    </td>
                    <td>{{ $brand->BrandName }}</td>
                    <td>
                        <a href="{{ route('brands.edit',[$brand->id]) }}" class="fa fa-edit" style="font-size:18px"></a>
                        <button class="btn fa fa-trash btn-sm" style="color:Red" onclick="document.getElementById('delete').submit()"></button>
                        <form method="post" action="{{ route('brands.destroy',[$brand->id]) }}" id="delete">
                        @csrf
                        @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3" class="text-right">
                        {{ $brands->links() }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
{{-- End Brands --}}
</div>
@endsection