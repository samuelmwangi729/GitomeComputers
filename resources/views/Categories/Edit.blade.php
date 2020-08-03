@extends('layouts.app')
@section('content')
<div class="row">
    <div class="x_panel">
        <div class="x_title">
            Edit Category
        </div>
        <form method="post" action="{{ route('categories.update',[$category->id]) }}">
            @csrf
            @method('PATCH')
            <div class="form-group @error('CategoryName') bad @enderror">
                <label class="label-control" for="CategoryName">
                    <i class="fa fa-tag"></i> &nbsp; CategoryName
                </label>
                <input class="form-control" type="text" name="CategoryName" placeholder="Eg. Electronics" value="{{ $category->CategoryName }}">
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
@stop