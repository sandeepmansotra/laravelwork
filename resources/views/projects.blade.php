@extends('layout')
@section('content')
<div class="jumbotron">
<div class="container">
<h1>Lists of Products</h1>
<style>
.table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 5px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


<table class="table">
   <tr>
      <th>id</th>
      <th>Description</th>
      <th>Productname</th>
      <th>Price</th>
   </tr>
@foreach($list as $lists)

   <tr>
   <td>{{$lists->id}}</td>
   <td><a href="/projects/{{$lists->id}}"/>{{$lists->Description}}</a></td>
   <td>{{$lists->Productname}}</td>
   <td>{{$lists->Price}}</td>

   </tr>

   @endforeach
</table>
<a href="/projects/create" class="btn btn-success">CREATE NEW PROJECT</a>
</div>
</div>
@endsection
