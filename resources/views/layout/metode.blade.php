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
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">METODE PEMBAYARAN</a>
        </div>
    </nav>
    <div class="text-below-navbar" style="font-size: 11pt; font-weight: bold; color: #BA7237; padding-left: 40px">
        <p>Silahkan pilih metode pembayaran yang tersedia</p>
    </div>
    <div class="logo">
        <img src="{{ asset('starling.png')}}" width="70%" height="70%">
    </div>
</head>
<body>
    <div class="column">
        <div class="card" style="margin-top: 20px; width: 330px; height: 50px; text-align: left; padding-left: 13px; line-height: 45px;">
        </div>
    </div>
    <div class="column">
        <div class="card" style="margin-top: 95px; width: 330px; height: 50px; text-align: left; padding-left: 13px; line-height: 45px;">
        </div>
    </div>
    <div class="column">
        <div class="card" style="margin-top: 170px; width: 330px; height: 50px; text-align: left; padding-left: 13px; line-height: 45px;">
        </div>
    </div>
    <div class="column">
        <div class="card" style="margin-top: 243px; width: 330px; height: 50px; text-align: left; padding-left: 13px; line-height: 45px;">
        </div>
    </div>
</body>
</html>
