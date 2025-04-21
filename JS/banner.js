// Lấy danh sách các ảnh trong thẻ Safebanner
const images = document.querySelectorAll('.banner-safe');
let currentImageIndex = 0;

// Ẩn tất cả các ảnh trừ ảnh đầu tiên
images.forEach((img, index) => {
    if (index !== 0) {
        img.style.display = 'none';
    }
});

// Hàm chuyển đổi ảnh
function changeImage() {
    // Ẩn ảnh hiện tại
    images[currentImageIndex].style.display = 'none';

    // Tăng chỉ số ảnh và kiểm tra xem đã đến ảnh cuối cùng chưa
    currentImageIndex++;
    if (currentImageIndex === images.length) {
        currentImageIndex = 0; // Quay lại ảnh đầu tiên nếu đã đến ảnh cuối cùng
    }

    // Hiển thị ảnh tiếp theo
    images[currentImageIndex].style.display = 'block';
}

// Bắt đầu thay đổi ảnh sau mỗi khoảng thời gian 2 giây
setInterval(changeImage, 2000);
