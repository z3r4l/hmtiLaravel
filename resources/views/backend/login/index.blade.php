<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
</head>
<style>
    .login-btn {
        background-color: yellow;
        font-weight: bold;
    }

    .login-btn:hover {
        background-color: greenyellow;
    }
</style>

<body class="text-center">
    @if (session()->has('success'))
    <div class="alert alert-success d-flex align-items-center mt-5" role="alert">
        <i class="bi bi-check-circle-fill"></i>
        <div>
            {{ session('success') }}
        </div>
    </div>
    @endif
    @if (session()->has('loginError'))
    <div class="alert alert-danger d-flex align-items-center mt-5" role="alert">
        <i class="bi bi-exclamation-diamond-fill"></i>
        <div>
            {{ session('loginError') }}
        </div>
    </div>
    @endif
    <main class="form-signin w-100 m-auto">
        <form action="/login" method="post">
            @csrf
            <img class="mb-2" src="img/logoHMTI.svg" alt="" width="250" height="250">
            <h1 class="h3 mb-3 fw-bold text-uppercase">Login TO Dashboard</h1>
            <div class="form-floating">
                <input type="email" class="form-control @error('email')
                    is-invalid
                @enderror" id="email" placeholder="Email" name="email" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                    required>
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg login-btn text-uppercase" type="submit">LogIn</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>