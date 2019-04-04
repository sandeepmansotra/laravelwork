@extends('layout')
@section('content')
<div class="jumbotron">
   <div class="container">
<html>
<head>
   <title> Edit a Project</title>
</head>
<body>
   <fieldset>
      <legend>Edit The Project</legend>
      <form method="POST" action="/projects/{{$project->id}}">
         {{method_field('PATCH')}}
         {{csrf_field()}}

         Product Name:<br>
         <input type="string" name="Productname" value="{{$project->Productname}}" placeholder="Product Name"/><br/>
         Description:<br>
         <textarea name="Description"   rows="15" cols="60">Description
         {{$project->Description}}
         </textarea>
         <br/>
         Price:<br>
         <input type="text" name="Price" value="{{$project->Price}}" placeholder="Price"/><br/><br>
         <button name="btn1" class="btn btn-success">Update Project</button><br><br>
         <a href="/projects/create" class="btn btn-success">CREATE NEW PROJECT</a>

      </form>
   </fieldset>
</body>
</html>
</div>
</div>
@endsection
