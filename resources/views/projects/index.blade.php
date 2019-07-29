@extends('layout')
@section('title','Portfolio')
@section('content')
	<h1>Portfolio</h1>
	<a href="{{ route('projects.create') }}">Crear proyecto</a>
	<ul>
		@forelse($projects as $elemento)
				<li>
					<a href="{{ route('projects.show', $elemento) }}">{{ $elemento->title }}</a>
				</li>
		@empty

		<li>No hay proyectos</li>
		@endforelse
		{{ $projects->links() }}

	</ul>
@endsection