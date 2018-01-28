@extends('plantilla')

@section('contenido')
    <h1>Saludos a {{ $nombre }}</h1>
    <a href= {{route('nombre')}} >Enlace</a>
    <a href= {{route('saludo', 'Iván')}} >Saludo</a>

    @forelse($consolas as $consola)
        <p>{{$consola}}</p>
    @empty
        <p>No hay consolas</p>
    @endforelse

    @if(count($consolas) > 0)
        <p>{{count($consolas)}}</p>
    @else
        <p>No hay consolas</p>
    @endif
@stop