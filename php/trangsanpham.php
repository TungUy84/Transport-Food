<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A200%2C400%2C700%2C900"/>
    <link rel="stylesheet" type="text/css" href="../css/trangsanphamm.css">
    <title>Trang Web Của Tôi</title>
</head>
<body>
    <header>
    <div class="auto-group-snwb-eMP">
      <a href="#" class="logo-YxZ">
        <img class="rectangle-2-HfF" src="../banner/assets/rectangle-2-8gZ.png"/>
        <p class="transport-273">Transport </p>
        <p class="food-jn9">food</p>
      </a>
      <a href="../php/dangnhap.php" class="auto-group-eggy-PGM">
        <img class="icon-person-i3j" src="../banner/assets/icon-person-STj.png"/>
        <p class="login-F3f">Login</p>
      </a>
      <a href="#">
      <img class="icon-cart-8NM" src="../banner/assets/icon-cart-puw.png"/>
      </a>
    </div>
        <div class="Safebanner">
        <img class="banner-safe" src="../banner/trangsanpham/banner-safe.jpg" alt="Banner 1">
        <img class="banner-safe" src="../banner/trangsanpham/banner2.jpg" alt="Banner 2" />
        <img class="banner-safe" src="../banner/trangsanpham/banner3.jpg" alt="Banner 3" />
        <img class="banner-safe" src="../banner/trangsanpham/banner4.avif" alt="Banner 3" />
        </div>
        <script src="../JS/banner.js"></script>
        <div class="khung">
        <form action="timkiemsanpham.php" method="GET">
            <div class="component-44">
                <input type="text" class="search" name="search" id="txt_timkiem" placeholder="Search">
                <input type="submit" class="icon-magnifying-glass" style="display: none;" >
                <a href="#">
                    <img class="icon-magnifying-glass" alt="" src="../banner/assets/find.svg">
                </a>
                <div class="component-20">
                    <div class="component-19">
                        <div class="component-19-child">
                        </div>
                        <div class="khu-vc">Khu vực:</div>
                    </div>
                    <div class="component-18">
                        <select class="component-18-child" name="" id="">
                            <option value="Tp.Hồ Chí Minh">Tp.Hồ Chí Minh</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                        </select>
                        <img class="icon-chevron-bottom" alt="" src="🦆 icon \"chevron bottom\".svg">
                    </div>
                </div>
                <div class="component-42">
                    <div class="lc">Lọc</div>
                </div>
                <div class="component-44-item">
                </div>
                <div class="tt-c">Tất Cả</div>
                <img class="emoji-red-heart" alt="" src="../banner/assets/heart.png">
                <img class="icon-filter-icon" alt="" src="../banner/assets/loc.png">
            </div>
        </div>
    </header>
    <section>
        <div class="container bg-white">
            <div class="row">
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
                <div class='col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3'>
                    <div class='product'> <img src='../img/{$row['img_tb']}'>>
                        <ul class='d-flex align-items-center justify-content-center list-unstyled icons'>
                            <a href='sanpham.php?id=$row[id]' class='icon'><span class='fas fa-expand-arrows-alt'>Buy</span></a>
                        </ul>
                    </div>
                    <div class='tag bg-red'>$row[size]</div>
                    <div class='title pt-4 pb-1'>$row[tensanpham]
                    <div class='price'>$row[thanhtien] VNĐ</div>
                    </div>
                </div>
                ";
                }
            }
                ?>
            </div>
        </div>
    </section>
    <footer>
    <div class="menu-subscription-rights-yTP">
        <img class="hr-u69" src="REPLACE_IMAGE:2:202"/>
        <div class="menu-subscription-Srm">
          <div class="menu-zNV">
            <div class="footer-menu-items-XtD">
              <p class="title-shB"><a class="gt-link" href="../php/gioithieu.php">Công việc</a></p>
              <div class="items-bt5">
                <p class="item-1-xCq"><a class="gt-link" href="../php/gioithieu.php">Về chúng tôi</a></p>
                <p class="item-2-hAR"><a class="gt-link" href="../php/gioithieu.php">Team</a></p>
                <p class="item-3-dpm"><a class="gt-link" href="../php/gioithieu.php">Nghề nghiệp</a></p>
                <p class="item-4-P3F"><a class="gt-link" href="../php/gioithieu.php">Blog</a></p>
              </div>
            </div>
            <div class="footer-menu-items-KxV">
              <p class="title-g2M"><a class="sp-link" href="../php/hotro.php">Liên hệ</a></p>
              <div class="items-pPT">
                <p class="item-1-MuB"><a class="sp-link" href="../php/hotro.php">Trợ giúp &amp; Ủng hộ</a></p>
                <p class="item-2-iDw"><a class="sp-link" href="../php/hotro.php">Hợp tác với chúng tôi</a> </p>
                <p class="item-3-FzZ"><a class="sp-link" href="../php/hotro.php">Đi cùng chúng tôi</a></p>
              </div>
            </div>
            <div class="footer-menu-items-C97">
              <p class="title-9a9"><a class="lg-link" href="#">Hợp pháp</a></p>
              <div class="items-tnd">
                <p class="item-1-3fX"><a class="lg-link" href="#">Điều kiện &amp; Lương</a></p>
                <p class="item-2-zam"><a class="lg-link" href="#">Đền bù &amp; Hủy bỏ</a></p>
                <p class="item-3-wW1"><a class="lg-link" href="#">Chính sách bảo mật</a></p>
                <p class="item-4-Ukq"><a class="lg-link" href="#">Chính sách Cookie</a></p>
              </div>
            </div>
          </div>
          <div class="follow-subscription-cc9">
            <div class="follow-us-yBo">
              <p class="title-vsj">Follow Us</p>
              <div class="icons-rmP">                
                <a href="https://www.instagram.com/playboitradar/?hl=en">               
                <p class="item-1-Qnu"><img class="img-info" src="../banner/assets/icon _instagram icon_.png" alt=""></p></a>
                <a href="https://www.facebook.com/tu.uybird/">
                <p class="item-2-jaH"><img class="img-info" src="../banner/assets/icon _facebook icon_.png" alt=""></p></a>
                <a href="https://twitter.com/">
                <p class="item-3-sAh"><img class="img-info" src="../banner/assets/icon _twitter_.png" alt=""></p></a>
              </div>
            </div>
            <div class="subscription-1Gu">
              <p class="text-N7T">Nhận ưu đãi độc quyền trong hộp thư của bạn</p>
              <div class="text-field-button-7Kw">
                <div class="text-field-s4D">
                  <input type="email" class="text-field-s4D" placeholder="Enter Your email">
                </div>
                <div class="button-D1b"><a class="button-D1b" href="#">Subscribe</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-rights-1y3">
          <img class="hr-yey" src="REPLACE_IMAGE:2:224"/>
          <div class="made-by-7FP">
            <p class="made-with-by-Eqo">
              <span class="made-with-by-Eqo-sub-0">Được thực hiện</span>
              <span class="made-with-by-Eqo-sub-1"> </span>
              <span class="made-with-by-Eqo-sub-2"><img src="../banner/assets/icon-heart.png" alt="" style="height: 13px; width: 15px;"></span>
              <span class="made-with-by-Eqo-sub-3"> </span>
              <span class="made-with-by-Eqo-sub-4">bởi</span>
            </p>
            <p class="kim-ng-tng-uy-85w">Kim Đặng Tùng Uy</p>
          </div>
        </div>
        </div>
    </footer>
</body>
</html>