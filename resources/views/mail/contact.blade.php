<!DOCTYPE html>
<html>
<head>
    <title>Thông tin liên hệ mới</title>
</head>
<body>
    <h2>Thông tin liên hệ từ website Hyundai Hải Phòng</h2>
    <p><strong>Tên:</strong> {{ $contactData['name'] }}</p>
    {{-- <p><strong>Email:</strong> {{ $contactData['email'] }}</p> --}}
    <p><strong>Số điện thoại:</strong> {{ $contactData['mobile'] }}</p>
    <p><strong>Nội dung:</strong></p>
    <p>{{ $contactData['content'] }}</p>
</body>
</html>
