<!DOCTYPE html>
<html lang="en">
<head>   
     <meta charset="UTF-8">  
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
     <title>Create Todos</title>
</head>
<body>      
    
  <h1 class="text-center text-primary">Create a new Todo</h1>
  <div class="col-md-offset-4">
    <form method="get" action="{{url('savetodos')}}">
        @csrf
      <div class="col-md-12">  
      <div class="col-md-5">
      <div class="form-group">
       <input type="text" class="form-control" name="todoname" placeholder="Todo Name">
          </div>
      </div> 
   </div>  
     
     
     
      <div class="col-md-12">
       <div class="col-md-5">
      <div class="form-group">
      <textarea rows="9" cols="10" name="description" class="form-control" placeholder="Todo Description"></textarea>
              </div>
          </div>
      </div>
  
      <div class="col-md-12">
       <div class="col-md-5">
       <button class="btn btn-success btn-block">SAVE</button>
       </div>
      </div>
      
      </form>
  </div>
    </body></html>