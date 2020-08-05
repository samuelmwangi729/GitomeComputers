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
                        <a href="#" class="fa fa-eye" style="color:blue"></a>
                        <a href="#" class="fa fa-check" style="color:green"></a>
                        <a href="#" class="fa fa-trash" style="color:red"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop