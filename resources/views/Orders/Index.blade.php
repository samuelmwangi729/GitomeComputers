@extends('layouts.app')
@section('content')
<div class="row">
    <div class="x_panel">
        <div class="x_title">
            <h3>Available Orders</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-condensed table-hover table-bordered">
                <thead>
                    <tr>
                        <th>OrderId</th>
                        <th>Names</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->OrderId }}</td>
                            <td>{{ $order->FirstName }} {{ $order->LastName }}</td>
                            <td>{{ $order->Email }}</td>
                            <td>
                                @if($order->Status==0)
                                <button class="btn btn-danger btn-sm">
                                    &times; Pending ...
                                </button>
                                @else
                                <button class="btn btn-success btn-sm">
                                    &check; Processed
                                </button>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('orders.edit',[$order->id]) }}" class="fa fa-check-circle" style="color:green"></a>
                                <a href="{{ route('orders.show',[$order->id]) }}" class="fa fa-eye" style="color:blue"></a>
                                <a href="{{ route('orders.delete',[$order->id]) }}" class="fa fa-trash" style="color:red"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection