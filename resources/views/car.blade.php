@extends('layouts.app')


@section('title')
    
@section('content')
    <h3>This is : {{$car->producer}}</h3>
    <h3>{{$car->producer}} has {{$car->number_of_doors}} doors</h3>
@endsection