@extends('layout.master')
@section('title',$article->title)
@section('content')
<form method="post" action="{{route('edit',['id'=>$article->id])}}">
	{{csrf_field()}}
	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" value="{{$article->title}}" class="form-control">
	</div>
	<div class="form-group">
		<label>body</label>
		<textarea name="body" class="form-control"
		>{{$article->body}}
		</textarea>
	</div>
	<button class="btn btn-primary" name="submit">Update</button>
</form>
@endsection