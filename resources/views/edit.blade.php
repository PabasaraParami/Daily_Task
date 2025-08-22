<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Update Task</title>
</head>
<body>

<div class="container">
    <h1>Update Task</h1>

    <form method="post" action="{{ route('updatetask') }}">
        @csrf
        <input type="text" class="form-control" name="task" value="{{ $task->task }}" placeholder="Update your Task Here">
        <input type="hidden" name="id" value="{{ $task->id }}">
        
        {{-- Display validation errors --}}
        <input type="Submit" class="btn btn-secondary mt-5 me-2" value="UPDATE">

               <input type="button" class="btn btn-danger mt-5 me-2" value="CANCEL">
    </form>
</div>

</body>
</html>