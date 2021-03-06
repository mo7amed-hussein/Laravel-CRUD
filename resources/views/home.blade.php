@extends('layout.master')
@section('title',':.. CRUD Application ..:')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success">
	{{Session::get('message')}}
</div>
{{Session::forget('message')}}
@endif
<table class="table table-hover table-striped">
	<legend>All Articles</legend>
	@if(count($articles) == 0)
		<tr>no article till now
		<a href="{{route('create')}}" class="label label-primary">click to add</a> 
		</tr>
	@else
	
	<thead>
		<th>ID</th>
		<th>Title</th>
		<th>Description</th>
		<th>Actions</th>
	</thead>
	<tbody >
		@foreach($articles as $article)
		<tr>
			<td>{{$article->id}}</td>
			<td>{{$article->title}}</td>
			<td><?php echo str_limit($article->body,50) ?></td>
			<td>
				<a href="{{route('read',['id'=>$article->id])}}" class="label label-primary">Read</a> | 
				<a href="{{route('edit',['id'=>$article->id])}}" class="label label-success">Edit</a> |
				<a href="{{route('del',['id'=>$article->id])}}" class="label label-danger">Delete</a> 
			</td>
		</tr>
		@endforeach
		@endif
	</tbody>
</table>
@endsection