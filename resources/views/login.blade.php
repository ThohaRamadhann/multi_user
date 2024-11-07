<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMx9sE5O1cF4gF5l1g3e3F5l1g3e3F5l1g3e3F" crossorigin="anonymous">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        
        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .login-container h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }
        
        .login-container .form-label {
            font-weight: bold;
        }
        
        .form-control {
            padding-left: 40px;
        }
        
        .form-control-icon {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 20px;
            color: #007bff;
        }
        
        .alert-danger ul {
            margin: 0;
            padding-left: 20px;
        }
        
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        
        .btn-primary:hover {
            background-color: #0056b3;
        }
        
        .form-group {
            position: relative;
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="login-container">
            <h1>Login</h1>

            <!-- Error message display -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <i class="fas fa-envelope form-control-icon"></i>
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control"
                               placeholder="Enter your email" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <i class="fas fa-lock form-control-icon"></i>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                </div>

                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                </div>

                <div class="text-center">
                    <a href="#">Forgot your password?</a>
                </div>
            </form>
        </div>
    </div>

    <!-- JS only -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz4fnFO9gyb9l4wvjlTC4jT6XKn3tEK3Jvr7WjI4zpkXusV0v5YmID5lT1Q" crossorigin="anonymous">
    </script>
    <script