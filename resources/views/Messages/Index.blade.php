@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Received Messages</h2>
              <div class="clearfix"></div>
              @if(Session::has('success'))
              <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{ Session::get('success') }}
              </div>
              @endif
              @if(Session::has('error'))
              <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{ Session::get('error') }}
              </div>
              @endif
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-sm-3 mail_list_column">
                  <a href="{{ route('messages.create') }}"  class="btn btn-sm btn-success btn-block fa fa-plus-circle" type="button">&nbsp;Compose</a>
                  @foreach($messages as $message)
                  <a href="{{ route('messages.show',[$message->id]) }}">
                    <div class="mail_list">
                      <div class="left">
                        <i class="fa fa-circle"></i><i class="fa fa-clock-o"></i>
                      </div>
                      <div class="right">
                        <h6>{{ $message->From }} <small>{{ ($message->created_at)->toFormattedDateString() }}</small></h6>
                        <p>{{ $message->Subject }}</p>
                      </div>
                    </div>
                  </a>
                  @endforeach
                </div>
                <!-- /MAIL LIST -->

                <!-- CONTENT MAIL -->
                <div class="col-sm-9 mail_view">
                  <div class="inbox-body">
                    <div class="mail_heading row">
                      <div class="col-md-8">
                        <div class="btn-group">
                          <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash" onclick="document.getElementById('delete').submit()"><i class="fa fa-trash-o"></i></button>
                        </div>
                      </div>
                      @if($last)
                      <form method="post" action="{{ route('messages.destroy',[$last->Slug]) }}" id="delete">
                        @method('delete')
                        @csrf
                      </form>
                      <div class="col-md-4 text-right">
                        <p class="date">Received on : {{ ($last->created_at)->toFormattedDateString() }}</p>
                      </div>
                      <div class="col-md-12">
                        <h4 class="text-center">{{$last->Subject}}</h4>
                      </div>
                    </div>
                    <div class="sender-info">
                      <div class="row">
                        <div class="col-md-12">
                          <strong>{{ $last->From }}</strong>
                          <span></span> to
                          <strong>{{ Auth::user()->role }}</strong>
                          <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="view-mail">
                      <p>
                        {!!  $last->Message !!}
                      </p>
                    </div>
                      @else
                      <div class="row text-right">
                        <div class="alert alert-danger">
                          <strong>You have not received Any Messages</strong>
                        </div>
                      </div>
                      @endif
                    <div class="btn-group">
                      <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"  onclick="document.getElementById('delete').submit()"><i class="fa fa-trash-o"></i></button>
                    </div>
                  </div>

                </div>
                <!-- /CONTENT MAIL -->
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection