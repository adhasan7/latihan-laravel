<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <style>
   
    </style>
    <!-- Dynamic Name -->
     <div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
      </ul>
    </div>
</nav>
<div class="container mb-5">
    <h2>Selamat datang, {{ $name }}, anda adalah {{ $role }}</h2>
    <!-- Heading -->
    <h1>Hello, world!</h1>
    @if($role == 'admin')
    <a href="#">Selamat datang di halaman admin</a>
@elseif($role == 'staff')
    <a href="#">Selamat datang di gudang</a>
@endif

<h2>Daftar buah </h2>

<table border="1" style="width: 50%; text-align: center; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="border-bottom: 2px solid black;">No</th>
            <th style="border-bottom: 2px solid black;">Nama Buah</th>
        </tr>
    </thead>
    <tbody>
        @foreach($buah as $index => $buahitem)
        <tr>
            <td>{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
            <td>{{ $buahitem }}</td> <!-- Menampilkan nama buah -->
        </tr>
        @endforeach
    </tbody>
</table>



  
    
</div>
  </div>
</div>
  


    

    

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
