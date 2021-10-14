<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD CUPANG</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="https://image.flaticon.com/icons/png/512/1318/1318634.png" width="40px"> IKAN CUPANG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Create Fish</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cupangs">View Fish</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5" style="width: 33%;">
        <form class="mb-4" action="/update/{{$cupang->id}}" method="POST">
            @csrf
            @method('PATCH')
            <h1 class="text-center mb-4">Edit Fish</h1>
            <div class="form-group">
                <label for="">Jenis Ikan</label>
                <input value="{{$cupang->jenis_ikan}}" type="text" class="form-control" name="jenis_ikan">
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input value="{{$cupang->harga}}" type="number" class="form-control" name="harga">
            </div>
            <div class="form-group">
                <label for="">Penjual</label>
                <input value="{{$cupang->penjual}}" type="text" class="form-control" name="penjual">
            </div>
            <div class="form-group">
                <label for="">Foto Ikan</label>
                <input value="{{$cupang->foto_ikan}}" type="text" class="form-control" name="foto_ikan">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
<script src="{{asset('scripts/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('scripts/bootstrap.min.js')}}"></script>
</body>
</html>