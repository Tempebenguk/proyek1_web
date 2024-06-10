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
                    <a href="{{ route('pembayaran', ['method' => 'dana']) }}" class="card-link">
                        <div class="d-flex align-items-center">
                            <img src="dana.png" style="width: 85px; height: 25px; margin-left: 5px;">
                            <span class="card-text ms-3">Dana</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <a id="card" href="{{ route('pembayaran', ['method' => 'tunai']) }}" class="card-link">
                        <div class="d-flex align-items-center">
                            <img src="cash.png" style="width: 50px; height: 45px; margin-left: 5px;">
                            <span class="card-text ms-3">Bayar Tunai</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QEFSd3RgcPp3uQQMWLODLVBu1BL2eNTFB5LyKluZAYW6U+G1vM5cCAE9mGJZzjE2" crossorigin="anonymous">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2wY+XniB9jsSFFj3LVHj6hFhIl2rBgG3tvkSwpQf5q2xRM9E3UbELz0d5xz"
        crossorigin="anonymous"></script>

    <script>
        var config = {
            apiKey: "{{ config('services.firebase.api_key') }}",
            authDomain: "{{ config('services.firebase.auth_domain') }}",
            databaseURL: "{{ config('services.firebase.database_url') }}",
            storageBucket: "{{ config('services.firebase.storage_bucket') }}",
        };
        firebase.initializeApp(config);
        var database = firebase.database();
        // Event listener untuk tombol bayar
        document.getElementById('card').addEventListener('click', function () {

                const transactionRef = firebase.database().ref('transaksi/');
                const transaksiDataString = localStorage.getItem('orderData');
                const transaksiData = JSON.parse(transaksiDataString);

            transactionRef.once('value').then(snapshot => {
                const numberOfTransactions = snapshot.numChildren();
                const nextTransactionId = `trans${numberOfTransactions + 1}`;

                console.log(transaksiData); // Pastikan orderData didefinisikan sebelum digunakan

                    transactionRef.child(nextTransactionId).set(transaksiData)
                        .then(() => {
                            alert('Transaksi berhasil disimpan!');
                            console.log(nextTransactionId);
                            localStorage.setItem("idtrans", JSON.stringify(nextTransactionId));
                        })
                        .catch(error => {
                            console.error('Error saving transaction:', error);
                    });
            });
        });


            // Ambil data transaksi dari local storage
            const transaksiDataString = localStorage.getItem('orderData');

        // Parse data transaksi dari string JSON
        const transaksiData = JSON.parse(transaksiDataString);

        // Gunakan data transaksi sesuai kebutuhan
        console.log(transaksiData);
    </script>
</body>

</html>
