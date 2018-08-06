<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">Laravel Store</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/product">List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/product/form">New</a>
            </li>
          </ul>
        </div>
      </nav>
      @yield('content')
      <footer class="footer">
        <p>© Laravel Store.</p>
      </footer>
    </div>
</body>
</html>