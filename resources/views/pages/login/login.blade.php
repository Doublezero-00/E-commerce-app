<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            position: relative;
            overflow: hidden;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("{{ asset('images/bg.jpg') }}") no-repeat center center/cover;
            filter: blur(8px);
            z-index: 1;
        }

        .login-container {
            position: relative;
            z-index: 2;
            max-width: 420px;
            width: 100%;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9); 
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.25);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: bold;
            color: #222;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 6px rgba(0,123,255,0.3);
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert {
            font-size: 14px;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="background"></div>

    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ route('auth.loginstore') }}" method="POST">
            @csrf

            @if(session('Success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="form-group mb-3">
                <label for="email">Email address</label>
                <input type="email" 
                       class="form-control" 
                       id="email" 
                       name="email" 
                       placeholder="Enter email" 
                       required>
            </div>

            <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" 
                       class="form-control" 
                       id="password" 
                       name="password" 
                       placeholder="Enter your password" 
                       required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
