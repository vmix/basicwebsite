@extends('layouts.app')

@section('content')
    <h1>About</h1>
@endsection

@section('sidebar')
    @parent
    <div class="well">
        <h2>About Sidebar</h2>
        <p>This is contect of About Page Sidebar</p>
    </div>
@endsection