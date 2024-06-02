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

    <!-- Memuat file JavaScript Bootstrap -->



    <style>
        body {
            font-family: "Fredoka", sans-serif;
            overflow-x: hidden;
        }

        .rincian {
            font-family: "Fredoka", sans-serif;
            font-weight: bold;
            font-size: 14pt;
            color: #7C2B18;
        }

        img {
            display: block;
            margin: auto;
        }

        .image {
            margin-top: 10px;
            width: auto;
            height: 100px;
        }

        .container {
            max-width: 100%;
            height: auto;
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
            opacity: 0.25;
            pointer-events: none;
            z-index: 0;
        }

        .card {
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            max-width: 150px;
            border-radius: 9px;
            border: 3px solid #BA7237;
            margin: 10%;
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

        .btn-pesan {
            font-family: "Fredoka", sans-serif;
            background-color: #00E432;
            outline: none;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            /* border: 1.5px solid #00E432; */
            /* border-color: #7C2B18; */
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            width: 250px;
        }

        .btn-bayar {
            background-color: #00E432;
            outline: none;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            /* border: 1.5px solid #00E432; */
            /* border-color: #7C2B18; */
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            width: 250px;
            font-family: 'Fredoka', sans-serif;
        }

        .btn-batal {
            background-color: #ff0000;
            outline: none;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            /* border: 1.5px solid #00E432; */
            /* border-color: #7C2B18; */
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            width: 250px;
            font-family: 'Fredoka', sans-serif;
        }

        .btn-flex {
            display: flex;
            justify-content: center;
        }

        .navbar-custom {
            background-color: #ba7237;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
            font-family: 'Franklin Gothic Medium';
        }

        .dropdown {
            appearance: none;
            border: none;
            padding: 9px 15px;
            color: #fff;
            border: 2px solid #BA7237;
            border-radius: 50px;
        }

        .d-flex {
            display: flex;
        }

        .align-items-center {
            align-items: center;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .ms-auto {
            margin-left: auto;
        }

        .search {
            --padding: 8px;
            display: flex;
            align-items: center;
            padding: var(--padding);
            border-radius: 30px;
            background: #fff;
            border: 2px solid #BA7237;
            margin-right: -8px;
        }

        .search-input {
            font-size: 16px;
            color: #333333;
            margin-left: 14px;
            outline: none;
            border: none;
            background: transparent;
            max-width: 120px;
        }

        .search-input::placeholder {
            color: #BA7237;
        }

        .search-button {
            color: #BA7237;
            border: none;
            background-color: #fff;
            outline: none;
        }

        head,
        body {
            overflow-x: hidden;
        }

        .fixed-btn-container {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            display: none;
        }

        .row {
            margin-left: 0;
            margin-right: 0;
        }

        .col-6 {
            padding-left: 0;
            padding-right: 0;
        }

        .card-bawah {
            margin-top: 25px;
            border-radius: 9px;
            border: 3px solid #BA7237;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            max-width: 333px;
            background-color: #fff;
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
        }

        .card-bawah .card-bawah-body {
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .card-bawah .card-text {
            font-size: 10pt;
            font-weight: 800;
            color: #BA7237;
        }

        .card-bawah .card-text span {
            font-size: 13pt;
            font-weight: 900;
            color: #7C2B18;
            margin-top: 5px;
        }

        .card-bawah .mb-3.form-check {
            display: flex;
            flex-direction: row;
            justify-content: left;
        }

        .card-bawah .form-check {
            margin-top: 7px;
            margin-right: 20px;
            margin-left: -12px;
        }

        .card-bawah .form-check-input {
            margin-top: 7px;
            margin-right: 5px;
            margin-left: -12px;
        }

        .card-bawah .form-check-label {
            font-size: 8pt;
            font-weight: 800;
            color: #BA7237;
        }

        .card-bawah .input-group-quantity {
            display: flex;
            align-items: center;
            padding-left: 10px;
        }

        .card-bawah #decrement,
        .card-bawah #increment {
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

        .card-bawah #decrement:hover,
        .card-bawah #increment:hover {
            border: none;
        }

        .card-bawah #input {
            padding: 3px;
            width: 30px;
            text-align: center;
            border: none;
            color: #00E432;
            font-weight: bold;
            background-color: #fff;
            margin-top: 0px;
            margin-right: 20px;
        }

        .card-bawah .text-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .card-bawah .text-container p {
            margin-bottom: 0;
        }

        .card-bawah .text-container button {
            margin-left: auto;
        }

        .card-bawah img {
            max-width: 130px;
            height: auto;
        }

        @media (max-width: 576px) {
            .card-bawah .input-group-quantity {
                justify-content: left;
            }

            .card-bawah {
                overflow-y: auto;
                height: auto;
                width: 100%;
            }
        }

        .text-container-pesan {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin: 15px;
        }

        .text-container-pesan p {
            margin-bottom: 0;
        }

        .popup {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            background-color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            background-color: #fff;
            margin: 35% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            height: 53%;
            border-radius: 7px;
        }

        .close-btn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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
            font-size: 12px;
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
            <a class="navbar-brand" href="#" style="font-family: Fredoka, sans-serif;">OUR MENU</a>
        </div>
    </nav>

    <!-- <div class="logo">
        <img src="starling.png" alt="Logo">
    </div> -->

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <!-- Kategori -->
                    <div class="dropdown">
                        <select id="kategori-dropdown"
                            style="border: none; appearance: none; color: #BA7237; background-color: #fff; outline: none;">
                        </select>
                    </div>
                    <!-- Pencarian -->
                    <div class="cari ms-auto">
                        <div class="search">
                            <input class="search-input" type="search" placeholder="cari">
                            <button class="search-button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="menu-container" class="row">
        <!-- Cards akan dimasukkan di sini -->
    </div>


    <div class="fixed-btn-container">
        <button id="open-popup-btn" type="button" class="btn btn-pesan" data-bs-toggle="modal"
            data-bs-target="#exampleModal"
            style="font-family: 'Fredoka', sans-serif; font-weight: bold; max-width: 1000px;">
            TAMBAH PESANAN
        </button>
    </div>

    <div class="container">
        <div id="pesanan">
            <!-- Order cards will be displayed here -->
        </div>
    </div>

    <!-- Modal -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <!-- <span class="close-btn">&times;</span> -->

            <!-- bagian tambah pesanan -->
            <div class="grid-container">
                <div class="text1">ada tambahan?</div>
                <div class="text2">kamu masih bisa menambah pesanan lo</div>
            </div>

            <!-- Bagian catatan -->
            <div class="col-md-6 col-lg-5">
                <div>
                    <div>
                        <textarea placeholder="Catatan, misalnya : panas/dingin, gulanya sedikit dll..."
                            required></textarea>
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

                <!-- bagian button pembayaran -->
                <a href="{{ route('metode') }}">
                    <button id="pay-button" class="btn btn-bayar" style="font-family: 'Fredoka', sans-serif; margin-top: 25px; max-width: auto; justify-content: center;
            align-items: center;">BAYAR
                        PESANAN
                        ANDA</button>
                </a>
                <div class="close-btn">
                    <button id="pay-button" class="btn btn-batal" style="font-family: 'Fredoka', sans-serif; margin-top: 25px; max-width: auto; justify-content: center;
            align-items: center;">BATAL</button>
                </div>
            </div>
        </div>


    </div>

    <!-- code js -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq">
        </script>

    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const orderButtonContainer = document.querySelector('.fixed-btn-container');
            const cardContainer = document.getElementById('menu-container');
            const pesanan = []; // Array to store order data

            // Function to add order card
            function addOrderCard(title, price, imageSrc) {
                orderButtonContainer.style.display = 'block';
            }

            // Function to handle adding items to the order
            function handleAddButtonClick(event) {
                event.preventDefault();
                const button = event.target.closest('.btn-input');
                const card = button.closest('.card');
                const title = card.querySelector('.card-title').innerText;
                const price = card.querySelector('.card-text').innerText.replace('Rp ', '');
                const imageSrc = card.querySelector('img').src;
                addOrderCard(title, price, imageSrc);

                // Menyimpan data pesanan ke dalam array
                const pesananItem = { title, price, imageSrc };
                pesanan.push(pesananItem);
                console.log('Data pesanan:', pesanan);
            }

            // Function to add event listeners to "TAMBAH" buttons
            function addEventListenersToButtons() {
                const addButtonElements = document.querySelectorAll('.btn-input');
                addButtonElements.forEach(button => {
                    button.removeEventListener('click', handleAddButtonClick);
                    button.addEventListener('click', handleAddButtonClick);
                });
            }

            // Function to create card HTML
            function createCard(menuKey, menuData) {
                return `
                    <div class="col-6 card-item" data-category="${menuData.id_kategori}" id="${menuKey}">
                        <div class="card">
                            <img src="${menuData.gambar_menu || 'img/image1.png'}" class="image img-fluid" alt="${menuData.nama_menu}">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 10pt; color: #BA7237;">${menuData.nama_menu}</h5>
                                <p class="card-text" style="font-size: 15pt; font-weight: bold; color: #7C2B18;">Rp. ${menuData.harga}</p>
                                <a href="{{ route('send.value') }}" class="btn btn-input btn-primary btn-flex">TAMBAH</a>
                            </div>
                        </div>
                    </div>`;

                function addEventListenersToButtons() {
                    const addButtonElements = document.querySelectorAll('.btn-input');
                    addButtonElements.forEach(button => {
                        button.removeEventListener('click', handleAddButtonClick); // Remove existing listener to avoid duplication
                        button.addEventListener('click', handleAddButtonClick);
                    });
                }
            }

            // Function to filter cards based on category
            function filterCardsByCategory(categoryId) {
                const cards = document.querySelectorAll('.card-item');
                cards.forEach(card => {
                    if (categoryId === 'all' || card.getAttribute('data-category') === categoryId) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            // Initialize Firebase
            var config = {
                apiKey: "{{ config('services.firebase.api_key') }}",
                authDomain: "{{ config('services.firebase.auth_domain') }}",
                databaseURL: "{{ config('services.firebase.database_url') }}",
                storageBucket: "{{ config('services.firebase.storage_bucket') }}",
            };
            firebase.initializeApp(config);
            var database = firebase.database();

            // Get category data
            firebase.database().ref('kategori/').on('value', function (snapshot) {
                var value = snapshot.val();
                var kategoriDropdown = $('#kategori-dropdown');
                kategoriDropdown.empty(); // Clear the dropdown

                kategoriDropdown.append('<option value="all">Kategori</option>'); // Tambahkan opsi untuk semua kategori

                $.each(value, function (index, value) {
                    if (value) {
                        kategoriDropdown.append('<option value="' + index + '">' + value.nama_kategori + '</option>');
                    }
                });

                // Tambahkan event listener untuk dropdown kategori
                kategoriDropdown.on('change', function () {
                    filterCardsByCategory(this.value);
                });
            });

            // Referensi ke data menu di Firebase
            const menuRef = database.ref('menu');

            // Mendengarkan penambahan data
            menuRef.on('child_added', (snapshot) => {
                const menuKey = snapshot.key;
                const menuData = snapshot.val();
                console.log('Data yang diterima dari Firebase:', menuData); // Logging untuk debug

                // Tambahkan card baru ke container
                const menuContainer = document.getElementById('menu-container');
                menuContainer.innerHTML += createCard(menuKey, menuData);

                // Tambahkan event listener ke tombol "TAMBAH" baru
                addEventListenersToButtons();
            });

            // Mendengarkan perubahan data
            menuRef.on('child_changed', (snapshot) => {
                const menuKey = snapshot.key;
                const menuData = snapshot.val();
                console.log('Data yang diperbarui dari Firebase:', menuData); // Logging untuk debug

                // Perbarui card yang ada
                const menuCard = document.getElementById(menuKey);
                if (menuCard) {
                    menuCard.innerHTML = createCard(menuKey, menuData);
                    // Tambahkan event listener ke tombol "TAMBAH" yang diperbarui
                    addEventListenersToButtons();
                }
            });

            // Mendengarkan penghapusan data
            menuRef.on('child_removed', (snapshot) => {
                const menuKey = snapshot.key;
                console.log('Data yang dihapus dari Firebase:', menuKey); // Logging untuk debug

                // Hapus card dari container
                const menuCard = document.getElementById(menuKey);
                if (menuCard) {
                    menuCard.remove();
                }
            });

            function addOrderCard(title, price, imageSrc) {
                const existingCard = document.querySelector(`.card-bawah[data-title="${title}"]`);

                if (existingCard) {
                    // If card exists, increment the quantity
                    const quantityInput = existingCard.querySelector('#input');
                    quantityInput.value = parseInt(quantityInput.value) + 1;
                    pesanan.forEach(item => {
                        if (item.title === title) {
                            item.quantity += 1;
                        }
                    });
                } else {
                    // If card does not exist, create a new card
                    const orderCardHtml = `
            <div class="card-bawah" data-title="${title}">
                <div class="card-bawah-body d-flex justify-content-between align-items-center">
                    <div class="text-container-pesan">
                        <p class="card-text-pesan" style="font-size: 10pt; font-weight: 800; color: #BA7237;">${title}</p>
                        <span class="card-text" style="font-size: 13pt; font-weight: 900; color: #7C2B18; margin-top: 5px; margin-bottom: 10px;">Rp. ${price}</span>
                        <div class="input-group input-group-quantity">
                            <button id="decrement" onclick="decrementQuantity(this)">-</button>
                            <input type="number" id="input" value="1" readonly>
                            <button id="increment" onclick="incrementQuantity(this)">+</button>
                        </div>
                    </div>
                    <img src="${imageSrc}" class="img-fluid" style="max-width: 90px; height: auto; opacity: 1;">
                </div>
            </div>
        `;

                    document.getElementById('pesanan').insertAdjacentHTML('beforeend', orderCardHtml);

                    // Add to pesanan array
                    const pesananItem = { title, price: parseInt(price), quantity: 1, imageSrc };
                    pesanan.push(pesananItem);
                }
                orderButtonContainer.style.display = 'block';
            }

            function incrementQuantity(button) {
                console.log('Increment button clicked');
                const quantityInput = button.previousElementSibling;
                console.log('Current quantity:', quantityInput.value);
                quantityInput.value = parseInt(quantityInput.value) + 1;
                console.log('New quantity:', quantityInput.value);
            }

            function decrementQuantity(button) {
                console.log('Decrement button clicked');
                const quantityInput = button.nextElementSibling;
                console.log('Current quantity:', quantityInput.value);
                if (parseInt(quantityInput.value) > 1) {
                    quantityInput.value = parseInt(quantityInput.value) - 1;
                    console.log('New quantity:', quantityInput.value);
                } else {
                    const card = button.closest('.card-bawah');
                    card.remove();
                    console.log('Card removed');
                }
            }

            function handleAddButtonClick(event) {
                event.preventDefault();
                const button = event.target.closest('.btn-input');
                const card = button.closest('.card');
                const title = card.querySelector('.card-title').innerText;
                const price = card.querySelector('.card-text').innerText.replace('Rp. ', '');
                const imageSrc = card.querySelector('img').src;
                addOrderCard(title, price, imageSrc);

                // Menyimpan data pesanan ke dalam array
                const pesananItem = { title, price, imageSrc };
                pesanan.push(pesananItem);
                console.log('Data pesanan:', pesanan);
            }
        });

        // Event listener untuk tombol bayar
        document.getElementById('pay-button').addEventListener('click', function () {
            const totalPayment = pesanan.reduce((total, item) => total + (item.price * item.quantity), 0);
            const payment = parseInt(prompt("Masukkan jumlah pembayaran:"));
            const kembalian = payment - totalPayment;
            const date = new Date().toISOString().slice(0, 10);

            const detail_trx = {};
            pesanan.forEach((item, index) => {
                detail_trx[`men${index + 1}`] = {
                    nama_menu: item.title,
                    harga: item.price,
                    qty: item.quantity
                };
            });

            const orderData = {
                detail_trx: detail_trx,
                total_bayar: totalPayment,
                tgl_transaksi: date,
                // status: 1,  // Jika diperlukan
                // kembalian: kembalian,  // Jika diperlukan
                // nominal: payment  // Jika diperlukan
            };

            firebase.database().ref('transaksi').push(orderData)
                .then(() => {
                    alert('Pesanan berhasil dibayar!');
                    location.reload();
                })
                .catch(error => {
                    console.error('Error saving order:', error);
                });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const popup = document.getElementById('popup');
            const openBtn = document.getElementById('open-popup-btn');
            const closeBtn = document.querySelector('.close-btn');

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

            // Menutup popup saat klik di luar konten popup
            window.addEventListener('click', function (event) {
                if (event.target === popup) {
                    closePopup();
                }
            });
        });
    </script>
</body>
<footer>
    <div></div><br>
    <div></div><br>
    <div></div><br>
    <div></div><br>
</footer>

</html>