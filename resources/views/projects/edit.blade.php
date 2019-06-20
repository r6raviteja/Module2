@extends("layout")
@section("content")
<h1>Edit project</h1>
<form method="POST" action="/projects/{{$project->id}}" style="margin-bottom: len; ">
	
@method("PATCH")
@csrf
	
	<div class="field">
	<label class="label" for="title">Title</label>
	<div class="control">
		<input type="text" class="input" name="title" placeholder="Title" value="{{$project->title}}">
	</div>
</div>
<div class="field">
	<label class="label" for="description">Description</label>
	<div class="control">
		<textarea name="description" class="textarea" >{{$project->description}}</textarea>		
	</div>
</div>
<div class="field">
	<div class="control">
		<button type="submit" class="button is-link">
			update project
		</button>
	</div>
</div>	
</form>

@include("errors")
<form method="POST" action="/projects/{{$project->id}}">
	@method("DELETE")
	@csrf
	
<div class="field">
	<div class="control">
		<button type="submit" class="button">
			Delete project
		</button>
	</div>
</div>	
	
</form>
@endsection