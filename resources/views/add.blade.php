<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Course</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Course</h2>
  <form action="{{route('save')}}" Method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Name of Course" name="course_name"/>
    </div>
    <div class="form-group">
      <label for="pwd">Image:</label>
      <input type="file" class="form-control" name="image[]" multiple/>
    </div>
    <button type="button" onclick="addmore()">Add Course details</button><br/>
    <div id="content">
        <div class="form-group" >
            <textarea name="content[]"></textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<script>
    let count = 0;
    function addmore(){
    $("#content").append(`
    <div class="form-group" id=${count+1}>
            <textarea name="content[]"></textarea>
            <button onclick="remove(${count+1})">Remove</button>
        </div>`);
    count++;
    }
    function remove(id){
      $('#'+id).remove();
    }
</script>
</body>
</html>
