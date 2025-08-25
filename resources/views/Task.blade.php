<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container mt-5">
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

        <!-- Task Form -->
        <form id="taskForm" method="post" action="/saveTask">
          @csrf
          <input type="text" class="form-control" name="task" placeholder="Enter your Task Here">
          
          <!-- Save button triggers modal -->
           <!-- Before: your save button was type="submit" (auto submits form) -->
<!-- After: we make it type="button" so it does NOT auto submit -->
          <input type="button" class="btn btn-secondary mt-5 me-2" value="SAVE" data-bs-toggle="modal" data-bs-target="#saveModal"> <!--connects button with modal having id saveModal.-->
          
          <input type="reset" class="btn btn-success mt-5" value="CLEAR">
        </form>

        <!-- Save Confirmation Modal -->
        <div class="modal fade" id="saveModal" tabindex="-1" aria-labelledby="saveModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="saveModalLabel">Confirm Save</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Are you sure you want to save this task?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <!-- Confirm save -->
                <button type="button" class="btn btn-primary" id="confirmSave">Yes, Save</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Task Table -->
        <table class="table table-dark table-hover mt-5">
          <thead>
            <tr>
              <th>ID</th>
              <th>Task</th>
              <th>Completed</th>
              <th>Action</th>
              <th>Delete</th>
              <th>Update</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tasks as $task)
            <tr>
              <td>{{ $task->id }}</td>
              <td>{{ $task->task }}</td>
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
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script to confirm save -->
<script>
  document.getElementById("confirmSave").addEventListener("click", function() {
    document.getElementById("taskForm").submit();
  });
</script>

</body>
</html>
