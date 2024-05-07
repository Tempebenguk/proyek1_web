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
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PEMBAYARAN</a>
        </div>
    </nav>
</head>
<body>
    <div class="logo">
        <img src="{{ asset('starling.png')}}" width="70%" height="70%">
    </div>
</body>
</html>
