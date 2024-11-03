@php
    $trackingCodes = App\Models\GoogleTracking::getActiveTrackingCodes();
@endphp

@foreach($trackingCodes as $code)
    {!! $code !!}
@endforeach
