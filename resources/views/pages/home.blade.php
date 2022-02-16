@extends('layouts.main-layout')

@section('content')

<a class="btn" href="{{route('postcard.create')}}">Crea il tuo post</a>

<postcards-comp></postcards-comp>

@endsection