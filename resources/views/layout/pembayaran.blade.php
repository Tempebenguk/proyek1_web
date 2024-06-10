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
        head,
        body {
            font-family: "Fredoka", sans-serif;
        }

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

        .logo-cross {
            text-align: center;
            margin: 20px 0;
        }

        .logo-cross img {
            max-width: 150px;
            opacity: 1;
        }

        .logo-starling {
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
            display: flex;
            padding: 5px 0;
        }

        .struk-total {
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            margin-top: 0px;
            padding-top: 0px;
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
            margin-left: auto;
            margin-top: 0px;
        }

        .popup {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            align-items: center;
            overflow: auto;
        }

        /* Show popup with zoom and jiggle effect */
        .popup.show {
            display: flex;
        }

        /* Popup content */
        .popup-content {
            background-color: #fff;
            margin: 0 auto;
            margin-top: 75px;
            margin-bottom: 75px;
            padding: 20px;
            border: 1px solid #888;
            max-width: 80%;
            height: fit-content;
            border-radius: 7px;
            transform: scale(0.5);
            animation: zoomInJiggle 0.5s ease forwards;
            overflow: auto;
        }

        /* Keyframes for zoom in with jiggle */
        @keyframes zoomInJiggle {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }

            60% {
                transform: scale(1.1);
                opacity: 1;
            }

            80% {
                transform: scale(0.9);
            }

            100% {
                transform: scale(1);
            }
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
    <div class="logo-starling">
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
        <div id="open-popup-btn" style="position: relative;">
            <button id="btnSelesai" class="btn btn-primary btn-pesan" type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                style="font-family: 'Fredoka', sans-serif; font-weight: bold; max-width: 275px; ">SELESAI</button>
        </div>
    </div>
    <div id="popup" class="popup">
        <div class="popup-content">
            <div class="container">
                <div class="container">
                    <button id="batal" type="button" style="background: 0; border: 0; padding: 0; margin: 0;">
                        <img id="closeBtn" src="cross.png" alt="Close" style="vertical-align: middle; width: 40px; height: 40px;">
                    </button>
                </div>
            </div>
            <div class="logo-cross">
                <img src="{{ asset('success.png')}}" alt="Logo">
            </div>
            <div class="text-center" style="font-weight: bold; font-size: 16pt; color: #7C2B18;">
                <p>Pemesanan Berhasil!</p>
                <p id="tgl_transaksi" style="font-size: 12pt; color: #7C2B18; margin-top: -12px;">06-08-2024 13.00.00</p>
                <p id="id-transaksi" style="margin-top: -12px; font-size: 14pt; color: #020202;">123456</p>
            </div>
            <div class="struk-container">
                <div class="struk-body">
                    <div class="struk-item">
                        <span></span>
                        <p class="text-right" style="margin-top: -25px;"></span>
                        <div class="struk-detail">
                            <span></span>
                        </div>
                    </div>
                    <div class="struk-total" style="margin-top: -25px;">
                        <span></span><span class="text-right"></span>
                    </div>
                    <div class="struk-total">
                        <span></span><span class="text-right"></span>
                    </div>
                    <div class="struk-total">
                        <span></span><span class="text-right"></span>
                    </div>
                </div>

                <div class="struk-footer">
                    <p class="text-center"
                        style="font-size: 10pt; color: #7C2B18; margin-top: 20px; font-weight: bold; ">Terima Kasih</p>
                    <p class="text-center"
                        style="font-size: 10pt; color: #7C2B18; margin-top: -8px; font-weight: bold; ">Semoga Harimu
                        Menyenangkan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
    <script>
        var config = {
            apiKey: "{{ config('services.firebase.api_key') }}",
            authDomain: "{{ config('services.firebase.auth_domain') }}",
            databaseURL: "{{ config('services.firebase.database_url') }}",
            storageBucket: "{{ config('services.firebase.storage_bucket') }}",
        };
        firebase.initializeApp(config);
        var database = firebase.database();

        var btnSelesai = document.getElementById("btnSelesai");

        // // Tambahkan event listener
        // btnSelesai.addEventListener("click", function () {
        //     // Tampilkan alert
        //     alert("Transaksi sedang diproses, silahkan ditunggu :)");
        // });

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

        document.addEventListener('DOMContentLoaded', function () {
            // Dapatkan referensi ke data transaksi "trans1" dari Firebase Database
            const transaksiRef = firebase.database().ref('transaksi/trans1');

            // Ambil nilai-nilai yang diperlukan dari data transaksi
            transaksiRef.once('value', function (snapshot) {
                const transaksiData = snapshot.val();

                // Cek apakah data transaksi tersedia
                if (transaksiData) {
                    // Mengisi waktu transaksi
                    const waktuElemen = document.getElementById('tgl_transaksi');
                    waktuElemen.textContent = transaksiData.tgl_transaksi;

                    // Mengisi ID transaksi
                    const idTransaksiElemen = document.getElementById('id-transaksi');
                    idTransaksiElemen.textContent = "" + snapshot.key;

                    // Mengisi detail transaksi
                    const strukBody = document.querySelector('.struk-body');
                    Object.entries(transaksiData.detail_trx).forEach(([key, value]) => {
                        const itemElement = document.createElement('div');
                        itemElement.classList.add('struk-item');
                        itemElement.innerHTML = `
                            <span>${value.nama_menu}</span><span class="text-right">Rp ${value.harga}</span>
                        `;
                        strukBody.appendChild(itemElement);

                        const detailElement = document.createElement('div');
                        detailElement.classList.add('struk-detail');
                        detailElement.innerHTML = `
                            <span>${value.qty} x Rp ${value.harga}</span>
                        `;
                        strukBody.appendChild(detailElement);
                    });

                    // Mengisi total pembayaran
                    const totalElemen = document.createElement('div');
                    totalElemen.classList.add('struk-total');
                    totalElemen.innerHTML = `
                        <span>Total</span><span class="text-right">Rp ${transaksiData.total_bayar}</span>
                    `;
                    totalElemen.style.borderTop = '1px dashed #000';
                    strukBody.appendChild(totalElemen);

                    // Mengisi jumlah pembayaran
                    const bayarElemen = document.createElement('div');
                    bayarElemen.classList.add('struk-total');
                    bayarElemen.innerHTML = `
                        <span>Bayar</span><span class="text-right">Rp ${transaksiData.nominal}</span>
                    `;
                    bayarElemen.style.borderTop = '1px dashed #000';
                    strukBody.appendChild(bayarElemen);

                    // Mengisi kembalian
                    const kembalianElemen = document.createElement('div');
                    kembalianElemen.classList.add('struk-total');
                    kembalianElemen.innerHTML = `
                        <span>Kembalian</span><span class="text-right">Rp ${transaksiData.kembalian}</span>
                    `;
                    kembalianElemen.style.borderTop = '1px dashed #000';
                    strukBody.appendChild(kembalianElemen);
                } else {
                    // Tampilkan pesan kesalahan jika data transaksi tidak tersedia
                    alert('Data transaksi tidak tersedia!');
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            const popup = document.getElementById('popup');
            const openBtn = document.getElementById('open-popup-btn');
            const closeBtn = document.getElementById('closeBtn');
            const batalButton = document.getElementById('batal');

            // Fungsi untuk membuka popup
            function openPopup() {
                popup.style.display = 'block';
            }

            // Fungsi untuk menutup popup
            function closePopup() {
                popup.style.display = 'none';
            }

            // Event listener untuk tombol buka
            openBtn.addEventListener('click', openPopup);

            // Event listener untuk tombol tutup
            closeBtn.addEventListener('click', closePopup);
            payBtn.addEventListener('click', closePopup);

            closeBtn.addEventListener('click', function () {
                closePopup();
            });
        });
    </script>
</body>

</html>
