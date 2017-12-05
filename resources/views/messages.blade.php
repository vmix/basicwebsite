@extends('layouts.app')

@section('content')
    <h1>Messages</h1>
    @if(count($messages) > 0)
        <ul class="list-group">
            @foreach($messages as $message)
                <li class="list-group-item">Name: {{ $message->names }}</li>
                <li class="list-group-item">Email: {{ $message->emails }}</li>
                <li class="list-group-item">Message: {{ $message->messages }}</li>
                <br>
            @endforeach
        </ul>
    @endif
@endsection