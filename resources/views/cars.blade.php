@extends('layouts.app')


@section('title','Cars');

@section('content')
<ul>
    @foreach($cars as $car)
    <li>{{$car->producer}}</li>
    @endforeach
</ul>
@endsection
    
