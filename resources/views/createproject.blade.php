@extends('layout')
@section('content')

<html>
<div class="jumbotron">
<div class="container">
<head>
   <title> Create a Project</title>
</head>
<body>
   <fieldset>
      <legend>Product Details</legend>
      <form method="post" action="/projects">
         {{csrf_field()}}
         Product Name:<br>
         <input type="string" name="Productname" placeholder="Product Name"/><br/>
         Project Description:<br>
         <textarea name="Description" rows="15" cols="60">Description</textarea>
         <br/>
         Price of the Product:<br>
         <input type="text" name="Price" placeholder="Price"/><br/><br>
         <button name="btn1" class="btn btn-success">Create Project</button>
      </form>
   </fieldset>
</body>
</div>
</div>
</html>
@endsection
