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
        body {
            font-family: "Fredoka", sans-serif;
        }

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
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0.25;
            pointer-events: none;
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
            background-color: #00E432;
            outline: none;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            border: 1.5px solid #BA7237;
            border-color: #7C2B18;
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            width: 250px;
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
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-family: Fredoka, sans-serif;">OUR MENU</a>
        </div>
    </nav>

    <div class="logo">
        <img src="starling.png" alt="Logo">
    </div>

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
        <a href="{{ route('pemesanan') }}">
            <button class="btn btn-pesan"
                style="font-family: 'Fredoka', sans-serif; font-weight: bold; max-width: 1000px;">
                TAMBAH PESANAN
            </button>
        </a>
    </div>

    <div id="order-container">
        <!-- Order cards will be displayed here -->
    </div>

    <!-- code js -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq">
        </script>

    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
    <script>

        const pesanan = [];

        document.addEventListener('DOMContentLoaded', function () {
            const orderButtonContainer = document.querySelector('.fixed-btn-container');
            const cardContainer = document.getElementById('menu-container');

            // Function to add order card
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

            // Function to create card HTML
            function createCard(menuKey, menuData) {
                return `
            <div class="col-6" id="${menuKey}">
                <div class="card">
                    <img src="${menuData.gambar_menu || 'img/image1.png'}" class="image img-fluid" alt="${menuData.nama_menu}">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 10pt; color: #BA7237;">${menuData.nama_menu}</h5>
                        <p class="card-text" style="font-size: 15pt; font-weight: bold; color: #7C2B18;">Rp. ${menuData.harga}</p>
                        <a href="#" class="btn btn-input btn-primary btn-flex">TAMBAH</a>
                    </div>
                </div>
            </div>`;
            }

            // Function to add event listeners to "TAMBAH" buttons
            function addEventListenersToButtons() {
                const addButtonElements = document.querySelectorAll('.btn-input');
                addButtonElements.forEach(button => {
                    button.removeEventListener('click', handleAddButtonClick);
                    button.addEventListener('click', handleAddButtonClick);
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

                $.each(value, function (index, value) {
                    if (value) {
                        kategoriDropdown.append('<option value="' + index + '">' + value.nama_kategori + '</option>');
                    }
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
        });


        // Function to display order cards
        function displayOrderCards(pesanan) {
            const orderContainer = document.getElementById('order-container');
            orderContainer.innerHTML = ''; // Clear the container

            pesanan.forEach(item => {
                const card = document.createElement('div');
                card.classList.add('card', 'mb-3');
                card.innerHTML = `
            <div class="card-body d-flex justify-content-between align-items-center">
                <div class="text-container">
                    <p class="card-text" style="font-size: 10pt; font-weight: 800; color: #BA7237;">${item.title}</p>
                    <span class="card-text" style="font-size: 13pt; font-weight: 900; color: #7C2B18; margin-top: 5px;">Rp ${item.price}</span>
                    <img src="${item.imageSrc}" class="img-fluid" style="max-width: 130px; height: auto; opacity: 1;">
                </div>
            </div>
        `;
                orderContainer.appendChild(card);
            });
        }

        // Panggil fungsi displayOrderCards saat pesanan berubah atau saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function () {
            displayOrderCards(pesanan);
        });


    </script>
</body>

</html>