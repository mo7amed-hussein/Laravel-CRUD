@extends('layout.master')
@section('title',':.. CRUD Application ..:')
@section('content')
<table class="table table-hover table-striped">
	<legend>All Articles</legend>
	<thead>
		<th>ID</th>
		<th>Title</th>
		<th>Description</th>
		<th>Actions</th>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>new file</td>
			<td>this is new</td>
			<td>
				<a href="" class="label label-primary">Read</a> | 
				<a href="" class="label label-success">Edit</a> |
				<a href="" class="label label-danger">Delete</a> 
			</td>
		</tr>
	</tbody>
</table>
@endsection