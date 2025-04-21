document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Ngăn chặn việc gửi form mặc định

    // Lấy giá trị nhập từ input
    const username = document.querySelector('input[type="text"]').value;
    const password = document.querySelector('input[type="password"]').value;

    // Kiểm tra điều kiện (đây chỉ là ví dụ đơn giản)
    if (username !== 'adminfood' || password !== '12345') {
        // Hiển thị thông báo lỗi
        document.getElementById('error-message').innerText = 'Kiểm tra lại tài khoản hoặc mật khẩu!';
    }
    else{
        window.location.href = 'php/trangchu.php';
    }
});
