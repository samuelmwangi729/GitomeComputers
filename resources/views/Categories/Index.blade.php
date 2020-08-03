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
    <div class="col">
        <div class="x_panel">
            <div class="x_title">
             <h5>   Add Product Category</h5>
            </div>
            <form method="post" action="{{ route('categories.store') }}">
                @csrf
                <div class="form-group @error('CategoryName') bad @enderror">
                    <label class="label-control" for="CategoryName">
                        <i class="fa fa-tag"></i> &nbsp; CategoryName
                    </label>
                    <input class="form-control" type="text" name="CategoryName" placeholder="Eg. Electronics">
                    @error('CategoryName')
                    <span style="color:red">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Add Category</button>
            </form>
        </div>
    </div>
    <div class="col">
        <div class="x_panel">
            <div class="x_title">
                <h5>Available Categories</h5>
            </div>
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                    <tr>
                        <th>CategoryName</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->CategoryName }}</td>
                        <td>
                            <a href="{{ route('categories.edit',[$category->id]) }}" class="fa fa-edit" style="color:blue;font-size:18px"></a>&nbsp;&nbsp;
                                <i class="fa fa-trash" style="color:red;font-size:18px" onclick="document.getElementById('delete').submit()"></i>
                            <form method="post" action="{{ route('categories.destroy',[$category->id]) }}" id="delete">
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
@stop