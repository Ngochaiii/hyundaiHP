<div class="modal" id="NewInfoModal">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Nhận thông tin mới</h5>
            <button class="close-btn" id="closeNewModalBtn">&times;</button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                    <label for="newName" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="newName" placeholder="Nhập họ và tên">
                </div>
                <div class="mb-3">
                    <label for="newEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="newEmail" placeholder="Nhập email">
                </div>
                <div class="mb-3">
                    <label for="newPhone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="newPhone" placeholder="Nhập số điện thoại">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn-secondary" id="closeNewModalFooterBtn">Đóng</button>
            <button type="button" class="btn-primary">Gửi thông tin</button>
        </div>
    </div>
</div>


<style>
  /* Cài đặt nền mờ khi modal hiển thị */
.modal {
    display: none; /* Ẩn modal mặc định */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.4); /* Nền mờ */
}

/* Cài đặt nội dung modal */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* Căn giữa modal */
    padding: 20px;
    border: 1px solid #888;
    width: 50%; /* Chiều rộng modal */
}

/* Cài đặt tiêu đề modal */
.modal-header, .modal-footer {
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

.btn-primary, .btn-secondary {
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
const openNewModalBtn = document.getElementById("openNewModalBtn");
const closeNewModalBtn = document.getElementById("closeNewModalBtn");
const closeNewModalFooterBtn = document.getElementById("closeNewModalFooterBtn");

// Mở modal khi click vào nút "Nhận thông tin mới"
openNewModalBtn.onclick = function() {
    newModal.style.display = "block";
}

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
