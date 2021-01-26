@extends('layout.site')

@section('titulo','Contatos')

@section('conteudo')
<h3>Essa é a index...</h3>

@foreach($contatos as $contato)

<p> {{ $contato->nome }} </p>
<p> {{ $contato->celular }} </p>

@endforeach

@endsection