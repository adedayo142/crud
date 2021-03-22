<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
    <title>All Todos</title>
</head>
<body>
    <h1 class="text-primary text-center">ALL TODOS</h1>
   <div class="col-md-6 col-md-offset-3">
    <table class="table table-bordered table-hover">
        <thead>
            <th>S/N</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($alltodos as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->todoname}}</td>
                <td>{{$data->description}}</td>
                <td> <button class="btn btn-danger"><a href="/destroytodo/{{$data->id}}">Delete</a></button>
                 <button class="btn btn-primary"><a href="/edittodo/{{$data->id}}">Edit</a></button></td>
            </tr>    
            @endforeach
        </tbody>
    </table>
   </div>
</body>
</html>