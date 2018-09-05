@extends('layouts.master')

@section('content') 
    
<div style="text-align:center;">
    <h2>Welcome {{ $name }}</h2>
    <h3>I'm {{ $age }} years old.</h3>
</div>

@endsection
