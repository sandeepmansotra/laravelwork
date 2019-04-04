@extends('layout')
@section('content')
<div class="jumbotron">
<div class="container">

<h1>Project details</h1>
<p>Id-> {{$project->id}}</p>
<p>Product Name-> {{$project->Productname}}</p>
   <p>
      Description-> {{$project->Description}}
   </p>

   <div>
      <form method="POST" action="/projects/{{$project->id}}">
      @method('DELETE')
      {{csrf_field()}}
<a href="/projects/{{$project->id}}/edit" class="btn btn-success">EDIT PROJECT</a>
<a href="/projects/create" class="btn btn-success">CREATE NEW PROJECT</a>
   <button class="btn btn-success" >Delete Project</button>
   </form>
   </div>

<h2>List of tasks</h2>
@foreach($project->tasks as $task)
<form method="POST" action="/tasks/{{$task->id}}">
   {{method_field('PATCH')}}
   {{csrf_field()}}
   <div class="form-check">
      <input id="completed" name="completed" {{$task->completed ? 'checked':''}} class="form-check-input" type="checkbox" onclick="this.form.submit()">
      <label for="myinput" class="form-check-label {{$task->completed ? 'is-complete':''}}"> {{$task->description}}</label>
      </div>
</form>

@endforeach
</div>
</div>
@endsection
