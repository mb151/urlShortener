@extends('layouts.base')

@section('content')
    <h1><strong>Trouver Votre Raccourci d'URL ci-dessous </strong></h1>
    <a href="{{config('app.url')}}/{{$shortened}}">
        {{config('app.url')}}/{{$shortened}}
    </a>
@endsection
