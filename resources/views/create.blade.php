@extends('layout.master')
@section('title','create new article')
@section('content')
<form method="post" action="{{route('create')}}">
	{{csrf_field()}}
	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control">
	</div>
	<div class="form-group">
		<label>body</label>
		<textarea name="body"  cols="20" rows="10" class="form-control"
		></textarea>
	</div>
	<button class="btn btn-primary" name="submit">Sumbit</button>
</form>
@endsection