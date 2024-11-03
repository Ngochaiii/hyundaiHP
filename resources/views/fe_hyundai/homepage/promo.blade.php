<!-- Banner quảng cáo -->
<div class="ad-banner">
    <div class="sliding-images">
        <div class="image-track">
            <!-- Lặp lại các ảnh để tạo hiệu ứng vô tận -->
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/2000x599 (1).jpg" alt="Khuyến mãi 1"
                class="ad-image"
                onclick="openPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/2000x599 (1).jpg', 'Tiêu đề khuyến mãi 1')">
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide-palisade.jpg" alt="Khuyến mãi 2"
                class="ad-image"
                onclick="openPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide-palisade.jpg', 'Tiêu đề khuyến mãi 2')">
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide website banner.jpg"
                alt="Khuyến mãi 3" class="ad-image"
                onclick="openPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide website banner.jpg', 'Tiêu đề khuyến mãi 3')">
            <!-- Lặp lại ảnh -->
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/2000x599 (1).jpg" alt="Khuyến mãi 1"
                class="ad-image"
                onclick="openPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/2000x599 (1).jpg', 'Tiêu đề khuyến mãi 1')">
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide-palisade.jpg" alt="Khuyến mãi 2"
                class="ad-image"
                onclick="openPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide-palisade.jpg', 'Tiêu đề khuyến mãi 2')">
            <img src="https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide website banner.jpg"
                alt="Khuyến mãi 3" class="ad-image"
                onclick="openPopup('https://hyundai-api.thanhcong.vn/storage/uploads/slider/slide website banner.jpg', 'Tiêu đề khuyến mãi 3')">
        </div>
    </div>
</div>

<!-- Single Popup -->
<div id="adPopup" class="popup-container">
    <div class="popup-content">
        <button class="close-popup" onclick="closePopup()">
            <i class="fas fa-times"></i>
        </button>
        <div class="popup-image">
            <img id="popupImage" src="" alt="Khuyến mãi">
        </div>
        <div class="popup-info" style="width:100%">
            <h2 id="popupTitle"></h2>
            <div class="popup-details">
                <h3>Thông tin ưu đãi</h3>
                <ul>
                    <li>Ưu đãi giá đặc biệt</li>
                    <li>Tặng phụ kiện chính hãng</li>
                    <li>Hỗ trợ trả góp lên đến 85%</li>
                    <li>Bảo hành chính hãng 3 năm</li>
                </ul>
                <div class="contact-info">
                    <span><i class="fas fa-phone"></i> Hotline: <a style="text-align: center;
    padding-top: 10px;"
                            href="tel:0906026299">0906026299</a></span>
                    <p><i class="fas fa-map-marker-alt"></i> Địa chỉ showroom:</p>
                    <ul class="showroom-list">
                        <li>742 Nguyễn Văn Linh, Niệm Nghĩa, Lê Chân, Hải Phòng</li>
                        <li>9 10b, 10b Đ. Lê Hồng Phong, Đằng Hải, Hải An, Hải Phòng</li>
                    </ul>
                </div>
                <a href="tel:0906026299" class="popup-btn">Đăng ký tư vấn</a>
            </div>
        </div>
    </div>
</div>

<style>
    /* Banner styles */
    .ad-banner {
        width: 100%;
        height: 350px;
        overflow: hidden;
        position: relative;
        background: #f5f7fa;
        margin: 40px 0;
    }

    .sliding-images {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .image-track {
        display: flex;
        width: fit-content;
        animation: scroll 20s linear infinite;
    }

    .image-track:hover {
        animation-play-state: paused;
    }

    .ad-image {
        height: 100%;
        object-fit: cover;
        /* margin-right: 20px;
        border-radius: 15px; */
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .ad-image:hover {
        transform: scale(1.05);
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-450px * 3 - 60px));
        }
    }

    /* Popup styles */
    .popup-container {
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
    }

    .popup-content {
        background: white;
        width: 100%;
        max-width: 1000px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1fr;
        max-height: 90vh;
    }

    .close-popup {
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

    .close-popup:hover {
        background: rgba(0, 0, 0, 0.8);
    }

    .popup-image {
        height: 100%;
    }

    .popup-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .popup-info {
        padding: 40px;
        display: flex;
        flex-direction: column;
        overflow-y: auto;
    }

    .popup-info h2 {
        color: #002c5f;
        font-size: 24px;
        margin-bottom: 20px;
        padding-right: 40px;
    }

    .popup-info h3 {
        color: #002c5f;
        font-size: 18px;
        margin: 20px 0 15px;
    }

    .popup-details ul {
        list-style: none;
        padding: 0;
        margin-bottom: 30px;
    }

    .popup-details ul li {
        padding: 10px 0;
        color: #666;
        position: relative;
        padding-left: 25px;
    }

    .popup-details ul li:before {
        content: '✓';
        color: #002c5f;
        position: absolute;
        left: 0;
    }

    .contact-info {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        margin: 20px 0;
    }

    .contact-info p {
        margin: 10px 0;
        color: #666;
    }

    .contact-info i {
        color: #002c5f;
        width: 20px;
        margin-right: 10px;
    }

    .showroom-list {
        list-style: none;
        padding-left: 30px;
    }

    .popup-btn {
        background: #002c5f;
        color: white;
        text-decoration: none;
        padding: 15px 30px;
        border-radius: 30px;
        text-align: center;
        margin-top: 20px;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .popup-btn:hover {
        background: #00408a;
        transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .ad-banner {
            height: 200px;
        }

        .ad-image {
            height: 200px;
            width: 300px;
        }

        .popup-content {
            grid-template-columns: 1fr;
        }

        .popup-image {
            height: 300px;
        }

        .popup-info {
            padding: 20px;
        }

        .popup-info h2 {
            font-size: 20px;
        }

        .contact-info {
            padding: 15px;
        }
    }
</style>

<script>
    function openPopup(imageSrc, title) {
        document.getElementById('popupImage').src = imageSrc;
        document.getElementById('popupTitle').textContent = title;
        document.getElementById('adPopup').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closePopup() {
        document.getElementById('adPopup').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Đóng popup khi click bên ngoài
    window.onclick = function(event) {
        if (event.target.classList.contains('popup-container')) {
            closePopup();
        }
    }

    // Tự động scroll banner
    const imageTrack = document.querySelector('.image-track');
    let isHovered = false;

    imageTrack.addEventListener('mouseenter', () => {
        isHovered = true;
    });

    imageTrack.addEventListener('mouseleave', () => {
        isHovered = false;
    });
</script>
