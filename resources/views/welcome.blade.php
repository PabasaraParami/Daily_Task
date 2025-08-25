<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Task</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #74ebd5, #9face6);
      position: relative;
      overflow: hidden;
    }
    body::before {
      content: "";
      position: absolute;
      top: -100px;
      left: -100px;
      width: 400px;
      height: 400px;
      background: rgba(255,255,255,0.1);
      border-radius: 50%;
      filter: blur(80px);
    }
    body::after {
      content: "";
      position: absolute;
      bottom: -120px;
      right: -120px;
      width: 350px;
      height: 350px;
      background: rgba(255,255,255,0.15);
      border-radius: 50%;
      filter: blur(100px);
    }

    .transition {
      transition: all 0.3s ease-in-out;
    }
    .btn-primary:hover {
      background-color: #0a58ca !important;
      transform: scale(1.05);
    }
  </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

  <div class="text-center card shadow-lg p-5 rounded-4 bg-white bg-opacity-75 border-0">
    <h1 class="mb-4">Daily Task</h1>
    <a href="{{ route('task') }}" class="btn btn-primary btn-lg shadow transition">
      <i class="bi bi-list-task me-2"></i> View Task
    </a>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
