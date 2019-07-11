@extends('layouts.base')
@section('content')
    <h1>Raccourcisseur URLs</h1>
    
    <form action="" method="POST">
            {{@csrf_field()}}
        <input type="text" name="url" placeholder="Entrer Votre URL Original Ici 👉" value="{{old('url')}}">
        <br/>
            {!! $errors->first('url', '<p class="error-msg">:message</p>') !!}
        <br/>
        <input type="submit" value="Raccourcir">
    </form>
@endsection