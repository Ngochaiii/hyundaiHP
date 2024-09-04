<div class="modal" id="NewInfoModal">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Nhận báo giá</h5>
            <button class="close-btn" id="closeNewModalBtn">&times;</button>
        </div>
        <form method="POST" action="{{route('regis.drive')}}">
            @csrf
        <div class="modal-body">

                <div class="mb-3">
                    <label for="newName" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="newName" name="name" placeholder="Nhập họ và tên">
                </div>
                <div class="mb-3">
                    <label for="newEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="newEmail" name="email" placeholder="Nhập email">
                </div>
                <div class="mb-3">
                    <label for="newPhone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="newPhone" name="phone" placeholder="Nhập số điện thoại">
                </div>
                <div class="mb-3">
                    <label for="carSelect" class="form-label">Chọn xe cần tư vấn</label>
                    <select class="form-control" id="carSelect" name="car" required>
                        <option value="">-- Chọn loại xe --</option>
                        @foreach($all_cars as $car)
                            <option value="{{ $car->id }}">{{ $car->title }}</option>
                        @endforeach
                    </select>
                </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn-secondary" id="closeNewModalFooterBtn">Đóng</button>
            <button type="Submit" class="btn-primary">Gửi thông tin</button>
        </div>
    </form>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    </div>
</div>


<style>
    /* Cài đặt nền mờ khi modal hiển thị */
    .modal {
        display: none;
        /* Ẩn modal mặc định */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.4);
        /* Nền mờ */
    }

    /* Cài đặt nội dung modal */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* Căn giữa modal */
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        /* Chiều rộng modal */
    }

    /* Cài đặt tiêu đề modal */
    .modal-header,
    .modal-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Cài đặt nút đóng modal */
    .close-btn {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
    }

    .btn-primary,
    .btn-secondary {
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        margin-left: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }
</style>
<script>
   // Lấy các phần tử
const newModal = document.getElementById("NewInfoModal");
const openNewModalBtns = document.querySelectorAll(".side-btn");
const modalTitle = document.querySelector(".modal-title");
const closeNewModalBtn = document.getElementById("closeNewModalBtn");
const closeNewModalFooterBtn = document.getElementById("closeNewModalFooterBtn");

// Mở modal khi click vào bất kỳ nút nào có class "side-btn"
openNewModalBtns.forEach(button => {
    button.onclick = function() {
        // Thay đổi tiêu đề của modal dựa trên nút được nhấn
        if (button.classList.contains('two')) {
            modalTitle.textContent = 'Nhận báo giá';
        } else {
            modalTitle.textContent = 'Yêu cầu Tư Vấn';
        }

        newModal.style.display = "block";
    }
});

// Đóng modal khi click vào nút "X" hoặc nút "Đóng" ở phần footer
closeNewModalBtn.onclick = function() {
    newModal.style.display = "none";
}

closeNewModalFooterBtn.onclick = function() {
    newModal.style.display = "none";
}

// Đóng modal khi click ra ngoài vùng nội dung modal
window.onclick = function(event) {
    if (event.target == newModal) {
        newModal.style.display = "none";
    }
}


</script>
