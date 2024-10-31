<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<div class="test-drive-form-container">
    <form action="{{ route('regis.drive') }}" method="post" class="test-drive-form">
        @csrf
        <input type="hidden" name="form_type" value="dang_ky_lai_thu">

        <div class="form-header">
            <h2>Đăng Ký Lái Thử</h2>
            <p>Trải nghiệm cảm giác lái đẳng cấp cùng Hyundai</p>
        </div>

        <div class="form-body">
            <div class="form-group">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="your-name" required placeholder="Họ và tên">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <i class="fas fa-phone"></i>
                    <input type="tel" name="your-phone" required placeholder="Số điện thoại">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text" name="your-address" required placeholder="Địa chỉ">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <i class="fas fa-car"></i>
                    <select name="your-car" required class="car-select">
                        <option value="" disabled selected>Chọn dòng xe bạn muốn lái thử</option>
                        @foreach ($products as $car)
                            <option value="{{ $car->id }}">{{ $car->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <i class="fas fa-comment-alt"></i>
                    <textarea name="your-message" placeholder="Lời nhắn của bạn (thời gian mong muốn lái thử, yêu cầu đặc biệt...)"></textarea>
                </div>
            </div>
        </div>

        <div class="form-footer">
            <button type="submit" class="submit-btn">
                <i class="fas fa-paper-plane"></i>
                Đăng ký ngay
            </button>
        </div>
    </form>
</div>

<style>
.test-drive-form-container {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
}

.test-drive-form {
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    padding: 40px;
    transition: transform 0.3s ease;
}

.test-drive-form:hover {
    transform: translateY(-5px);
}

.form-header {
    text-align: center;
    margin-bottom: 40px;
}

.form-header h2 {
    color: #002c5f;
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 10px;
}

.form-header p {
    color: #666;
    font-size: 16px;
}

.form-body {
    display: grid;
    gap: 20px;
}

.form-group {
    position: relative;
}

.input-group {
    position: relative;
    display: flex;
    align-items: center;
}

.input-group i {
    position: absolute;
    left: 15px;
    color: #002c5f;
    font-size: 18px;
}

.input-group input,
.input-group select,
.input-group textarea {
    width: 100%;
    padding: 15px 15px 15px 45px;
    border: 2px solid #eee;
    border-radius: 10px;
    font-size: 16px;
    transition: all 0.3s ease;
}

.input-group textarea {
    height: 120px;
    resize: none;
}

.input-group input:focus,
.input-group select:focus,
.input-group textarea:focus {
    border-color: #002c5f;
    box-shadow: 0 0 0 3px rgba(0,44,95,0.1);
    outline: none;
}

.car-select {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23002c5f'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 15px center;
    background-size: 20px;
}

.form-footer {
    margin-top: 30px;
    text-align: center;
}

.submit-btn {
    background: #002c5f;
    color: white;
    border: none;
    padding: 15px 40px;
    border-radius: 30px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.submit-btn i {
    font-size: 16px;
}

.submit-btn:hover {
    background: #00408a;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,44,95,0.2);
}

/* Responsive */
@media (max-width: 768px) {
    .test-drive-form {
        padding: 30px 20px;
    }

    .form-header h2 {
        font-size: 24px;
    }

    .input-group input,
    .input-group select,
    .input-group textarea {
        padding: 12px 12px 12px 40px;
        font-size: 14px;
    }

    .submit-btn {
        width: 100%;
        justify-content: center;
    }
}

/* Animation */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.test-drive-form {
    animation: fadeIn 0.5s ease;
}
</style>
