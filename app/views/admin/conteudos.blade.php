@extends('layouts.template');

@section('video')

	<h1 class="ui header">Conteudos</h1>
	<div class="ui primary mini button">Adicionar</div>
	@foreach($conteudos as $conteudo)

		<ul>
			<li>{{$conteudo->titulo}} <div class="ui primary mini button">Editar</div></li>
		</ul>

	@endforeach

@stop