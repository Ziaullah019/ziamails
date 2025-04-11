<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Zia's App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form method="post" action="{{route('login.save')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" class="form-check-input">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>

                <div class="card-footer text-center">
                    <a href="" class="text-decoration-none">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
