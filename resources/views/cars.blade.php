@extends('layouts.app')


@section('title','Cars')

@section('content')
<ul>
    @foreach($cars as $car)
    <li><a href="/car/{{$car->id}}">{{$car->producer}}</a></li>
    @endforeach
</ul>
@endsection
    
