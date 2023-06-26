@extends('layouts.main')

@section('title', 'Allsites IT - Events')

@section('content')
    <h1>Qualquer coisa</h1>

    <p>{{$nome}}</p>

    @if($nome == "Pedro")
        <p>O nome é Pedro</p>
    @endif

    @for($i = 0; $i < count($arr); $i++)
        <p>O valor na posição {{$i}} é {{ $arr[$i] }}</p>
    @endfor

@endsection