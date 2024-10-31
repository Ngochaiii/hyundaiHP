<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<div class="map-section">
    <h2 class="main-title">Hệ thống Showroom Hyundai Hải Phòng</h2>
    <div class="showrooms-container">
        <!-- Showroom Nguyễn Văn Linh -->
        <div class="showroom-info">
            <div class="location-card">
                <div class="showroom-image">
                    <img src="wp-content/themes/hyundaihaiphong/cad854f4c6ab63f53aba.jpg"
                    alt="Showroom 1S">
                </div>
                <h3 class="title">Hyundai Thành Công - Showroom 3S</h3>
                <div class="info-box">
                    <div class="destination-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <p>742 Nguyễn Văn Linh, Niệm Nghĩa, Lê Chân, Hải Phòng</p>
                            <p><i class="fas fa-phone"></i> Hotline: <a href="tel:0123456789">0123456789</a></p>
                        </div>
                    </div>
                    <a href="https://www.google.com/maps/place/742+Nguy%E1%BB%85n+V%C4%83n+Linh,+Ni%E1%BB%87m+Ngh%C4%A9a,+L%C3%AA+Ch%C3%A2n,+H%E1%BA%A3i+Ph%C3%B2ng/"
                       target="_blank"
                       class="direction-btn">
                        <i class="fas fa-route"></i>
                        Chỉ đường
                    </a>
                </div>
            </div>
        </div>

        <!-- Showroom Lê Hồng Phong -->
        <div class="showroom-map">
            <div class="location-card">
                <div class="showroom-image">
                    <img src="wp-content/themes/hyundaihaiphong/cad854f4c6ab63f53aba.jpg"
                         alt="Showroom 1S Hyundai Lê Hồng Phong"
                         class="showroom-img">
                </div>
                <h3 class="title">Hyundai Lê Hồng Phong - Showroom 1S</h3>
                <div class="info-box">
                    <div class="destination-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <p>9 10b, 10b Đ. Lê Hồng Phong, Đằng Hải, Hải An, Hải Phòng</p>
                            <p><i class="fas fa-phone"></i> Hotline: <a href="tel:0123456789">0123456789</a></p>
                        </div>
                    </div>
                    <a href="https://www.google.com/maps/place/Hyundai+L%C3%AA+H%E1%BB%93ng+Phong/@20.8406957,106.7121753,125m/"
                       target="_blank"
                       class="direction-btn">
                        <i class="fas fa-route"></i>
                        Chỉ đường
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Map container -->
    <div class="map-container">
        <!-- Map cho Showroom Nguyễn Văn Linh -->
        <div class="map-view">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.76583871976!2d106.65908937499272!3d20.842303386126793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7a70d702f299%3A0x5b5cd9a01b812908!2zNzQyIE5ndXnhu4VuIFbEg24gTGluaCwgTmnhu4dtIE5naMSpYSwgTMOqIENow6JuLCBI4bqjaSBQaMOybmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1698675989437!5m2!1svi!2s"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <!-- Map cho Showroom Lê Hồng Phong -->
        <div class="map-view">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.0953751582881!2d106.71217532923659!3d20.840695699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7bbe8878e049%3A0xeec9e832a0d33ebb!2sHyundai%20L%C3%AA%20H%E1%BB%93ng%20Phong!5e0!3m2!1svi!2s!4v1698674805632!5m2!1svi!2s"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>

<style>
    .map-section {
        padding: 40px 0;
        background: #f5f7fa;
    }

    .main-title {
        text-align: center;
        color: #002c5f;
        font-size: 2rem;
        margin-bottom: 40px;
        font-weight: 600;
    }

    .showrooms-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .map-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        max-width: 1400px;
        margin: 30px auto 0;
        padding: 0 20px;
        height: 400px;
    }

    .location-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }

    .showroom-image {
        height: 250px;
        overflow: hidden;
    }

    .showroom-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .showroom-img:hover {
        transform: scale(1.05);
    }

    .title {
        font-size: 1.25rem;
        color: #002c5f;
        margin: 20px 20px 15px;
        font-weight: 600;
    }

    .info-box {
        padding: 0 20px 20px;
    }

    .destination-info {
        display: flex;
        align-items: flex-start;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 12px;
        gap: 15px;
        margin-bottom: 15px;
    }

    .destination-info i {
        color: #002c5f;
        font-size: 24px;
        margin-top: 3px;
    }

    .info p {
        font-size: 14px;
        color: #6c757d;
        margin: 0;
        line-height: 1.5;
        margin-bottom: 5px;
    }

    .info a {
        color: #002c5f;
        text-decoration: none;
    }

    .info a:hover {
        text-decoration: underline;
    }

    .direction-btn {
        background: #002c5f;
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 30px;
        font-size: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        width: 100%;
    }

    .direction-btn:hover {
        background: #00408a;
        transform: translateY(-2px);
    }

    .map-view {
        height: 100%;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .showrooms-container,
        .map-container {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .map-container {
            height: auto;
        }

        .map-view {
            height: 300px;
        }
    }

    @media (max-width: 576px) {
        .map-section {
            padding: 20px 0;
        }

        .main-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            padding: 0 15px;
        }

        .showrooms-container,
        .map-container {
            padding: 0 15px;
        }

        .showroom-image {
            height: 200px;
        }

        .title {
            font-size: 1.1rem;
        }

        .direction-btn {
            padding: 10px 20px;
            font-size: 14px;
        }
    }
</style>
