@extends('layouts.app')

@section('content')
    {{ __("Scanned points") }}
    <div>
        <ul>
        @foreach($scannedPoints as $scannedPoint)
            <li>punt {{$scannedPoint->id}}</li>
            <li>is om {{ $scannedPoint->scanned_time}} gescanned</li>
                @foreach($scanRound as $round)
                    @if($scannedPoint->scanround_id == $round->id)
                        <li>op de datum: {{ $round->scanned_date }}</li>
                    @endif
                @endforeach
                @foreach($scanPoint as $Point)
                    @if($scannedPoint->scanpoint_id == $Point->id)
                        <li>op de datum: {{ $Point->barcode }}</li>
                    @endif
                @endforeach
                </br>
        @endforeach
        </ul>
    </div>
@endsection
