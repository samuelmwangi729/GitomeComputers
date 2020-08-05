@extends('layouts.app')
@section('content')
<div class="row">
    <div class="x_panel">
        <div class="x_title">
            <h6>Single Quote</h6>
        </div>
        <span>Name: {{ $quote->Names }}</span><br>
        <span>Email: {{ $quote->Email }}</span><br>
        <span>Phone: {{ $quote->Phone }}</span><br>
        <span>Message: {{ $quote->Message }}</span><br>
        <span>Sent On: {{ ($quote->created_at)->toFormattedDateString() }}</span><br><br>
        <button class="btn fa fa-backward btn-primary" onclick="window.open('/quotes','_parent')">Back</button>
    </div>
</div>
@endsection