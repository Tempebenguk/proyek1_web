<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
    .navbar-custom {
      background-color: #ba7237; /* Change background color */
    }
    .navbar-brand {
      color: #fff; /* Change text color */
      font-weight: bold;
      font-family: 'Franklin Gothic Medium';
    }
    img {
      display: block;
      align-items: center;
      opacity: 0.4;
      margin: auto;
    }
    .image{
      margin-top: 10px;
      width: auto;
      height: 100px;
      opacity: 1;
    }
    .logo{
      display: flex;
      justify-content: center;
      margin: 200px 20px 20px 45px;
      position: absolute;
    }
    .column{
      float: left;
      width: 50%;
      justify-content: center;
      margin-left: 8%;
    }
    .card{
      margin-top: 25px;
      margin-left: 5px;
      height: auto;
      border-radius: 9px;
      border: 3px solid #BA7237;
      position: absolute
    }
    /* Button Tambah */
    .btn-tambah{
        border-radius: 23px;
        padding: 0;
        margin-top: 148px;
        width: 115px;
        height: 30px;
        position: absolute;
        right: 35px;
        background-color: #00E432;
        border: none;
    }
    .btn-pesan{
        border-radius: 23px;
        padding: 0;
        margin-top: 370px;
        width: 330px;
        height: 40px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        background-color: #00E432;
        border: none;
    }
    /* Check Box */
    .form-check-input[type="checkbox"] {
        border: 2px solid #BA7237;
        border-radius: 5px;
        z-index: 1;
    }
    .form-check-input[type="checkbox"]:hover {
        box-shadow: 0 0 5px #BA7237;
    }
    .form-check-input[type="checkbox"]:active {
        box-shadow: inset 0 0 5px #BA7237;
    }
    .minus, .plus {
    cursor: pointer;
    padding: 3px 10px;
    background-color: #00E432;
    color: #fff;
    border-radius: 50%;
    font-weight: bold;
    width: 25px;
    height: 25px;
    padding-left: 10px;
    }

    .number {
    margin: 0 10px;
    font-size: 20px;
    font-weight: bold;
    color: #BA7237;
    }
    /* styles.css */
    .input-group-quantity {
        display: flex;
        align-items: center;
        padding-left: 10px;
        margin-top: -20px;
    }

    #decrement, #increment {
        padding: 1px 7px;
        background-color: #00E432;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 900;
        border-radius: 50%;
    }

    #input {
        padding: 3px;
        width: 20px;
        text-align: center;
        border: none;
        border-radius: none;
        margin: 0 10px;
        color: #BA7237;
        font-weight: bold;
    }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PEMESANAN</a>
        </div>
    </nav>
</head>
<body>
    <div class="logo">
        <img src="{{ asset('starling.png')}}" width="70%" height="70%">
    </div>
    <div class="column">
        <div class="card" style="margin-top: 10px; width: 330px; height: 130px; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);">
            <p class="card-text" style="font-size: 10pt; font-weight: 800; color: #BA7237; padding-left: 13px; margin-top: 5px; margin-bottom: -3px;">Kopi Good Day</p>
            <span class="card-text" style="font-size: 13pt; font-weight: 900; color: #7C2B18; padding-left: 13px; margin-top: 3px;">Rp 5.000</span>
            <div class="mb-3 form-check d-flex ">
                <div class="form-check" style="margin-left: -20px; display: flex; padding-left: 10px; margin-top: 4px;">
                    <label class="form-check-label" for="exampleCheck1" style="font-size: 8pt; font-weight: 800; color: #BA7237; margin-top: 3px;">Panas</label>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" style="margin-left: 5px;">
                </div>
                <div class="form-check" style="margin-left: -10px; display: flex; margin-top: 4px;">
                    <label class="form-check-label" for="exampleCheck2" style="font-size: 8pt; font-weight: 800; color: #BA7237; margin-top: 3px;">Dingin</label>
                    <input type="checkbox" class="form-check-input" id="exampleCheck2" style="margin-left: 5px;">
                </div>
            </div>
            <div style="margin-top: -80px;">
                <img src="kopi.png" style="width: 130px; height: 90px; margin-right: 15px; opacity: 4;">
            </div>
            <div class="input-group input-group-quantity">
                <button id="decrement">-</button>
                <input type="number" id="input" value="0" readonly>
                <button id="increment">+</button>
                <script>
                    let counter = 0;

                    function increment() {
                        counter++;
                    }

                    function decrement() {
                        counter--;
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
                        if (input.value > 0) {
                            decrement();
                        }
                        input.value = get();
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <p style="padding-left: 40px; margin-top: 145px; color: #BA7237; font-weight: 800; font-size: 10pt;">Ada Tambahan?</p>
        <p style="padding-left: 40px; margin-top: -25px; color: #BA7237; opacity: 1; font-size: 7pt;">Anda masih bisa memesan menu lainnya</p>
        <button class="btn btn-primary btn-tambah" type="button" style="font-size: 8pt; font-weight: bold;">TAMBAH</button>
    </div>
    <div class="column">
        <div class="card" style="margin-top: 0px; width: 330px; height: 100px; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);">
            <p class="card-text" style="font-size: 10pt;  margin-left: 10px; color: #BA7237; opacity: 0.8; margin-top: 5px;">Catatan...</p>
        </div>
    </div>
    <div class="column">
        <div class="card" style="margin-top: 115px; width: 330px; height: 50px; text-align: left; padding-left: 13px; line-height: 45px; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);">
            <p class="card-text" style="font-size: 10pt; font-weight: bold; color: #BA7237;">Total Pesanan Anda</p>
            <span class="card-text" style="font-size: 11pt; font-weight: bold; color: #00E432; position: absolute; right: 13px; top: 50%; transform: translateY(-50%);">Rp 5.000</span>
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto" style="position: relative;">
        <button class="btn btn-primary btn-pesan" type="button" style="font-size: 9pt; font-weight: bold;">BAYAR PESANAN ANDA</button>
    </div>
</body>
</html>
