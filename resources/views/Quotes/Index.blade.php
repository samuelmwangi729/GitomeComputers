@extends('layouts.app')
@section('content')
<div class="row">
    <div class="x_panel">
        <div class="x_title">
          <h6 class="text-center">View Sent Quotes</h6>
          @if(Session::has('danger'))
          <div class="alert alert-danger">
              <a href="#" class="close" data-dismiss="alert">
                  &timesbar;
              </a>
              {{ Session::get('danger') }}
          </div>
          @endif
          @if(Session::has('success'))
          <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert">
                  &timesbar;
              </a>
              {{ Session::get('success') }}
          </div>
          @endif
        </div>
        <table class="table table-condensed table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>Names</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quotes  as $quote)
                <tr>
                    <td>{{ $quote->Names }}</td>
                    <td>{{ $quote->Email }}</td>
                    <td>{{ $quote->Phone }}</td>
                    <td>
                        <a href="{{ route('quotes.show',[$quote->id]) }}" class="fa fa-eye" style="font-size:18px;color:blue"></a>
                    <button class="btn fa fa-trash" style="color:red" onclick="document.getElementById('delete').submit()"></button>
                    <form method="post" action="{{ route('quotes.destroy',[$quote->id]) }}" id="delete">
                        @csrf
                        @method('DELETE')
                    </form>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4" class="text-right">
                        {{ $quotes->links() }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop