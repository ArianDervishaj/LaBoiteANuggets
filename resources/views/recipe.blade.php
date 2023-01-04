@extends('layout')

@section('content')
<h2>{{$recipe->title}}</h2>
<p>{{$recipe->instructions}}</p>

@endsection