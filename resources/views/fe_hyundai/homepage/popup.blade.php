<style>
    .hyundai-promo-popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.9);
        width: 90%;
        max-width: 1200px;
        height: 90vh;
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
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: white;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<div class="hyundai-promo-overlay"></div>
<div class="hyundai-promo-popup">
    <div class="hyundai-promo-left">
        <h3>PHỦ XANH<br>VIỆT NAM</h3>
        <p>Nhận ưu đãi xanh lên đến 12.000.000 VNĐ</p>
    </div>

    <div class="hyundai-promo-right">
        <button class="hyundai-promo-close">&times;</button>

        <div class="hyundai-promo-form-header">
            <img src="path-to-hyundai-logo.png" alt="Hyundai">
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
