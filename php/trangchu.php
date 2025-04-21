<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="stylesheet" href="../css/trangchu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Seting</title>
</head>
<body>
  	<div class="desktop-1">
    	<div class="desktop-1-child">
            <div class="qun-l-thc-phm-parent">
                <a class="home" href="#">
                    <div class="qun-l-thc">Transport</div>
                    <div class="qun-l-thc-f">Food</div>
                    <img class="group-child" alt="" src="../banner/icon-food.htm">
                </a>   
            </div>
            <form action="timkiem.php" method="GET">
                <div class="icon-search">
                    <div class="tm-kim-parent">
                        <input type="text" class="thanhtimkiem" name="search" id="txt_timkiem" placeholder="Nhập tên sản phẩm">
                        <input type="submit" class="tm-kim" value="Tìm Kiếm">
                    </div>
                </div>
            </form>
            <div class="profile">
                <details>
                    <summary><i class='fa fa-user-circle'></i></summary>
                    <a class="smra a1" href="../php/trangsanpham.php">Trang Sản Phẩm</a>
                    <a class="smra a2" href="../index.php">Logout</a>
                </details>
            </div>
        </div>
            <div class="webname">
                <p>Quản lý sản phẩm</p>
            </div>
            <a class='rectangle' href='themmoi.php'>
                <p class="tsp">Thêm Sản Phẩm</p>
            </a>
    </div>
        <div class="desktop-1-item">
            <table>
                <thead>
                    <tr>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Trang Thái</th>
                        <th>Số Lượng</th>
                        <th>Ngày Sản Xuất</th>
                        <th>Thành Tiền</th>
                        <th>Hình Ảnh</th>
                        <th class="thtm">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Kết  nối  CSDL
                    include("ketnoi.php");
                    //Câu  lệnh  select
                    $sql = "SELECT * FROM qlthucpham";
                    $result = $conn->query($sql);
                    //Đổ  dữ  liệu  lên  bảng
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "
                                <tr>
                                    <td>$row[id]</td>
                                    <td>$row[tensanpham]</td>
                                    <td>$row[size]</td>
                                    <td>$row[khoiluong]</td>
                                    <td>$row[datesx]</td>
                                    <td>$row[thanhtien]</td>
                                    <td><img src='../img/{$row['img_tb']}' width='50px' height='50px'  style='object-fit: cover;'></td>
                                    <td class = 'thtm'>
                                    <a class='btn primary'
                                    href='sua.php?id=$row[id]'>Sửa</a>
                                    <a class='btn danger' style='margin-right: 0;' href='xoa.php?id=$row[id]'>Xóa</a>
                                    </td>
                                </tr>
                            ";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>     
        <div class="footer">
            <div class="menu-worker">
                <p class="active-font"><a class="linkcv" href="../php/gioithieu.php">Công việc</a></p>
                <div>
                    <p><a class="linkcv" href="../php/gioithieu.php">Về chúng tôi</a></p>
                    <p><a class="linkcv" href="../php/gioithieu.php">Team</a></p>
                    <p><a class="linkcv" href="../php/gioithieu.php">Nghề nghiệp</a></p>
                    <p><a class="linkcv" href="../php/gioithieu.php">Blog</a></p>
                </div>
            </div>
            <div class="menu-worker">
                <p class="active-font"><a class="linkcv" href="../php/hotro.php">Liên hệ</a></p>
                <div>
                    <p><a class="linkcv" href="../php/hotro.php">Trợ giúp &amp; Ủng hộ</a></p>
                    <p><a class="linkcv" href="../php/hotro.php">Hợp tác với chúng tôi</a></p>
                    <p><a class="linkcv" href="../php/hotro.php">Đi cùng chúng tôi</a></p>
                </div>
            </div>
            <div class="menu-worker">
                <p class="active-font"><a class=    "linkcv" href="#">Hợp pháp</a></p>
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
