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
        <p><h2>View List Here</h2></p>

        <a href="/create" class="btn btn-success">Create</a><br><br>         


        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Created At</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 0;
                @endphp
                @foreach ($todo_arr as $td)
                @php
                    $no++;
                @endphp
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$td->name}}</td>
                    <td>{{$td->created_at}}</td>
                    <td>
                        <a href="delete/{{$td->id}}" class="btn btn-danger">Delete</a> &nbsp; | &nbsp; <a href="edit/{{$td->id}}" class="btn btn-primary">Update</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>