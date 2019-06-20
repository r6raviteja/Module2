@extends("layout")

@section("content")

<!DOCTYPE html>
<html>
<head>
	<title>Create a new project</title>
</head>
<body>
<!-- <form method="POST" action="/projects">
	{{csrf_field()}}
	<div>
	<input type="text" name="title" placeholder="project title" required>
	</div>
	<div>
		<textarea name="description" placeholder="project description" required>
		</textarea>
	</div>
	<div>
		<button type="submit">create project</button>
	</div>
</form>

 -->
<form method="POST" action="/projects">
	{{csrf_field()}}
<div class="field">
	<label class="label" for="title">Title</label>
	<div class="control">
		<input type="text" class="input" name="title" placeholder="project title" value="{{old('title')}}" required>
	</div>
</div>
<div class="field">
	<label class="label" for="description">Description</label>
	<div class="control">
		<textarea name="description" class="textarea" placeholder="project description" required>{{old('description')}}</textarea>		
	</div>
</div>
<div class="field">
	<div class="control">
		<button type="submit" class="button">create project
		</button>
	</div>
</div>

@include("errors")
</form>


</body>
</html>
@endsection
