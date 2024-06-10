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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evSXbVzTVFT4GX6fbsmMHsjs6eSFcdGvkRzGtQjQzEnkpgmOuqwgf8WJEaYXqm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7og EvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-bojlvQxEAuqcLTI6POEbqKgQ4ByfYhD9TfrodozUMCA7KEf0DlxUPv7qNvPFWXOq"
        crossorigin="anonymous"></script>

    <style>
        .navbar-custom {
            background-color: #ba7237;
            /* Change background color */
        }

        .navbar-brand {
            color: #fff;
            /* Change text color */
            font-weight: bold;
            font-family: 'Franklin Gothic Medium';
        }

        img {
            display: block;
            align-items: center;
            opacity: 0.4;
            margin: auto;
        }

        .image {
            margin-top: 10px;
            width: auto;
            height: 100px;
            opacity: 1;
        }

        .logo {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            pointer-events: none;
            z-index: -1;
        }

        .column {
            float: left;
            width: 50%;
            justify-content: center;
            margin-left: 8%;
        }

        .card {
            margin-top: 25px;
            margin-left: 5px;
            height: auto;
            border-radius: 9px;
            border: 3px solid #BA7237;
            position: absolute
        }

        .btn-pesan {
            font-family: "Fredoka", sans-serif;
            background-color: #00E432;
            outline: none;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            /* border: 1.5px solid #00E432; */
            /* border-color: #7C2B18; */
            color: #fff;
            padding: 5px 15px;
            border-radius: 4px;
            width: 350px;
            border-color: #ba7237;
        }

        .fixed-btn-container {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"
                style="font-family: 'Fredoka', sans-serif; padding-left: 9px;">PEMBAYARAN</a>
        </div>
    </nav>
    <div class="text-below-navbar"
        style="font-family: 'Fredoka', sans-serif; font-size: 11pt; font-weight: bold; color: #BA7237; padding-left: 20px; margin-top: 20px;">
        <p>Silahkan selesaikan pembayaran anda</p>
    </div>
    <div class="logo">
        <img src="{{ asset('starling.png')}}">
    </div>
</head>

<body>
    <div class="column">
        <div id="dana" style="display: none;">
            <div class="card"
                style="margin-top: 5px; width: 330px; height: 50px; text-align: left; padding-left: 13px; line-height: 45px; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);">
                <img src="dana.png" style="width: 85px; height: 25px; margin-left: 5px; opacity: 3;">
                <span class="card-text"
                    style="font-size: 12pt; font-weight: bold; color: #BA7237;  position: absolute; left: 40%; ">Dana</span>
            </div>
            <div class="card"
                style="margin-top: 70px; width: 330px; height: 350px; text-align: left; padding-left: 13px; line-height: 45px; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);">
            </div>
        </div>
        <div id="tunai" style="display: none;">
            <div class="card" style="margin-top: 5px; width: 330px; height: 50px;">
                <span class="card-text"
                    style="font-size: 12pt; font-weight: bold; color: #BA7237; position: absolute; left: 40%;">Bayar
                    Tunai</span>
            </div>
        </div>
    </div>
    <div class="fixed-btn-container">
        <div id="buttonContainer" style="position: relative;">
            <button id="btnSelesai" class="btn btn-primary btn-pesan" type="button"
                style="font-family: 'Fredoka', sans-serif; font-weight: bold; max-width: 275px; ">SELESAI</button>
        </div>
    </div>

    <script>
        var btnSelesai = document.getElementById("btnSelesai");

        // Tambahkan event listener
        btnSelesai.addEventListener("click", function () {
            // Tampilkan alert
            alert("Transaksi sedang diproses, silahkan ditunggu :)");
        });

        window.onload = function () {
            const urlParams = new URLSearchParams(window.location.search);
            const method = urlParams.get('method');

            if (method === 'dana') {
                document.getElementById('dana').style.display = 'block';
                document.getElementById('buttonContainer').style.display = 'block';
            } else if (method === 'tunai') {
                document.getElementById('tunai').style.display = 'block';
                document.getElementById('buttonContainer').style.display = 'block';
            }
        }
    </script>
</body>

</html>