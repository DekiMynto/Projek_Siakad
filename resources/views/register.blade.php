<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
    
</head>

<body style="background: #eef0f1">
    <div class="row justify-content-center mt-5" style="margin-top: 10%">
        <div class="col-lg-3">
            <div class="card" style="margin-top:23%">
                <div class="card-header" style="background-color: #3b3838"> 
                    <div  style="text-align:center">
                    <h1  style="color: white" class="card-title" style="text-align:center">Daftar Akun</h1>
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div> @endif
                    <form action="{{ route('register') }}"
        method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-tabel">Nama</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Ketik Namamu" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-tabel">Masukkan Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="contoh@gmail.com"
            required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-tabel">Masukkan Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
    </div>
    <div class="mb-3">
        <div class="d-grid">
            <button id="togglePassword" class="btn btn-primary" style="background: #3b3838">Register</button>
            <span class="message">Sudah punya akun? <a href="{{ route('login') }}">Login sekarang</a></span>
        </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    </body>
    </body>

</html>
