<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
 
</head>
<body>
    <div class="container">
    <h1>Selamat!!,</h1>
    <p>Anda telah membeli barang <strong>{{$product->product_name}}</strong> </p>
    <p>Thank you,</p>
    <strong>Coding Studio</strong>
    </div>

<script src="{{asset('script/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('script/bootstrap.min.js')}}"></script>
</body>
</html>