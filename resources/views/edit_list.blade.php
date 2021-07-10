<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
    <div class="container">
        
        <p><h2>Create New Task</h2></p>
        
        <a href="/" class="btn btn-primary">Back</a><br><br>

        <form action="../update_list/{{$todo_arr->id}}">
            <div class="mb-3">
                <label for="taskname" class="form-label">Task Name</label>
                <input type="text" class="form-control mb-3" id="taskname" name="taskname" value="{{ $todo_arr->name }}">
                <div id="namehelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success" style="">Save</button>
            </div>
            </form>

    </div>
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>