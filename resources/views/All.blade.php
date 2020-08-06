@extends('layouts.app')
@section('content')
<div class="row">
    <div class="x_panel">
        <div class="x_title">
            <h4>View Appointments</h4>
        </div>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th>Names</th>
                    <th>Email</th>
                    <th>Topic</th>
                    <th>Month</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->Names }}</td>
                    <td>{{ $appointment->Email }}</td>
                    <td>{{ $appointment->Topic }}</td>
                    <td>{{ $appointment->Month }}</td>
                    <td>
                        @if($appointment->Status==0)
                        <button class="btn btn-sm btn-danger">Pending Approval</button>
                        @else
                        <button class="btn btn-sm btn-success">Approved</button>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('appointments.show',[$appointment->id]) }}" class="fa fa-eye" style="color:blue"></a>
                        <a href="{{ route('appointments.edit',[$appointment->id]) }}" class="fa fa-check" style="color:green"></a>
                    </td>
                </tr>
                @endforeach
                <tr class="text-right">
                    <td colspan="6">
                        {{ $appointments->links() }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop