<!DOCTYPE html>
<html lang="en">
<head>   
     <meta charset="UTF-8">  
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
     <title>Edit Todos</title>
</head>
<body>      
    
  <h1 class="text-center text-primary">Edit Todo</h1>
  <div class="col-md-offset-4">
    <form method="get" action="/update/{{$todo->id}}">
        @csrf
      <div class="col-md-12">  
      <div class="col-md-5">
      <div class="form-group">
       <input type="text" class="form-control" value="{{$todo->todoname}}" name="todoname" placeholder="Todo Name">
          </div>
      </div> 
   </div>  
     
     
     
      <div class="col-md-12">
       <div class="col-md-5">
      <div class="form-group">
      <input rows="9" cols="10" name="description" value="{{$todo->description}}"class="form-control" placeholder="Todo Description"></input>
              </div>
          </div>
      </div>
  
      <div class="col-md-12">
       <div class="col-md-5">
       <button class="btn btn-success btn-block">UPDATE</button>
       </div>
      </div>
      
      </form>
  </div>
    </body></html>