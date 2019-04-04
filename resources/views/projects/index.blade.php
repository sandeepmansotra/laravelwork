<h1> Your Post</h1>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<table>
   <tr>
      <th>subject</th>
      <th>message</th>
   </tr>
@foreach($posts as $post)
   <tr>
   <td>{{$post->subject}}</td>
   <td>{{$post->message}}</td>
   </tr>
   @endforeach
</table>
