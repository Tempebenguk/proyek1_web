<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

    <style>
        .navbar-custom {
            background-color: #ba7237;
            /* Ubah warna latar belakang */
        }

        .navbar-brand {
            color: #fff;
            font-family: 'Fredoka', sans-serif;
            font-weight: bold;
        }

        .logo {
            position: absolute;
            top: 150px;
            /* Sesuaikan jika diperlukan */
            left: 50%;
            transform: translateX(-50%);
            opacity: 0.1;
            z-index: -1;
            width: 70%;

        }

        .card {
            margin-top: 25px;
            height: auto;
            border-radius: 9px;
            border: 3px solid #BA7237;
            font-family: 'Fredoka', sans-serif;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
            padding: 20px;
            /* Menambahkan padding agar lebih terlihat */
        }

        .card-text {
            font-size: 12pt;
            font-weight: bold;
            color: #BA7237;
            font-family: 'Fredoka', sans-serif;
        }

        .container {
            position: relative;
        }

        .card-link {
            text-decoration: none;
            /* Hilangkan garis bawah */
            color: inherit;
            /* Warisi warna dari induknya */
            display: block;
            /* Menjadikan tautan sebagai blok */
        }

        .card-link:hover {
            text-decoration: none;
            /* Hilangkan garis bawah saat dihover */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">METODE PEMBAYARAN</a>
        </div>
    </nav>
    <div class="container">
        <div class="text-below-navbar"
            style="font-size: 11pt; font-weight: bold; color: #BA7237; margin-top: 20px; text-align: center; font-family: 'Fredoka', sans-serif;">
            <p>Silahkan pilih metode pembayaran yang tersedia</p>
        </div>

        <div class="logo">
            <img src="{{ asset('starling.png')}}" class="img-fluid" alt="Logo">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <a href="{{ route('pembayaran') }}" class="card-link">
                        <div class="d-flex align-items-center">
                            <img src="dana.png" style="width: 85px; height: 25px; margin-left: 5px;">
                            <span class="card-text ms-3">Dana</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <a href="{{ route('pembayaran') }}" class="card-link">
                        <div class="d-flex align-items-center">
                            <img src="ovo.png" style="width: 82px; height: 23px; margin-left: 5px;">
                            <span class="card-text ms-3">OVO</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <a href="{{ route('pembayaran') }}" class="card-link">
                        <div class="d-flex align-items-center">
                            <img src="gopay.png" style="width: 85px; height: 23px; margin-left: 5px;">
                            <span class="card-text ms-3">Gopay</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <a href="{{ route('pembayaran') }}" class="card-link">
                        <div class="d-flex align-items-center">
                            <img src="shopee.png" style="width: 85px; height: 23px; margin-left: 5px;">
                            <span class="card-text ms-3">Shopeepay</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2wY+XniB9jsSFFj3LVHj6hFhIl2rBgG3tvkSwpQf5q2xRM9E3UbELz0d5xz"
        crossorigin="anonymous"></script>
</body>

</html>
