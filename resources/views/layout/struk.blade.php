<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

    <style>
        .navbar-custom {
            background-color: #fff;
            border-bottom: 1px solid #d3d3d3;
        }

        .navbar-brand {
            color: #fff;
            font-family: 'Fredoka', sans-serif;
            font-weight: bold;
        }

        .logo {
            text-align: center;
            margin: 20px 0;
        }

        .logo img {
            width: 300px;
        }

        .card {
            margin-top: 25px;
            border-radius: 9px;
            border: 3px solid #BA7237;
            font-family: 'Fredoka', sans-serif;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        .card-text {
            font-size: 12pt;
            font-weight: bold;
            color: #BA7237;
            font-family: 'Fredoka', sans-serif;
        }

        .card-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .card-link:hover {
            text-decoration: none;
        }
        .btn-container {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }

        .btn-pesan {
            font-size: 9pt;
            font-weight: bold;
            background-color: #fff;
            color: #7C2B18;
            border: 2px solid #7C2B18;
        }

        body {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: #030303;">Transaksi Saya</a>
        </div>
    </nav>
    <div class="logo">
        <img src="{{ asset('success.png')}}" alt="Logo">
    </div>
    <div class="text-center" style="font-weight: bold; font-size: 16pt; color: #7C2B18;">
        <p>Pembayaran Berhasil!</p>
    </div>
    <div class="btn-container">
        <button class="btn btn-pesan" type="button">Kembali Ke Menu</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2wY+XniB9jsSFFj3LVHj6hFhIl2rBgG3tvkSwpQf5q2xRM9E3UbELz0d5xz"
        crossorigin="anonymous"></script>
</body>

</html>
