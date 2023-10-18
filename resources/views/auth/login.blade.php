
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: grey;
        }
    </style>
    <title>MBoss</title>
    <link rel="icon" href="{{asset('assets/img/M-BOSS-Logo-crop.png')}}" type="image/gif" sizes="20x20">
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
            <div class="card auth-form">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('assets/img/M-BOSS-Logo-crop.png')}}" alt="login" style="width: 200px;">
                    </div>  
                    <h3 class="text-center">User Login</h3>
                    <p class="text-center">Fill the form to login</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mt-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="d-grid gap-2 my-4">
                            <button class="btn" type="submit" style="background: #FFCA33;">Login</button>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>