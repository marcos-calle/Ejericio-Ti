@extends('layouts.app')
@section('content')

<h1>HELLO</h1>
@auth
<p>Bienvenido {{auth()->user()->name??auth()->user()->userName}} estas identificado</p>
<!-- <p><a href="/logout">Logout</a></p> -->
@endauth
@guest
@endguest

@endsection