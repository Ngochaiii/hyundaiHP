<!DOCTYPE html>
<html>
<head>
    <title>404 - Không tìm thấy trang</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .error-container {
            text-align: center;
            padding: 40px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .error-code {
            font-size: 120px;
            font-weight: bold;
            color: #dc3545;
            margin: 0;
            line-height: 1;
        }

        .error-text {
            font-size: 24px;
            color: #343a40;
            margin: 20px 0;
        }

        .error-description {
            color: #6c757d;
            margin-bottom: 30px;
        }

        .back-home {
            display: inline-block;
            padding: 12px 24px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .back-home:hover {
            background: #0056b3;
        }

        .error-image {
            width: 300px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="error-container">
        {{-- <img src="{{ asset('images/404.png') }}" alt="404 Error" class="error-image"> --}}
        <h1 class="error-code">404</h1>
        <h2 class="error-text">Không tìm thấy trang</h2>
        <p class="error-description">
            Xin lỗi, trang bạn đang tìm kiếm không tồn tại hoặc đã bị di chuyển.
        </p>
        <a href="{{ url('/') }}" class="back-home">
            Quay về trang chủ
        </a>
    </div>
</body>
</html>
