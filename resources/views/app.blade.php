<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>China Online BD</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Access Token</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="get-the-question">Get the question</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shortened-question">Shortened Question</a>
          </li>
        </ul>
      </div>
    </nav>
    @yield('content')

  </div>
</body>

</html>
