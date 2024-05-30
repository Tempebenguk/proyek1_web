<!DOCTYPE html>
<html lang="id">

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
        body,
        .navbar-brand,
        .card-text,
        .form-check-label,
        .button,
        .card-text,
        .grid-container {
            font-family: "Fredoka", sans-serif;
        }

        .navbar-custom {
            background-color: #ba7237;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .logo-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: -1;
        }

        .logo-container img {
            opacity: 0.25;
            max-width: 80%;
            max-height: 80%;
        }

        .card_catatan {
            margin-top: 25px;
            border-radius: 9px;
            border: 3px solid #BA7237;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            max-width: 1000px;
            max-height: 100%;
        }

        .card {
            margin-top: 25px;
            border-radius: 9px;
            border: 3px solid #BA7237;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
        }

        .keterangan {
            margin-top: 0px;
        }

        .btn-tambah {
            border-radius: 23px;
            width: 115px;
            height: 30px;
            background-color: #00E432;
            border: none;
            font-size: 8pt;
            font-weight: bold;
        }

        .btn-pesan {
            margin-bottom: 20px;
            padding: 10px;
            color: #fff;
            border-radius: 23px;
            width: 100%;
            background-color: #00E432;
            border: none;
            font-size: 9pt;
            font-weight: bold;
        }

        .btn-pesan:active,
        .btn-pesan:focus {
            background-color: #00E432;
            outline: none;
            box-shadow: none;
        }

        .mb-3.form-check {
            display: flex;
            flex-direction: row;
            justify-content: left;
        }

        .form-check {
            margin-top: 7px;
            margin-right: 20px;
            margin-left: -12px;
        }

        .input-group-quantity {
            display: flex;
            align-items: center;
            padding-left: 10px;
        }

        #decrement,
        #increment {
            margin-top: 0px;
            width: 25px;
            height: 25px;
            margin-left: -12px;
            margin-right: 10px;
            border: none;
            border-radius: 3px;
            background-color: #00E432;
            color: #fff;
            cursor: pointer;
        }

        #decrement:hover,
        #increment:hover {
            border: none;
        }

        #input {
            padding: 3px;
            width: 30px;
            text-align: center;
            border: none;
            color: #BA7237;
            font-weight: bold;
            background-color: #fff;
            color: #00E432;
            margin-top: 0px;
            margin-right: 20px;
        }

        #keterangan {
            margin-top: 10px;
            max-height: 555px;
        }

        .input-group-quantity {
            margin-top: 0px;
        }

        .text-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .text-container p {
            margin-bottom: 0;
        }

        .text-container button {
            margin-left: auto;
        }

        @media (max-width: 576px) {
            .btn-tambah {
                margin-top: 10px;
                position: static;
            }

            .btn-pesan {
                margin-top: 10px;
            }

            .card {
                overflow-y: auto;
                height: auto;
                width: 100%;
            }

            .input-group-quantity {
                justify-content: left;
            }
        }

        .grid-container {
            margin-top: 15px;
            margin-left: 5px;
            display: grid;
            grid-template-columns: 1fr auto;
            grid-template-rows: auto auto;
            align-items: center;
        }

        .text1 {
            color: #ba7237;
            font-weight: bold;
            font-size: 12pt;
            grid-row: 1 / 2;
            grid-column: 1;
        }

        .text2 {
            color: #BA7237;
            font-size: 9pt;
            margin-top: 0px;
            grid-row: 2 / 3;
            grid-column: 1;
        }

        .button {
            border: none;
            color: #fff;
            background-color: #00E432;
            padding: 5px 15px;
            border-radius: 50px;
            margin-top: 3px;
            grid-row: 1 / span 2;
            grid-column: 2;
            justify-self: end;
            align-self: center;
            margin-left: auto;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
        }

        .btn-pesan:active,
        .btn-pesan:focus {
            background-color: #00E432;
            /* Tambahkan warna latar belakang untuk pseudo-class :active dan :focus */
            outline: none;
            box-shadow: none;
        }

        .total-card .card-body {
            display: flex;
            justify-content: space-between;
            align-items: left;
            max-height: 55px;
        }

        textarea {
            width: 100%;
            height: 100%;
            padding: 15px;
            resize: none;
            border: 3px solid #BA7237;
            border-radius: 9px;
            background-color: #fff;
            color: #000;
            font-size: 16px;
            margin-top: 20px;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            font-family: 'Fredoka', sans-serif;
        }

        textarea:focus {
            outline: none;
            border-color: #BA7237;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PEMESANAN</a>
        </div>
    </nav>

    <div class="logo-container">
        <img src="{{ asset('starling.png') }}" alt="Logo">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">

                <!-- Bagian card -->
                <!-- <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="text-container">
                            <p class="card-text" style="font-size: 10pt; font-weight: 800; color: #BA7237;">Kopi Good
                                Day</p>
                            <span class="card-text"
                                style="font-size: 13pt; font-weight: 900; color: #7C2B18; margin-top: 5px;">Rp
                                5.000</span>
                            <div class="mb-3 form-check">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1"
                                        style="font-size: 8pt; font-weight: 800; color: #BA7237;">Panas</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2"
                                        style="font-size: 8pt; font-weight: 800; color: #BA7237;">Dingin</label>
                                </div>
                            </div>
                            <div class="input-group input-group-quantity">
                                <button id="decrement">-</button>
                                <input type="number" id="input" value="0" readonly>
                                <button id="increment">+</button>
                            </div>
                        </div>
                        <img src="kopi.png" class="img-fluid" style="max-width: 130px; height: auto; opacity: 1;">
                    </div>
                </div> -->


                <!-- bagian tambah pesanan -->
                <div class="grid-container">
                    <div class="text1">ada tambahan?</div>
                    <div class="text2">kamu masih bisa menambah pesanan lo</div>
                    <a href="{{ route('home') }}">
                        <button class="button">Tambah</button>
                    </a>
                </div>


                <!-- Bagian catatan -->
                <div class="col-md-6 col-lg-5">
                    <div>
                        <div>
                            <textarea placeholder="Catatan, misalnya : gulanya sedikit dll..." required></textarea>
                        </div>
                        <!-- JavaScript untuk menyesuaikan ketinggian textarea -->
                        <script>
                            const textarea = document.querySelector("textarea");

                            textarea.addEventListener("input", () => {
                                textarea.style.height = "auto";
                                textarea.style.height = `${textarea.scrollHeight}px`;
                            });
                        </script>
                    </div>
                </div>

                <!-- Bagian total pesanan -->
                <div class="card mt-3 total-card">
                    <div class="card-body">
                        <p class="card-text" style="font-size: 10pt; font-weight: bold; color: #BA7237;">Total
                            Pesanan Anda</p>
                        <span class="card-text" style="font-size: 11pt; font-weight: bold; color: #00E432;">Rp
                            5.000</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- bagian button pembayaran -->
        <div class="row mt-4">
            <div class="col-12">
                <a href="{{ route('metode') }}">
                    <button class="btn btn-pesan" style="font-family: 'Fredoka', sans-serif;">BAYAR PESANAN
                        ANDA</button>
                </a>
            </div>
        </div>
    </div>

    <script>
        let counter = 0;

        function increment() {
            counter++;
        }

        function decrement() {
            if (counter > 0) {
                counter--;
            }
        }

        function get() {
            return counter;
        }

        const inc = document.getElementById("increment");
        const input = document.getElementById("input");
        const dec = document.getElementById("decrement");

        inc.addEventListener("click", () => {
            increment();
            input.value = get();
        });

        dec.addEventListener("click", () => {
            decrement();
            input.value = get();
        });

        document.addEventListener('DOMContentLoaded', function () {
            const urlParams = new URLSearchParams(window.location.search);
            const title = urlParams.get('nama_menu');
            const price = urlParams.get('harga');
            const imageSrc = urlParams.get('gambar_menu');

            // Gunakan data untuk membuat card baru
            addOrderCard(title, price, imageSrc);
        });

        function addOrderCard(title, price, imageSrc) {
            const newCard = document.createElement('div');
            newCard.classList.add('card', 'mb-3');
            newCard.innerHTML = `
        <div class="card-body d-flex justify-content-between align-items-center">
            <div class="text-container">
                <p class="card-title" style="font-size: 10pt; color: #BA7237;">${title}</p>
                <span class="card-text" style="font-size: 13pt; font-weight: 900; color: #7C2B18; margin-top: 5px;">Rp ${price}</span>
                <div class="input-group input-group-quantity">
                    <button class="decrement btn btn-secondary btn-sm">-</button>
                    <input type="number" class="input form-control" value="1" readonly>
                    <button class="increment btn btn-secondary btn-sm">+</button>
                </div>
            </div>
            <img src="${imageSrc}" class="img-fluid" style="max-width: 100px; height: auto; opacity: 1;">
        </div>
    `;
            // Tambahkan card ke container
            const cardContainer = document.getElementById('menu-container');
            cardContainer.appendChild(newCard);
        }
    </script>
</body>

</html>