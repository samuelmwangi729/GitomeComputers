@extends('layouts.app')
@section('content')
<div class="row">
    <div class="x_panel">
        <div class="x_title">
            <h3 class="text-center">Single Quote</h3>
        </div>
        <span>Name: {{ $appointment->Names }}</span><br>
        <span>Email: {{ $appointment->Email }}</span><br>
        <span>Phone: {{ $appointment->Phone }}</span><br>
        <span>Topic: {{ $appointment->Topic }}</span><br>
        <span>Message: {{ $appointment->Message }}</span><br>
        <span>Sent On: {{ ($appointment->created_at)->toFormattedDateString() }}</span><br><br>
        <span>Date Booked: {{ ($appointment->Day) }} {{ $appointment->Month }}   {{ $appointment->Time }}</span><br><br>
        @if($appointment->Status==0)
            <button class="btn btn-warning">Pending Approval</button> <a href="{{ route('appointments.edit',[$appointment->id]) }}">Approve</a>
        @else
        <button class="btn btn-success">Approved</button>
        @endif
        <br>
        <button class="btn fa fa-backward btn-primary" onclick="window.open('{{ route('appointments.all') }}','_parent')">Back</button>
    </div>
</div>
@endsection