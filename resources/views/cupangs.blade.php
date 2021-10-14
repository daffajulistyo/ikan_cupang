<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD CUPANG</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="https://image.flaticon.com/icons/png/512/1318/1318634.png" width="40px"> IKAN CUPANG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Create Fish</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/cupangs">View Fish</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5">
        <h1><center> <img src="https://image.flaticon.com/icons/png/512/1318/1318634.png" width="35px" height="35px"> Fish List</center></h1>
        <br></br> 
      
      
        <table class="table">
            <thead style="background-color:#ADD8E6">
                <tr>
                    <th>#</th>
                    <th>Jenis Ikan</th>
                    <th>Harga</th>
                    <th>Penjual</th>
                    <th>Tanggal Dibeli</th>
                    <th>Foto Ikan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cupangs as $cupang)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cupang->jenis_ikan}}</td>
                    <td>{{$cupang->harga}}</td>
                    <td>{{$cupang->penjual}}</td>
                    <td>{{$cupang->created_at}}</td>
                    <td> <img src="{{$cupang->foto_ikan}}" width="80px"> </td>
                      
                      <td>
                        
                        <form action="/delete/{{$cupang->id}}" method="POST">
                        <a href="/edit/{{$cupang->id}}" class="btn btn-success"> <img src="https://image.flaticon.com/icons/png/512/1159/1159633.png" width="18px" height="18px"> Edit </a>
                          @csrf 
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data?')"> <img src="https://image.flaticon.com/icons/png/512/3672/3672283.png" width="18px" height="18px"> Delete </button>
                          <!-- <a href="/delete/{{$cupang->id}}" class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</a> -->
                        </form>
                       

                      </td>
                  </tr>

                @endforeach
            </tbody>
        </table>
    </div>  
</body>
</html>