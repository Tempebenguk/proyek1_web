<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
        /* Custom CSS */
        img {
            display: block;
            margin: auto;
        }

        .image {
            margin-top: 10px;
            width: auto;
            height: 100px;
            opacity: 1;
        }

        .container {
            max-width: 100%;
            height: auto;
        }

        .logo {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
            opacity: 0.2;
        }

        .card {
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            max-width: 150px;
            margin-top: 25px;
            border-radius: 9px;
            border: 3px solid #BA7237;
        }

        .btn-input {
            display: flex;
            align-items: center;
            background-color: #00E432;
            max-width: 100%;
            border-color: #00E432;
            border-radius: 3px;
            font-weight: bold;
        }

        .btn-flex {
            display: flex;
            justify-content: center;
        }

        .navbar-custom {
            max-width: 100%;
            background-color: #ba7237;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
            font-family: 'Franklin Gothic Medium';
        }

        .dropdown .btn {
            padding: 9px 25px;
            color: #BA7237;
            border: 2px solid #BA7237;
            border-radius: 50px;
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

        .search {

            --padding: 8px;
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
            outline: none;
            border: none;
            background: transparent;
            max-width: 175px;
        }

        .search-input::placeholder {
            color: #BA7237;
        }

        head,
        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">OUR MENU</a>
        </div>
    </nav>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <!-- Kategori -->
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-togglex" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="logo">
        <img src="{{ asset('starling.png') }}" class="img-fluid" alt="Logo">
    </div>

    <div class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-6">
                <div class="card">
                    <img src="img/image1.png" class="image img-fluid" alt="Kopi Good Day">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 10pt; color: #BA7237;">Kopi Good Day</h5>
                        <p class="card-text" style="font-size: 15pt; font-weight: bold; color: #7C2B18;">Rp 5.000</p>
                        <a href="#" class="btn btn-input btn-primary btn-flex">TAMBAH</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-6">
                <div class="card">
                    <img src="image_4.png" class="image img-fluid" alt="Teh Panas/Dingin">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 10pt; color: #BA7237;">Teh Panas/Dingin</h5>
                        <p class="card-text" style="font-size: 15pt; font-weight: bold; color: #7C2B18;">Rp 4.000</p>
                        <a href="#" class="btn btn-input btn-primary btn-flex">TAMBAH</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <img src="image_2.png" class="image img-fluid" alt="Chocolatos Drink">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 10pt; color: #BA7237;">Chocolatos Drink</h5>
                        <p class="card-text" style="font-size: 15pt; font-weight: bold; color: #7C2B18;">Rp 5.000</p>
                        <a href="#" class="btn btn-input btn-primary btn-flex">TAMBAH</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-6">
                <div class="card">
                    <img src="image_3.png" class="image img-fluid" alt="Pop Mie Besar">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 10pt; color: #BA7237;">Pop Mie Besar</h5>
                        <p class="card-text" style="font-size: 15pt; font-weight: bold; color: #7C2B18;">Rp 7.000</p>
                        <a href="#" class="btn btn-input btn-primary btn-flex">TAMBAH</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <img src="image_6.png" class="image img-fluid" alt="Beng Beng Panas/Dingin">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 10pt; color: #BA7237;">Beng Beng</h5>
                        <p class="card-text" style="font-size: 15pt; font-weight: bold; color: #7C2B18;">Rp 5.000</p>
                        <a href="#" class="btn btn-input btn-primary btn-flex">TAMBAH</a>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-6">
                <div class="card">
                    <img src="image_5.png" class="image img-fluid" alt="Kopi Hitam">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 10pt; color: #BA7237;">Kopi Hitam</h5>
                        <p class="card-text" style="font-size: 15pt; font-weight: bold; color: #7C2B18;">Rp 4.000</p>
                        <a href="#" class="btn btn-input btn-primary btn-flex">TAMBAH</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq">
        </script>
</body>

</html>