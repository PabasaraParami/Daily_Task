<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Task</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

  <div class="text-center">
    <h1 class="mb-4">Daily Task</h1>
    <a href="{{ route('task') }}" 
       class="btn btn-primary btn-lg shadow transition">
       View Task
    </a>
  </div>

  <!-- Bootstrap JS (optional, for future components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap Transition Helper -->
  <style>
    /* Only tiny bootstrap-friendly addition */
    .transition {
      transition: all 0.3s ease-in-out;
    }
    .btn-primary:hover {
      background-color: #0a58ca !important; /* darker blue */
      transform: scale(1.05);
    }
  </style>
</body>
</html>
