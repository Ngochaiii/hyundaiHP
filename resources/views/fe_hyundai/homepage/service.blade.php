<div class="grid-container">
    <a href="{{ url('tin-tuc/dich-vu-va-cuu-ho') }}" class="grid-item">
        <img src="https://hyundai-api.thanhcong.vn/storage/uploads/home-block/service-hyundai-min.png" alt="Hỗ trợ kỹ thuật">
        <div class="overlay">
            <h2>Hỗ trợ kỹ thuật</h2>
        </div>
    </a>
    <a href="{{ url('tin-tuc/chuong-trinh-dich-vu') }}" class="grid-item">
        <img src="https://hyundai-api.thanhcong.vn/storage/uploads/home-block/Rectangle 425.png" alt="Chương trình dịch vụ">
        <div class="overlay">
            <h2>Chương trình dịch vụ</h2>
        </div>
    </a>
    <a href="{{ url('tin-tuc/ung-dung-hyundai-me') }}" class="grid-item">
        <img src="https://hyundai-api.thanhcong.vn/storage/uploads/home-block/backgroud-min.png" alt="Hyundai me">
        <div class="overlay">
            <h2>Hyundai me</h2>
        </div>
    </a>
    <a href="{{ url('tin-tuc/phu-tung-chinh-hieu') }}" class="grid-item">
        <img src="https://hyundai-api.thanhcong.vn/storage/uploads/home-block/z3023987469278_3d71f91da66353942e532219a5d4bbc6-min.jpeg" alt="Phụ tùng phụ kiện">
        <div class="overlay">
            <h2>Phụ tùng phụ kiện</h2>
        </div>
    </a>
</div>

<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .grid-item {
        position: relative;
        aspect-ratio: 16/9;
        overflow: hidden;
        border-radius: 3%;
        display: block;
    }

    .grid-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: filter 0.3s ease;
    }

    .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .overlay h2 {
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
    }

    .grid-item:hover img {
        filter: blur(4px);
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .grid-container {
            grid-template-columns: 1fr;
        }
    }
</style>
