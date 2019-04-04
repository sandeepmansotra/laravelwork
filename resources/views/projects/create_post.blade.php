<html>
<head>
   <title> Create a Post</title>
</head>
<body>
   <h1>Create a Post</h1>
   <fieldset>
      <legend>Post Details</legend>
      <form method="post" action="/posts">
         {{csrf_field()}}
         Subject:<br>
         <input type="string" name="subject" placeholder="Title of the project"/><br/>
         Meassage:<br>
         <textarea name="message" rows="15" cols="60">Project Description</textarea>
         <br/>
         <button name="btn1">Create Post</button>
      </form>
   </fieldset>
</body>
</html>
