@extends('progenitor')

@section('content')
    <h1 class="alert alert-success">Polymorphism</h1>
    {{ $animal_sound }}
    <br>
    {{ $dog_sound }}
    <br>
    {{ $cat_sound }}
@endsection
