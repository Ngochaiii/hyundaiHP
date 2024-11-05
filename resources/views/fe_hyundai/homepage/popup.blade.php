<style>
    .hyundai-promo-popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.9);
        width: 60%;
        max-width: 1200px;
        height: 70vh;
        max-height: 700px;
        background: white;
        display: flex;
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s ease;
        z-index: 9999;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    .hyundai-promo-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 9998;
    }

    .hyundai-promo-active .hyundai-promo-popup,
    .hyundai-promo-active .hyundai-promo-overlay {
        opacity: 1;
        visibility: visible;
    }

    .hyundai-promo-active .hyundai-promo-popup {
        transform: translate(-50%, -50%) scale(1);
    }

    .hyundai-promo-left {
        flex: 1;
        background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('/path-to-promo-image.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 40px;
        color: white;
    }

    .hyundai-promo-left h3 {
        font-size: 3rem;
        margin-bottom: 10px;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .hyundai-promo-left p {
        font-size: 1.5rem;
        margin-bottom: 20px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }

    .hyundai-promo-right {
        width: 450px;
        padding: 40px;
        background: white;
        overflow-y: auto;
    }

    .hyundai-promo-close {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: white;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
        z-index: 100;
    }

    .hyundai-promo-close:hover {
        transform: rotate(90deg);
    }

    .hyundai-promo-form-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .hyundai-promo-form-header img {
        height: 40px;
        margin-bottom: 20px;
    }

    .hyundai-promo-form-header h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #002c5f;
    }

    .hyundai-promo-form-header p {
        color: #666;
    }

    .hyundai-promo-form-group {
        margin-bottom: 20px;
    }

    .hyundai-promo-input-group {
        position: relative;
    }

    .hyundai-promo-input-group i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #002c5f;
    }

    .hyundai-promo-input-group input,
    .hyundai-promo-input-group select,
    .hyundai-promo-input-group textarea {
        width: 100%;
        padding: 12px 15px 12px 45px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 16px;
        transition: all 0.3s;
    }

    .hyundai-promo-input-group input:focus,
    .hyundai-promo-input-group select:focus,
    .hyundai-promo-input-group textarea:focus {
        border-color: #002c5f;
        outline: none;
        box-shadow: 0 0 0 4px rgba(0, 44, 95, 0.1);
    }

    .hyundai-promo-submit {
        width: 100%;
        padding: 15px;
        background: #002c5f;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .hyundai-promo-submit:hover {
        background: #00407a;
    }

    @media (max-width: 1024px) {
        .hyundai-promo-left {
            display: none;
        }

        .hyundai-promo-right {
            width: 100%;
        }
    }
</style>
<style>
    .hyundai-promo-left {
        flex: 1;
        background: url('/img/activity-social-banner.png');
        background-size: cover;
        background-position: bottom right;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    /* Hiệu ứng làm tối hơn cho background */
    .hyundai-promo-left::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at center, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.8) 100%);
        z-index: 1;
    }

    .hyundai-promo-left h3,
    .hyundai-promo-left p,
    .hyundai-promo-left .btn-learn-more {
        position: relative;
        z-index: 2;
    }

    .hyundai-promo-left h3 {
        font-size: 3.5rem;
        line-height: 1.2;
        margin-bottom: 20px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .hyundai-promo-left p {
        font-size: 1.75rem;
        line-height: 1.4;
        margin-bottom: 30px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        max-width: 80%;
    }

    .hyundai-promo-left .btn-learn-more {
        background: #002c5f;
        color: white;
        padding: 12px 30px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 1.1rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .hyundai-promo-left .btn-learn-more:hover {
        background: #004182;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    </style>
    <style>
        @media (max-width: 1024px) {
            .hyundai-promo-popup {
                width: 90%;
                height: auto;
                max-height: 90vh;
            }

            .hyundai-promo-left {
                padding: 30px;
                background: #002c5f; /* Màu nền thay thế khi không có ảnh */
            }

            .hyundai-promo-left h3 {
                font-size: 2.5rem;
            }

            .hyundai-promo-left p {
                font-size: 1.25rem;
                max-width: 100%;
            }

            .hyundai-promo-right {
                padding: 30px;
            }
        }

        @media (max-width: 768px) {
            .hyundai-promo-popup {
                width: 95%;
                flex-direction: column;
            }

            .hyundai-promo-left {
                padding: 20px;
                min-height: auto;
            }

            .hyundai-promo-left h3 {
                font-size: 2rem;
            }

            .hyundai-promo-left p {
                font-size: 1rem;
            }

            .hyundai-promo-left .btn-learn-more {
                padding: 10px 20px;
                font-size: 1rem;
            }

            .hyundai-promo-right {
                width: 100%;
                padding: 20px;
            }

            .hyundai-promo-form-header h2 {
                font-size: 20px;
            }

            .hyundai-promo-form-header p {
                font-size: 14px;
            }

            .hyundai-promo-input-group input,
            .hyundai-promo-input-group select,
            .hyundai-promo-input-group textarea {
                font-size: 14px;
                padding: 10px 15px 10px 40px;
            }
        }

        @media (max-width: 480px) {
            .hyundai-promo-popup {
                width: 100%;
                height: 100vh;
                max-height: 100vh;
                border-radius: 0;
            }

            .hyundai-promo-left {
                padding: 15px;
                background: linear-gradient(45deg, #002c5f, #004182); /* Gradient thay thế */
            }

            .hyundai-promo-left h3 {
                font-size: 1.75rem;
                margin-bottom: 15px;
            }

            .hyundai-promo-left p {
                font-size: 0.9rem;
                margin-bottom: 20px;
            }

            .hyundai-promo-left .btn-learn-more {
                width: 100%;
                text-align: center;
            }

            .hyundai-promo-right {
                padding: 15px;
            }

            .hyundai-promo-form-header {
                margin-bottom: 20px;
            }

            .hyundai-promo-form-header img {
                height: 30px;
            }
        }
        </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<div class="hyundai-promo-overlay"></div>
<div class="hyundai-promo-popup">
    <div class="hyundai-promo-left">
        <h3>Tầm nhìn & sứ mệnh</h3>
        <p>Hyundai đang phấn đấu trở thành Thương hiệu số 1 trong ngành Công nghiệp Ô tô tại Việt Nam</p>
        <a href="#" class="btn-learn-more">Tìm hiểu thêm</a>
    </div>

    <div class="hyundai-promo-right">
        <button class="hyundai-promo-close">&times;</button>

        <div class="hyundai-promo-form-header">
            <img src="{{asset('uploads/2022/03/logo-hyundai-htv.png')}}" alt="Hyundai">
            <h2>ĐĂNG KÝ LÁI THỬ</h2>
            <p>Trải nghiệm cảm giác lái đẳng cấp cùng Hyundai</p>
        </div>

        <form action="{{ route('regis.drive') }}" method="post" class="test-drive-form">
            @csrf
            <input type="hidden" name="form_type" value="khuyen_mai">

            <div class="hyundai-promo-form-group">
                <div class="hyundai-promo-input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="your-name" required placeholder="Họ và tên">
                </div>
            </div>

            <div class="hyundai-promo-form-group">
                <div class="hyundai-promo-input-group">
                    <i class="fas fa-phone"></i>
                    <input type="tel" name="your-phone" required placeholder="Số điện thoại">
                </div>
            </div>

            <div class="hyundai-promo-form-group">
                <div class="hyundai-promo-input-group">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text" name="your-address" required placeholder="Địa chỉ">
                </div>
            </div>

            <div class="hyundai-promo-form-group">
                <div class="hyundai-promo-input-group">
                    <i class="fas fa-car"></i>
                    <select name="your-car" required class="car-select">
                        <option value="" disabled selected>Chọn dòng xe bạn muốn lái thử</option>
                        @foreach ($products as $car)
                            <option value="{{ $car->id }}">{{ $car->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="hyundai-promo-form-group">
                <div class="hyundai-promo-input-group">
                    <i class="fas fa-comment-alt"></i>
                    <textarea name="your-message" placeholder="Lời nhắn của bạn (thời gian mong muốn lái thử, yêu cầu đặc biệt...)"></textarea>
                </div>
            </div>

            <button type="submit" class="hyundai-promo-submit">
                <i class="fas fa-paper-plane"></i>
                Đăng ký ngay
            </button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Show popup function
    function showPopup() {
        const POPUP_TIMEOUT = 3 * 60 * 1000; // 3 phút
        const lastShown = localStorage.getItem('hyundaiPromoLastShown');
        const now = Date.now();

        if (!lastShown || (now - parseInt(lastShown)) > POPUP_TIMEOUT) {
            document.body.classList.add('hyundai-promo-active');
        }
    }

    // Close popup function
    function closePopup() {
        document.body.classList.remove('hyundai-promo-active');
        localStorage.setItem('hyundaiPromoLastShown', Date.now().toString());
    }

    // Show popup with delay
    setTimeout(showPopup, 1000);

    // Event handlers for close buttons
    document.querySelector('.hyundai-promo-close').addEventListener('click', closePopup);
    document.querySelector('.hyundai-promo-overlay').addEventListener('click', closePopup);

    // Form submit
    document.querySelector('.test-drive-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const submitBtn = this.querySelector('.hyundai-promo-submit');

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang xử lý...';

        // Gửi form data thông thường
        const formData = new FormData(this);

        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if(response.ok) {
                submitBtn.innerHTML = '<i class="fas fa-check"></i> Đăng ký thành công!';
                submitBtn.style.background = '#28a745';

                setTimeout(closePopup, 1500);

                setTimeout(() => {
                    this.reset();
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Đăng ký ngay';
                    submitBtn.style.background = '#002c5f';
                }, 2000);
            } else {
                throw new Error('Submit failed');
            }
        })
        .catch(error => {
            submitBtn.innerHTML = '<i class="fas fa-exclamation-circle"></i> Có lỗi xảy ra';
            submitBtn.style.background = '#dc3545';

            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Đăng ký ngay';
                submitBtn.style.background = '#002c5f';
            }, 2000);
        });
    });
});
</script>
