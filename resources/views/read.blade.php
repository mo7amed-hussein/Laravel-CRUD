@extends('layout.master')
@section('title',$article->title)
@section('content')
<h2 class="text text-center">{{$article->title}}</h2>
<article>
	{{$article->body}}
</article>
<div class="well">
<a href="{{route('home')}}" class="label label-primary">back</a> | 
				<a href="{{route('edit',['id'=>$article->id])}}" class="label label-success">Edit</a> |
				<a href="" class="label label-danger">Delete</a> 
				</div>
@endsection