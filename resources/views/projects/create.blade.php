@extends('layout')
@section('title','Create project')
@section('content')
	<h1>Create new project</h1>
	<form method="post" action="{{ route('projects.store') }}">
		@csrf
		<label> Titulo del proyecto <br>
			<input type="text" name="title">
		</label><br>
		<label> Url del proyecto <br>
			<input type="text" name="url">
		</label><br>
		<label> Descripción del proyecto <br>
			<textarea name="description"></textarea>
		</label><br>
		<button>Guardar</button>
	</form>
@endsection