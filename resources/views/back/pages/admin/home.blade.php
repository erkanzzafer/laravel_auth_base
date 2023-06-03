<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if(Auth::guard('admin')->check())
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Anasayfa - Admin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.logout_handler')}}" onclick="event.preventDefault();document.getElementById('adminLogoutForm').submit();">Çıkış Yap</a>
                  <form action="{{route('admin.logout_handler')}}" id='adminLogoutForm' method="POST">@csrf</form>
                </li>
              </ul>
            @elseif(Auth::guard('seller')->check())
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Anasayfa - Seller</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" >Çıkış Yap</a>
                  <form action="#" id='#' method="POST"></form>
                </li>
              </ul>
            @endif

              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>

          </div>
        </div>
      </nav>
</body>
</html>
