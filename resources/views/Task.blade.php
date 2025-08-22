<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
    <title>Document</title>
</head>
<body>
    
<div class="container">
<div class="text-center">
<h1>Daily Task</h1>
        <div class="row">
        <div class="col-md-12">
     

  {{-- Display validation errors --}}
@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


        <form method="post" action="/saveTask">
        @csrf
  <input type="text"class="form-control" name="task" placeholder="Enter yout Task Here">
        <input type="Submit" class="btn btn-secondary mt-5 me-2" value="SAVE">
         <input type="button" class="btn btn-success mt-5"value="CLEAR">

        </form>
      


<table class="table table-dark table-hover mt-5">
  <th>ID</th>
  <th>Task</th>
  <th>completed</th>
   <th>Action</th>
   <th>Delete</th>
  <th>Update</th>

  @foreach ($tasks as $task)
  <tr>
    <td>{{ $task->id }}</td>
    <td>{{ $task->task }}</td>
    <!-- <td>{{ $task->completed ? 'Yes' : 'No' }} -->
      <td>
      @if ($task->completed)
        <button type="button" class="btn btn-success">Yes</button>
      @else
        <button type="button" class="btn btn-info">No</button>
   
      @endif
         </td>
         <td>
          @if(!$task->completed)
            <a href="{{ route('markAsCompleted', $task->id) }}" class="btn btn-primary">Mark as completed</a>
          @else
            <a href="{{ route('markAsNotComplete', $task->id) }}" class="btn btn-warning">Mark as not completed</a>
          @endif
        </td>
        <td><a href="/delete/{{$task->id}}" class="btn btn-danger">Delete</a></td>
        <td><a href="/edit/{{$task->id}}" class="btn btn-warning">Edit</a></td>
  </tr>

    @endforeach
</table>
        </div>
        </div>
</div>

</div>
</body>
</html>