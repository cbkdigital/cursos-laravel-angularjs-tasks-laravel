@extends('layouts.template')



@section('menu')
	<a class="item" href="/"> Inicio <i class="home icon"></i></a>
	@foreach($conteudos as $conteudo)
		@if($conteudo->url_amigavel != 'home')
			<a class="item" href="{{$conteudo->url_amigavel}}"> {{$conteudo->titulo}}<i class="plus icon"></i></a>
		@endif
	@endforeach

@stop

@section('video')

	<div>
		<i class="inbox icon"></i> {{$selecionado->titulo}}
	</div>

	@if($selecionado->url)
		<div>
			<object width="480" height="320">
				<param name="movie" value="https://www.youtube.com/v/{{$selecionado->url}}?version=3"></param>
			  	<param name="allowFullScreen" value="true"></param>
			  	<param name="allowScriptAccess" value="always"></param>
			  	<embed src="https://www.youtube.com/v/{{$selecionado->url}}?version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="480" height="320"></embed>
			</object>
		</div>
	@endif

@stop



@section('descricao')

	<h1 class="ui header">{{$selecionado->sub_titulo}}</h1>
	<p> {{$selecionado->descricao}} </p>

@stop