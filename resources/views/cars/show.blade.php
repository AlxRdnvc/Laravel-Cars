@extends('layouts.master')

@section('content')

    <h2>Single Car</h2>
    <table class="table table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Producer</th>
            <th scope="col">Number of doors</th>
        </tr>
        <tr>
            <td>{{ $car->id }}</td>
            <td>{{ $car->title }}</td>
            <td>{{ $car->producer }}</td>
            <td>{{ $car->number_of_doors }}</td>
        </tr>
    </table>

@endsection('content')