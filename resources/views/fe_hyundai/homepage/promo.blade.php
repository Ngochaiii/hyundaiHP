<div class="hyundai-ad-banner">
    <div class="hyundai-sliding-images">
        <div class="hyundai-image-track">
            <!-- Lặp lại các ảnh để tạo hiệu ứng vô tận -->
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/2000x599 (1).jpg" alt="Khuyến mãi hấp dẫn"
                class="hyundai-ad-image"
                onclick="hyundaiOpenPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/2000x599 (1).jpg', 'Khuyến mãi vô cùng hấp dẫn')">
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide-palisade.jpg" alt="Khuyến mãi hấp dẫn"
                class="hyundai-ad-image"
                onclick="hyundaiOpenPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide-palisade.jpg', 'Palisade - Đẳng cấp doanh nhân')">
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide website banner.jpg"
                alt="Khuyến mãi 3" class="hyundai-ad-image"
                onclick="hyundaiOpenPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide website banner.jpg', 'Ưu đãi đặc biệt tháng này')">
            <!-- Lặp lại ảnh -->
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/2000x599 (1).jpg" alt="Khuyến mãi hấp dẫn"
                class="hyundai-ad-image"
                onclick="hyundaiOpenPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/2000x599 (1).jpg', 'Khuyến mãi vô cùng hấp dẫn')">
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide-palisade.jpg"
                alt="Khuyến mãi hấp dẫn" class="hyundai-ad-image"
                onclick="hyundaiOpenPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide-palisade.jpg', 'Palisade - Đẳng cấp doanh nhân')">
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide website banner.jpg"
                alt="Khuyến mãi 3" class="hyundai-ad-image"
                onclick="hyundaiOpenPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide website banner.jpg', 'Ưu đãi đặc biệt tháng này')">
        </div>
    </div>
</div>

<!-- Hyundai Popup -->
<div id="hyundaiAdPopup" class="hyundai-popup-container">
    <div class="hyundai-popup-content">
        <button class="hyundai-close-popup" onclick="hyundaiClosePopup()">
            <i class="fas fa-times"></i>
        </button>
        <div class="hyundai-popup-image">
            <img id="hyundaiPopupImage" src="" alt="Khuyến mãi">
        </div>
        <div class="hyundai-popup-info">
            <h2 id="hyundaiPopupTitle"></h2>
            <div class="hyundai-popup-details">
                <h3>THÔNG TIN ƯU ĐÃI ĐẶC BIỆT</h3>
                <ul class="hyundai-benefits-list">
                    <li>Ưu đãi giá đặc biệt khi mua xe trong tháng</li>
                    <li>Tặng phụ kiện chính hãng trị giá lên đến 30 triệu</li>
                    <li>Hỗ trợ trả góp lên đến 85% giá trị xe</li>
                    <li>Bảo hành chính hãng 5 năm không giới hạn km</li>
                    <li>Tặng gói bảo dưỡng định kỳ</li>
                    <li>Hỗ trợ đăng ký, đăng kiểm, giao xe tận nhà</li>
                </ul>

                <div class="hyundai-contact-info">
                    <div class="hyundai-hotline">
                        <h4><i class="fas fa-phone"></i> Hotline Tư Vấn:</h4>
                        <a href="tel:0906026299" class="hyundai-phone-number">0906026299</a>
                    </div>

                    <div class="hyundai-locations">
                        <h4><i class="fas fa-map-marker-alt"></i> Hệ Thống Showroom:</h4>
                        <ul class="hyundai-showroom-list">
                            <li>
                                <strong>Hyundai Thành Công - Showroom 3S</strong><br>
                                742 Nguyễn Văn Linh, Niệm Nghĩa, Lê Chân, Hải Phòng
                            </li>
                            <li>
                                <strong>Hyundai Hải Phòng - Showroom 1S</strong><br>
                                9 10b, 10b Đ. Lê Hồng Phong, Đằng Hải, Hải An, Hải Phòng
                            </li>
                        </ul>
                    </div>

                    <div class="hyundai-working-hours">
                        <h4><i class="far fa-clock"></i> Giờ làm việc:</h4>
                        <p>Thứ 2 - Chủ nhật: 8:00 - 18:00</p>
                    </div>
                </div>

                <div class="hyundai-cta-buttons">
                    <a href="tel:0906026299" class="hyundai-popup-btn hyundai-primary-btn">
                        <i class="fas fa-phone"></i> Gọi Ngay
                    </a>
                    <a href="javascript:void(0)" class="hyundai-popup-btn hyundai-secondary-btn"
                        onclick="hyundaiClosePopup()">
                        Xem Thêm Xe
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Banner styles */
    .hyundai-ad-banner {
        width: 100%;
        height: 400px;
        overflow: hidden;
        position: relative;
        background: #f5f7fa;
        margin: 40px 0;
        display: flex;
        align-items: center;
    }

    .hyundai-sliding-images {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .hyundai-image-track {
        display: flex;
        width: fit-content;
        animation: hyundaiScroll 20s linear infinite;
        height: 100%;
    }

    .hyundai-ad-image {
        height: 100%;
        width: 1000px;
        object-fit: cover;
        object-position: center;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .hyundai-image-track:hover {
        animation-play-state: paused;
    }

    .hyundai-ad-image:hover {
        transform: scale(1.05);
    }

    @keyframes hyundaiScroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-1000px * 3));
        }
    }

    /* Popup Container Styles */
    .hyundai-popup-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        justify-content: center;
        align-items: center;
        overflow-y: auto;
        padding: 20px;
    }

    /* Popup Content Styles */
    .hyundai-popup-content {
        background: white;
        width: 100%;
        max-width: 1000px;
        border-radius: 20px;
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin: auto;
        max-height: calc(100vh - 40px);
        overflow: hidden;
    }

    /* Close Button Styles */
    .hyundai-close-popup {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(0, 0, 0, 0.5);
        border: none;
        color: white;
        font-size: 24px;
        cursor: pointer;
        z-index: 1;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.3s ease;
    }

    .hyundai-close-popup:hover {
        background: rgba(0, 0, 0, 0.8);
    }

    /* Popup Image Styles */
    .hyundai-popup-image {
        height: 100%;
        min-height: 300px;
    }

    .hyundai-popup-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 20px 0 0 20px;
    }

    /* Popup Info Styles */
    .hyundai-popup-info {
        padding: 30px;
        height: 100%;
        overflow-y: auto;
        max-height: 80vh;
    }

    .hyundai-popup-info h2 {
        color: #002c5f;
        font-size: 24px;
        margin-bottom: 20px;
        padding-right: 40px;
    }

    .hyundai-popup-info h3 {
        color: #002c5f;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
    }

    .hyundai-popup-info h4 {
        color: #002c5f;
        font-size: 16px;
        font-weight: 600;
        margin: 15px 0 10px;
    }

    /* Benefits List Styles */
    .hyundai-benefits-list {
        list-style: none;
        padding: 0;
        margin-bottom: 30px;
    }

    .hyundai-benefits-list li {
        padding: 10px 0;
        color: #666;
        position: relative;
        padding-left: 25px;
        line-height: 1.5;
    }

    .hyundai-benefits-list li:before {
        content: '✓';
        color: #002c5f;
        position: absolute;
        left: 0;
    }

    /* Contact Info Styles */
    .hyundai-contact-info {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 12px;
        margin: 20px 0;
    }

    .hyundai-hotline .hyundai-phone-number {
        color: #e63312;
        font-size: 24px;
        font-weight: bold;
        text-decoration: none;
        display: block;
        margin: 10px 0;
    }

    .hyundai-locations {
        margin: 20px 0;
    }

    .hyundai-showroom-list {
        list-style: none;
        padding: 0;
    }

    .hyundai-showroom-list li {
        margin-bottom: 15px;
        line-height: 1.5;
        padding-left: 0;
    }

    .hyundai-showroom-list strong {
        color: #002c5f;
        display: block;
        margin-bottom: 5px;
    }

    .hyundai-working-hours p {
        margin: 5px 0;
        color: #666;
    }

    /* CTA Buttons Styles */
    .hyundai-cta-buttons {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .hyundai-popup-btn {
        flex: 1;
        text-align: center;
        padding: 12px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .hyundai-primary-btn {
        background: #002c5f;
        color: white;
    }

    .hyundai-secondary-btn {
        background: #f8f9fa;
        color: #002c5f;
        border: 2px solid #002c5f;
    }

    .hyundai-popup-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Scrollbar Styles */
    .hyundai-popup-info::-webkit-scrollbar {
        width: 6px;
    }

    .hyundai-popup-info::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 3px;
    }

    .hyundai-popup-info::-webkit-scrollbar-thumb {
        background: #002c5f;
        border-radius: 3px;
    }

    .hyundai-popup-info::-webkit-scrollbar-thumb:hover {
        background: #00408a;
    }

    /* Responsive Breakpoints */
    @media screen and (max-width: 1366px) {
        .hyundai-ad-banner {
            height: 350px;
        }

        .hyundai-ad-image {
            width: 875px;
        }

        @keyframes hyundaiScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-875px * 3));
            }
        }
    }

    @media screen and (max-width: 1024px) {
        .hyundai-ad-banner {
            height: 300px;
        }

        .hyundai-ad-image {
            width: 750px;
        }

        @keyframes hyundaiScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-750px * 3));
            }
        }
    }

    @media screen and (max-width: 768px) {
        .hyundai-ad-banner {
            height: 250px;
            margin: 20px 0;
        }

        .hyundai-ad-image {
            width: 625px;
        }

        @keyframes hyundaiScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-625px * 3));
            }
        }

        .hyundai-popup-container {
            padding: 10px;
        }

        .hyundai-popup-content {
            grid-template-columns: 1fr;
            width: 95%;
            max-height: 90vh;
        }

        .hyundai-popup-image {
            min-height: 200px;
            max-height: 250px;
        }

        .hyundai-popup-image img {
            border-radius: 20px 20px 0 0;
        }

        .hyundai-popup-info {
            max-height: calc(90vh - 250px);
            padding: 20px;
        }

        .hyundai-cta-buttons {
            flex-direction: column;
        }

        .hyundai-popup-btn {
            width: 100%;
            margin: 5px 0;
        }
    }

    @media screen and (max-width: 480px) {
        .hyundai-ad-banner {
            height: 180px;
        }

        .hyundai-ad-image {
            width: 450px;
        }

        @keyframes hyundaiScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-450px * 3));
            }
        }

        .hyundai-popup-content {
            border-radius: 15px;
        }

        .hyundai-popup-image {
            min-height: 180px;
            max-height: 200px;
        }

        .hyundai-close-popup {
            top: 10px;
            right: 10px;
            width: 30px;
            height: 30px;
            font-size: 18px;
        }

        .hyundai-popup-info h2 {
            font-size: 18px;
        }

        .hyundai-popup-info h3 {
            font-size: 18px;
        }

        .hyundai-benefits-list li {
            font-size: 14px;
        }
    }

    @media screen and (max-width: 375px) {
        .hyundai-ad-banner {
            height: 150px;
        }

        .hyundai-ad-image {
            width: 375px;
        }

        @keyframes hyundaiScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-375px * 3));
            }
        }

        .hyundai-popup-content {
            width: 100%;
            margin: 5px;
        }

        .hyundai-popup-image {
            min-height: 160px;
        }

        .hyundai-popup-info {
            padding: 12px;
        }

        .hyundai-contact-info {
            padding: 12px;
            font-size: 13px;
        }

        .hyundai-showroom-list li {
            font-size: 13px;
        }

        .hyundai-popup-btn {
            padding: 10px 20px;
            font-size: 14px;
        }
    }
</style>
<script>
    // Popup Functions
    function hyundaiOpenPopup(imageSrc, title) {
        // Cập nhật nội dung popup
        document.getElementById('hyundaiPopupImage').src = imageSrc;
        document.getElementById('hyundaiPopupTitle').textContent = title;

        // Hiển thị popup
        document.getElementById('hyundaiAdPopup').style.display = 'flex';

        // Khóa scroll của body
        document.body.style.overflow = 'hidden';
    }

    function hyundaiClosePopup() {
        // Ẩn popup
        document.getElementById('hyundaiAdPopup').style.display = 'none';

        // Mở lại scroll của body
        document.body.style.overflow = 'auto';
    }

    // Đóng popup khi click bên ngoài
    window.addEventListener('click', function(event) {
        const popup = document.getElementById('hyundaiAdPopup');
        if (event.target === popup) {
            hyundaiClosePopup();
        }
    });

    // Banner Slider Functions
    document.addEventListener('DOMContentLoaded', function() {
        const imageTrack = document.querySelector('.hyundai-image-track');

        // Dừng animation khi hover
        imageTrack.addEventListener('mouseenter', function() {
            imageTrack.style.animationPlayState = 'paused';
        });

        // Tiếp tục animation khi rời chuột
        imageTrack.addEventListener('mouseleave', function() {
            imageTrack.style.animationPlayState = 'running';
        });

        // Xử lý touch events cho thiết bị mobile
        let touchStartX = 0;
        let touchEndX = 0;

        imageTrack.addEventListener('touchstart', function(event) {
            touchStartX = event.touches[0].clientX;
            imageTrack.style.animationPlayState = 'paused';
        });

        imageTrack.addEventListener('touchmove', function(event) {
            touchEndX = event.touches[0].clientX;
        });

        imageTrack.addEventListener('touchend', function() {
            const touchDiff = touchStartX - touchEndX;

            // Nếu vuốt đủ xa (hơn 50px), chuyển ảnh
            if (Math.abs(touchDiff) > 50) {
                // Tự động tính toán vị trí tiếp theo dựa trên hướng vuốt
                const direction = touchDiff > 0 ? 1 : -1;
                const currentTransform = getComputedStyle(imageTrack).transform;
                const matrix = new WebKitCSSMatrix(currentTransform);
                const currentX = matrix.m41;

                // Tính toán vị trí mới
                const imageWidth = document.querySelector('.hyundai-ad-image').offsetWidth;
                const newPosition = currentX - (direction * imageWidth);

                // Áp dụng transform mới
                imageTrack.style.transform = `translateX(${newPosition}px)`;
            }

            // Khôi phục animation sau 1 khoảng thời gian ngắn
            setTimeout(() => {
                imageTrack.style.animationPlayState = 'running';
            }, 100);
        });
    });

    // Xử lý responsive
    window.addEventListener('resize', function() {
        const bannerHeight = document.querySelector('.hyundai-ad-banner').offsetHeight;
        const images = document.querySelectorAll('.hyundai-ad-image');

        // Cập nhật chiều cao của ảnh theo tỷ lệ
        images.forEach(image => {
            image.style.height = `${bannerHeight}px`;
        });
    });

    // Preload images để tránh giật lag
    window.addEventListener('load', function() {
        const images = document.querySelectorAll('.hyundai-ad-image');
        images.forEach(img => {
            const imageUrl = img.getAttribute('src');
            const preloadImage = new Image();
            preloadImage.src = imageUrl;
        });
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            hyundaiClosePopup();
        }
    });
</script>
