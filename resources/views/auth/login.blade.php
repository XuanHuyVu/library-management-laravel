<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-card .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 1.25rem;
            font-weight: bold;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>
    <title>Đăng nhập</title>
</head>
<body>
<div class="card login-card">
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                @error('email')
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2" style="font-size: 1.2rem; color: #dc3545;"></i>
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                @error('password')
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2" style="font-size: 1.2rem; color: #dc3545;"></i>
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>


{{--    <form action="{{ route('login') }}" method="POST">--}}
{{--        @csrf--}}
{{--        <div>--}}
{{--            <label for="email">Email:</label>--}}
{{--            <input type="email" id="email" name="email" value="{{ old('email') }}" required>--}}
{{--            @error('email')--}}
{{--            <span>{{ $message }}</span>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <label for="password">Mật khẩu:</label>--}}
{{--            <input type="password" id="password" name="password" required>--}}
{{--            @error('password')--}}
{{--            <span>{{ $message }}</span>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--        <button type="submit">Đăng nhập</button>--}}
{{--    </form>--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
