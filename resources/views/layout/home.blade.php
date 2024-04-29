<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <style>
    /* Custom CSS */
    img {
      display: block;
      align-items: center;
      opacity: 0.4;
      margin: auto;

    }

    .logo{
      display: flex;
      justify-content: center;
      margin: 200px 20px 20px 45px;
      position: absolute;
    }

    .card{
      margin-top: 25px;
      width: 200px;
      height: auto;
    }

    .navbar-custom {
      background-color: #ba7237; /* Change background color */
    }
    .navbar-brand {
      color: #fff; /* Change text color */
      font-weight: bold;
      font-family: 'Franklin Gothic Medium';
    }

    /* Kategori */
    .dropdown .btn{
        padding: 9px;
        color: #BA7237;
        border: 2px solid #BA7237;
        border-radius: 20px;
        position: relative;
        display: inline-block;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        display: block;
        padding: 10px;
        text-decoration: none;
        background-color: #ffffff;
    }

    .dropdown-item:hover {
        background-color: #ddd;
    }

    /* Search */
    .search {
        --padding: 8px;

        width: max-content;
        display: flex;
        align-items: center;
        padding: var(--padding);
        border-radius: 30px;
        background: #fff;
        border: 2px solid #BA7237;
    }

    .search-input {
        font-size: 16px;
        color: #333333;
        margin-left: 14px;
        margin-left: var(--padding);
        outline: none;
        border: none;
        background: transparent;
        width: 235px;

    }

    .search-input::placeholder{
        color:#BA7237;
    }

  </style>
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">OUR MENU</a>
  </div>
  </nav>
</head>
<body>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <!-- Kategori -->
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-togglex" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Makanan</a></li>
                            <li><a class="dropdown-item" href="#">Minuman</a></li>
                            <li><a class="dropdown-item" href="#">Snack</a></li>
                        </ul>
                    </div>
                    <!-- Pencarian -->
                    <form>
                        <div class="search">
                            <input class="search-input" type="search" placeholder="Search">
                            <span class="search-icon material-symbols-outlined">search</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  <div class="logo">
    <img src="{{ asset('starling.png')}}" width="70%" height="70%">
  </div>
  <div class="container text-center">
  <div class="row">
    <div class="col">
    <div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>
  <!-- <div class="card">

  </div> -->
</div>

  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq"></script>
</body>
</html>
