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
    .btn-tambah{
        border-radius: 23px;
        padding: 0;
        margin-top: 135px;
        width: 130px;
        height: 35px;
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
        <div class="card" style="margin-top: 25px; width: 330px; height: 100px;">
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary btn-tambah" type="button" style="font-size: 9pt; font-weight: bold;">TAMBAH</button>
    </div>
    <div class="column">
        <div class="card" style="margin-top: 180px; width: 330px; height: 100px;">
            <p class="card-text" style="font-size: 10pt;  margin-left: 10px; color: #BA7237; opacity: 0.8; margin-top: 5px;">Catatan...</p>
        </div>
    </div>
    <div class="column">
        <div class="card" style="margin-top: 300px; width: 330px; height: 50px; text-align: left; padding-left: 13px; line-height: 45px;">
            <p class="card-text" style="font-size: 10pt; font-weight: bold; color: #BA7237;">Total Pesanan Anda</p>
            <span class="card-text" style="font-size: 11pt; font-weight: bold; color: #00E432; position: absolute; right: 13px; top: 50%; transform: translateY(-50%);">Rp 5.000</span>
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto" style="position: relative;">
        <button class="btn btn-primary btn-pesan" type="button" style="font-size: 9pt; font-weight: bold;">BAYAR PESANAN ANDA</button>
    </div>
</body>
</html>
