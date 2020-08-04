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
            <h3 class="text-center">Add A shop Slider</h3>
        </div>
        <div class="row">
            <form method="post" action="{{ route('shops.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6 @error('SliderImage') bad @enderror">
                    <div class="form-group">
                        <label for="label-control" for="SliderImage">
                            <i class="fa fa-image fa-spin"></i>
                            Slider Image
                        </label>
                        <input type="file" name="SliderImage" id="" class="form-control">
                        @error('SliderImage') 
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- end col-sm-6 --}}
                <div class="col-sm-6 @error('Headline') bad @enderror">
                  <div class="form-group">
                    <label class="label-control" for="Headline">
                        <i class="fa fa-header"></i>
                        Headline
                    </label>
                    <input type="text" name="Headline" id="" class="form-control">
                    @error('Headline') 
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                  </div>
                </div>
                {{-- End Col-sm-6 --}}
                <div class="col-sm-6 @error('Text') bad @enderror">
                    <div class="form-group">
                        <label class="label-control" for="SliderText">
                            <i class="fa fa-text"></i>
                            Slider Text
                        </label>
                        <input type="text" name="Text" id="" class="form-control">
                        @error('Text') 
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- End TExt col --}}
                <div class="col-sm-6 @error('LinkText') bad @enderror">
                    <div class="form-group">
                        <label for="LinkText" class="label-control">
                            <i class="fa fa-link"></i>
                        </label>
                        <input type="text" name="LinkText" id="" class="form-control" placeholder="Eg.Shop Now">
                        @error('LinkText') 
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- End Link Text --}}
                <div class="col-sm-6 @error('Link') bad @enderror">
                    <div class="form-group">
                        <label for="Link" class="label-control">
                            <i class="fa fa-external-link"></i>
                            Link
                        </label>
                        <input type="text" name="Link" id="" class="form-control">
                        @error('Link') 
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
               <div class="col-sm-6">
                <button class="btn btn-success fa fa-send" style="margin-top:25px">Submit</button>

               </div>
            </form>
        </div>
    </div>
</div>
@endsection