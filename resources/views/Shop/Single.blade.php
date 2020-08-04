@extends('layouts.app')
@section('content')
<div class="row">
    <div class="x_panel">
        <div class="x_title">
            <h5> Preview  Slider {{ $slider->Headline }}</h5>
        </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
               <img src="{{ asset($slider->Image) }}">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1>{{ $slider->Headline }}</h1>
                    <p>
                        {{ $slider->Text }}
                    </p>
                    <p><a class="btn btn-lg btn-primary" href="{{ url($slider->Link) }}" role="button">{{ $slider->LinkText }}</a></p>
                  </div>
                </div>
              </div>
            </div>            
          </div>
    </div>
</div>
@endsection