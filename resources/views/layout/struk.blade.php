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

        .struk-container {
            max-width: 400px;
            margin: 0 auto;
            border: 1px solid #000;
            padding: 20px;
        }
        .struk-body {
            margin-top: 5px;
            margin-bottom: 20px;
        }
        .struk-item {
            justify-content: space-between;
            margin-bottom: 5px;
        }
        .struk-total {
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            border-top: 1px dashed #000;
            margin-top: 10px;
            padding-top: 10px;
        }
        .struk-detail {
            justify-content: space-between;
            margin-top: -13px;
            margin-left: 0px;
            text-align: left;
            flex-basis: 100%;
        }
        .text-right {
            text-align: right;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: #030303;">
                <button type="button" style="background: 0; border: 0; padding: 0; margin: 0;">
                    <img src="cross.png" alt="Transaksi Saya" style="vertical-align: middle; margin-right: 5px; width: 30px; height: 30px;">
                </button>
                Transaksi Saya
            </a>
        </div>
    </nav>
    <div class="logo">
        <img src="{{ asset('success.png')}}" alt="Logo">
    </div>
    <div class="text-center" style="font-weight: bold; font-size: 16pt; color: #7C2B18;">
        <p>Pemesanan Berhasil!</p>
        <p id="waktu" style="font-size: 12pt; color: #7C2B18; margin-top: -12px;">06-08-2024 13.00.00</p>
        <p id="id-transaksi" style="margin-top: -12px; font-size: 14pt; color: #020202;">123456</p>
    </div>
    <div class="struk-container">
        <div class="struk-body">
            <div class="struk-item">
                <span>Item 1</span><p class="text-right" style="margin-top: -25px;">Rp20.000</span>
                <div class="struk-detail">
                    <span>1 x Rp20.000</span>
                </div>
            </div>
            <div class="struk-total">
                <span>Total</span><span class="text-right">Rp20.000</span>
            </div>
            <div class="struk-total">
                <span>Bayar</span><span class="text-right">Rp30.000</span>
            </div>
            <div class="struk-total">
                <span>Kembalian</span><span class="text-right">Rp10.000</span>
            </div>
        </div>

        <div class="struk-footer">
            <p class="text-center" style="font-size: 12pt; color: #7C2B18; margin-top: 50px; font-weight: bold; ">Terima Kasih</p>
            <p class="text-center" style="font-size: 12pt; color: #7C2B18; margin-top: -8px; font-weight: bold; ">Semoga Harimu Menyenangkan</p>
        </div>
    {{-- <div class="btn-container">
        <button class="btn btn-pesan" type="button">Kembali Ke Menu</button>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2wY+XniB9jsSFFj3LVHj6hFhIl2rBgG3tvkSwpQf5q2xRM9E3UbELz0d5xz"
        crossorigin="anonymous"></script>
</body>

</html>
