<?php
include("ketnoi.php");
//Xử lý dữ liệu submit bằng phương thức POST của người dùng
if (isset($_POST['submit'])) {
$tensanpham = $_POST['tensanpham'];
$size = $_POST['size'];
$khoiluong = $_POST['khoiluong'];
$datesx = $_POST['datesx'];
$thanhtien = $_POST['thanhtien'];
$tenhinh = $_FILES['img_tb']['name'];

//Câu  lệnh  insert
$sql = "INSERT INTO qlthucpham(tensanpham, size, khoiluong, datesx, thanhtien, img_tb) VALUES('$tensanpham', '$size', '$khoiluong', '$datesx', '$thanhtien', '$tenhinh')";
//Thực  thi  câu  lệnh  SQL
move_uploaded_file($_FILES['img_tb']['tmp_name'],'../img/'.$tenhinh);
$result = $conn->query($sql);
$id = $conn->insert_id;
//Kiểm  tra  lỗi
if(!$result){
die("Lỗi  kết  nối:  "  .  $conn->connect_error);
}
//Chuyển  tiếp  về  trang  index  khi  thêm  mới  thành  công
header("location: ../php/trangchu.php"); exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Thực Phẩm</title>
    <link rel="stylesheet" href="../css/themmoi.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sriracha:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source Sans Pro:wght@400&display=swap" />
</head>
<body>
    <div class="desktop-2">
        <div class="desktop-1-child">
            <div class="qun-l-thc-phm-parent">
            <a class="home" style="color: #ffa800;" href="../php/trangchu.php">
                    <div class="qun-l-thc">Quản Lý Thực Phẩm</div>
                    <img class="group-child" alt="" src="../banner/icon-food.htm">
                </a>   
            </div>
        </div>
        <div class="container">
            <h3 class="title">Thêm thực phẩm mới:</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="tensanpham">Tên sản phẩm</label>
                    <input type="text" name="tensanpham" required>
                </div>
                <div>
                    <label for="size">Trạng thái</label>
                    <input type="text" name="size" >
                </div>
                <div>
                    <label for="khoiluong">Số lượng</label>
                    <input type="text" name="khoiluong" required>
                </div>
                <div>
                    <label for="datesx">Ngày sản xuất</label><br>
                    <input type="date" name="datesx" required>
                </div>
                <div>
                    <label for="thanhtien">Thành tiền</label>
                    <input type="text" name="thanhtien" required>
                </div>
                <div>
                    <label for="img_tb">Hình ảnh</label><br>
                    <input type="file" name="img_tb" required>
                </div>
                <input type="submit" name="submit" value="Thêm sản phẩm">

                <a href="../php/trangchu.php"><input type="button" value="Cancel" class="cancel"></a>
            </form>
        </div>
        <div class="footer">
            <div class="menu-worker">
                <p class="active-font"><a class="linkcv" href="#">Công việc</a></p>
                <div>
                    <p><a class="linkcv" href="#">Về chúng tôi</a></p>
                    <p><a class="linkcv" href="#">Team</a></p>
                    <p><a class="linkcv" href="#">Nghề nghiệp</a></p>
                    <p><a class="linkcv" href="#">Blog</a></p>
                </div>
            </div>
        <div class="menu-worker">
            <p class="active-font"><a class="linkcv" href="#">Liên hệ</a></p>
            <div>
                <p><a class="linkcv" href="#">Trợ giúp &amp; Ủng hộ</a></p>
                <p><a class="linkcv" href="#">Hợp tác với chúng tôi</a></p>
                <p><a class="linkcv" href="#">Đi cùng chúng tôi</a></p>
            </div>
        </div>
        <div class="menu-worker">
            <p class="active-font"><a class="linkcv" href="#">Hợp pháp</a></p>
            <div>
                <p><a class="linkcv" href="#">Điều kiện &amp; Lương</a></p>
                <p><a class="linkcv" href="#">Đền bù &amp; Hủy bỏ</a></p>
                <p><a class="linkcv" href="#">Chính sách bảo mật</a></p>
                <p><a class="linkcv" href="#">Chính sách Cookie</a></p>
            </div>
        </div>
        <div class="follow-us-aKK">
            <p class="title-XkM">Thông tin</p>
            <div class="icons-UQh">
            <a href="https://www.instagram.com/playboitradar/?hl=en" class="item-1"><img src="../banner/img_setting/icon _instagram icon_.png" alt=""></a>
            <a href="https://www.facebook.com/tu.uybird/" class="item-1"><img src="../banner/img_setting/icon _facebook icon_.png" alt=""></a>
            <a href="https://twitter.com/" class="item-1"><img src="../banner/img_setting/icon _twitter_.png" alt=""></a>
            </div>
        </div>
        <div class="name">
            <p>Được thực hiện bởi Kim Đặng Tùng Uy</p>
        </div>
    </div>
</body>
</html>