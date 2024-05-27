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
            max-width: 125px;
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
                        <select for="kategori"
                            style="border: none; appearance: none; color: #BA7237; background-color: #fff; outline: none; justify;">
                            <option value="makanan">Makanan</option>
                            <option value="minuman">Minuman</option>
                            <option value="snack">Snack</option>
                        </select>
                    </div>
                    <!-- Pencarian -->
                    <div class="cari">
                        <div class="search">
                            <input class="search-input" type="search" placeholder="cari">
                            <button class="search-button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="card" data-selected="false">
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
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h5></h5>
                <div id="card-container"></div>
            </div>
        </div>
    </div>

    <div class="fixed-btn-container">
        <a href="{{ route('pemesanan') }}">
            <button class="btn btn-pesan"
                style="font-family: 'Fredoka', sans-serif; font-weight: bold; max-width: 1000px;">
                TAMBAH PESANAN
            </button>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq">
        </script>

    <script>
        function addOrderCard(title, price, imageSrc) {
            const cardContainer = document.getElementById('card-container');
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
            cardContainer.appendChild(newCard);

            // Add event listeners to the new increment and decrement buttons
            const newIncrementBtn = newCard.querySelector('.increment');
            const newDecrementBtn = newCard.querySelector('.decrement');
            const newInput = newCard.querySelector('.input');

            newIncrementBtn.addEventListener('click', () => {
                newInput.value = parseInt(newInput.value) + 1;
            });
            newDecrementBtn.addEventListener('click', () => {
                if (newInput.value > 0) {
                    newInput.value = parseInt(newInput.value) - 1;
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            const addButtonElements = document.querySelectorAll('.btn-input');
            const orderButtonContainer = document.querySelector('.fixed-btn-container');

            addButtonElements.forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    const card = button.closest('.card');
                    const title = card.querySelector('.card-title').innerText;
                    const price = card.querySelector('.card-text').innerText.replace('Rp ', '');
                    const imageSrc = card.querySelector('img').src;
                    addOrderCard(title, price, imageSrc);
                    orderButtonContainer.style.display = 'block';
                });
            });
        });
    </script>

</body>

</html>