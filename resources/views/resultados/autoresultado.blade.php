@extends('welcome')
@section('contenido')
    
@foreach ($result as $item)
<h1>{{$item}}</h1>
@endforeach

@endsection