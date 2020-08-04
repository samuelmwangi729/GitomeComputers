@extends('layouts.app')
@section('content')
<div class="row">
    @if(Session::has('success'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif
    @if(Session::has('danger'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>{{ Session::get('danger') }}</strong>
    </div>
    @endif
    <div class="x_panel">
        <div class="x_title">
            <h3 class="text-center">View Shop Sliders</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-condensed table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Heading</th>
                        <th>LinkText</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sliders as $slider)
                    <tr>
                        <td><img src="{{  asset($slider->Image) }}" width="80px"></td>
                        <td>{{ $slider->Headline }}</td>
                        <td>{{ $slider->LinkText }}</td>
                        <td>{{ $slider->Link }}</td>
                        <td>
                            <a href="{{ route('shops.edit',[$slider->id]) }}" class="fa fa-edit" style="color:blue"></a>&nbsp;
                            <a href="{{route('shops.show',[$slider->id])  }}" class="fa fa-eye" style="color:green"></a>&nbsp;
                            <a href="{{ route('shops.delete',[$slider->id]) }}" class="fa fa-trash" style="color:red"></a>&nbsp;
                        </td>
                    </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection