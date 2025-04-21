<?php
include("ketnoi.php");
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//GET METHOD
//Gán  dữ  liệu  vào  các  thẻ  input
if (!isset($_GET["id"])) { header("location: ../php/trangchu.php"); exit;
}
$sql = "SELECT * FROM qlthucpham WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
if (!$row) {
header("location: ../php/trangchu.php"); exit;
}
$tensanpham = $row["tensanpham"];
$size = $row["size"];
$khoiluong = $row["khoiluong"];
$datesx = $row["datesx"];
$thanhtien = $row["thanhtien"];
$img_tb = $row["img_tb"];

} 
?>

<?php
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>sanpham</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo+2%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500%2C700%2C900"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A300%2C400%2C500%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Awesome+5+Brands%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Awesome+5+Free%3A900"/>
  <link rel="stylesheet" href="../css/sanpham.css"/>
</head>
<body>
<div class="sanpham-Srd">
  <div class="auto-group-fcwf-tTj">
    <div class="component-1-UaM">
      <div class="auto-group-ecdz-b9B">
        <a href="../php/trangsanpham.php" class="logo-rqo">
          <img class="rectangle-2-vqf" src="../banner/assets/rectangle-2.png"/>
          <p class="transport-ciV">Transport </p>
          <p class="food-w21">food</p>
        </a>
        <a href="home.html#diachigiaohang" class="address-EWu">
          <p class="giao-ti--xSu">Giao tới:</p>
          <img class="icon-map-marker-4Vw" src="../banner/assets/icon-map-marker.png"/>
          <div class="auto-group-h7zj-z8h">
            <p class="v-tr-hin-ti-syB">vị trí hiện tại</p>
            <p class="bnh-thnh-tp-h-ch-minh-wTF">Bình Thạnh, TP Hồ Chí Minh</p>
          </div>
        </a>
        <div class="search-RdK">
          <div class="auto-group-urkx-Yhw">
          </div>
        </div>
        <a href="../php/dangnhap.php" class="auto-group-7gur-6zM">
          <img class="icon-person-CGh" src="../banner/assets/icon-person.png"/>
          <p class="login-8AM">Login</p>
        </a>
        <a href="#">
          <img class="icon-cart-zyF" src="../banner/assets/icon-cart.png"/>
        </a>
      </div>
    </div>
    <div class="frame-3-XTP">
      <div class="component-46-rVf">
        <div class="rectangle-57-Bnq">
        </div>
      </div>
      <p class="transport-food-jJZ">
        <span class="transport-food-jJZ-sub-0">Transport</span>
        <span class="transport-food-jJZ-sub-1"> </span>
        <span class="transport-food-jJZ-sub-2">food</span>
      </p>
      <div class="auto-group-crfy-SeD">             
      <?php
                  //Kết  nối  CSDL
                  echo "<img class='rectangle-53-way' src='../img/$row[img_tb]' alt='Hình ảnh sản phẩm'>";
                    ?>
        <div class="auto-group-fftq-3P7">
          <div class="tph-ch-minh-cm-tm-ti-AyX">Tp.Hồ Chí Minh</div>
          <div class="auto-group-j2bu-ds7">
            <div class="component-45-ZVs">
              <img class="icon-heart-6Vo" src="../banner/assets/icon-heart.png"/>
              <div class="yu-thch-R2H">Yêu Thích</div>
            </div>
            <div class="auto-group-i2r7-fxD">
              <img class="auto-group-sikd-Qeu" src="../banner/assets/auto-group-sikd.png"/>
              <img class="icon-star-9sP" src="../banner/assets/icon-star.png"/>
              <img class="icon-star-he1" src="../banner/assets/icon-star-2Yh.png"/>
              <img class="icon-star-FQd" src="../banner/assets/icon-star-kBb.png"/>
            </div>
          </div>
          <div class="auto-group-uui7-AGh">
            <div class="auto-group-wce7-VJy">999+</div>
            <div class="nh-gi-trn-transport-food-N7s">Đánh giá trên Transport Food</div>
          </div>
          <div class="auto-group-iwlo-Ugh">
            <div class="qun-n-oDB">QUÁN ĂN</div>
            <div class="auto-group-uem1-7jf">
              <div class="line-2-4uo">
              </div>
              <div class="chi-nhnh-1a9">Chi Nhánh</div>
            </div>
          </div>
          <div class="auto-group-jqqv-9AZ">
            <div class="nguyn-vn-nghi-g-vp-tp-hcm-VER">100 Nguyễn Văn Nghi, Gò Vấp, TP. HCM</div>
            <?php
                            echo "<div class='cm-tm-ti-nguyn-vn-nghi-mSq'>$row[tensanpham]</div>";
                ?>
          </div>
          <div class="auto-group-5nqr-pR7">
            <div class="ellipse-5-MA9">
            </div>
            <div class="ang-m-ca-fgd">Đang mở cửa</div>
          </div>
          <div class="auto-group-uhmu-CRf">
            <img class="icon-usd-circle-7Hj" src="../banner/assets/icon-usd-circle.png"/>
            <?php
            //Kết  nối  CSDL
                            echo "<p class='vn-NzM'>$row[thanhtien] VNĐ</p>";
                ?>
          </div>
          <button class="truck-button">
            <span class="default">Đặt Món Ngay</span>
            <span class="success">
                Hoàn Thành
                <svg viewbox="0 0 12 10">
                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
            </span>
            <div class="truck">
                <div class="wheel"></div>
                <div class="back"></div>
                <div class="front"></div>
                <div class="box"></div>
            </div>
        </button>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.0.1/dist/gsap.min.js"></script>
          <script src="../JS/anmt.js"></script>
          <img class="line-3-AfK" src="./assets/line-3.png"/>
          <p class="dch-v-bi-JFj">DỊCH VỤ BỞI</p>
        </div>
      </div>
    </div>
    <div class="group-3-Ddb">
      <div class="thc-n-A33">Thực đơn</div>
      <div class="auto-group-i8qb-rgZ">
        <div class="mn-ang-gim-xDo">MÓN ĐANG GIẢM</div>
        <div class="ba-ri-g9o">BA RỌI</div>
        <div class="cm-tm-R7P">CƠM TẤM</div>
        <div class="mn-thm-9p5">MÓN THÊM</div>
        <div class="combo-5Bw">COMBO</div>
        <div class="canh-z41">CANH</div>
      </div>
    </div>
    <div class="group-2-iVo">
      <div class="auto-group-nlwf-FEq">
        <img class="rectangle-61-bJh" src="../banner/assets/rectangle-61.png"/>
      </div>
      <div class="qut-m-trn-t-mn-4xy">Quét mã trên để đặt món</div>
    </div>
    <div class="group-1-Lfb">
      <div class="auto-group-nwwt-QQZ">
        <img class="icon-wallet-icon-w9b" src="../banner/assets/icon-wallet-icon-hMj.png"/>
        <p class="thanh-ton-bng-th-tn-dng-nam-a-bank-gim-50000-vn-cho-ha-n-t-120000-vn-eZo">
        Thanh toán bằng thẻ tín dụng Nam A Bank giảm 50.000 VNĐ 
        <br/>
        cho hóa đơn từ 120.000 VNĐ
        </p>
        <p class="copy-code-vGR">Copy code</p>
        <img class="icon-copy-TXF" src="../banner/assets/icon-copy-chw.png"/>
      </div>
      <div class="auto-group-9dty-Cjj">
        <img class="icon-wallet-icon-wBX" src="../banner/assets/icon-wallet-icon.png"/>
        <p class="thanh-ton-th-visa-gim-50k-cho-n-t-150k-vo-tt-c-cc-ngy-trong-tun-GDo">
        Thanh toán thẻ Visa. Giảm 50K cho đơn từ 150K vào tất cả
        <br/>
        các ngày trong tuần.
        </p>
        <p class="copy-code-kPs">Copy code</p>
        <img class="icon-copy-Uam" src="../banner/assets/icon-copy-7JZ.png"/>
      </div>
      <div class="auto-group-7vgp-RW1">
        <img class="icon-wallet-icon-NAM" src="../banner/assets/icon-wallet-icon-FH3.png"/>
        <p class="thanh-ton-th-tn-dng-techcombank-gim-30k-cho-ha-n-300k-vo-ngy-th-t-n-ch-nht-hng-tun-4os">
        Thanh toán thẻ tín dụng Techcombank giảm 30k cho hóa 
        <br/>
        đơn 300k vào ngày thứ Tư đến Chủ nhật hàng tuần
        </p>
        <p class="copy-code-vr5">Copy code</p>
        <img class="icon-copy-Guw" src="../banner/assets/icon-copy-Q5F.png"/>
      </div>
      <div class="auto-group-nzgf-28R">
        <img class="icon-wallet-icon-ZPF" src="../banner/assets/icon-wallet-icon-6sK.png"/>
        <p class="free-ship-khi-mua-trn-50k-tRX">Free Ship khi mua trên 50k</p>
        <p class="copy-code-BQd">Copy code</p>
        <img class="icon-copy-6Gh" src="../banner/assets/icon-copy.png"/>
      </div>
    </div>
  </div>
  <div class="footer-Nzu">
    <div class="menu-subscription-rights-sgm">
      <img class="hr-Cyw" src="REPLACE_IMAGE:0:137"/>
      <div class="menu-subscription-Ynu">
        <div class="menu-hQu">
          <div class="footer-menu-items-Evd">
            <p class="title-MVT"><a href="../php/gioithieu.php" class="gt-link">Công việc</a></p>
            <div class="items-FKw">
              <p class="item-1-beh"><a href="../php/gioithieu.php" class="gt-link">Về chúng tôi</a></p>
              <p class="item-2-8uX"><a href="../php/gioithieu.php" class="gt-link">Team</a></p>
              <p class="item-3-UyP"><a href="../php/gioithieu.php" class="gt-link">Nghề nghiệp</a></p>
              <p class="item-4-q3F"><a href="../php/gioithieu.php" class="gt-link">Blog</a></p>
            </div>
          </div>
          <div class="footer-menu-items-yfF">
            <p class="title-hr9"><a href="../php/hotro.php" class="gt-link">Liên hệ</a></p>
            <div class="items-2dX">
              <p class="item-1-wEh"><a href="../php/hotro.php" class="gt-link">Trợ giúp &amp; Ủng hộ</a></p>
              <p class="item-2-V1K"><a href="../php/hotro.php" class="gt-link">Hợp tác với chúng tôi</a> </p>
              <p class="item-3-Dxu"><a href="../php/hotro.php" class="gt-link">Đi cùng chúng tôi</a></p>
            </div>
          </div>
          <div class="footer-menu-items-N57">
            <p class="title-XCu"><a href="#" class="gt-link">Hợp pháp</a></p>
            <div class="items-TsF">
              <p class="item-1-CK3"><a href="#" class="gt-link">Điều kiện &amp; Lương</a></p>
              <p class="item-2-Ydo"><a href="#" class="gt-link">Đền bù &amp; Hủy bỏ</a></p>
              <p class="item-3-J7B"><a href="#" class="gt-link">Chính sách bảo mật</a></p>
              <p class="item-4-Sz5"><a href="#" class="gt-link">Chính sách Cookie</a></p>
            </div>
          </div>
        </div>
        <div class="follow-subscription-zVo">
          <div class="follow-us-veM">
            <p class="title-Gy7">Follow Us</p>
            <div class="icons-ayo">
              <a href="https://www.instagram.com/playboitradar/?hl=en" class="item-1-jbo"><img src="../banner/assets/icon _instagram icon_.png" alt=""></a>
              <a href="https://www.facebook.com/tu.uybird/" class="item-2-5Qm"><img src="../banner/assets/icon _facebook icon_.png" alt=""></a>
              <a href="https://twitter.com/" class="item-3-RUd"><img src="../banner/assets/icon _twitter_.png" alt=""></a>
            </div>
          </div>
          <div class="subscription-mHb">
            <p class="text-XXf">Nhận ưu đãi độc quyền trong hộp thư của bạn</p>
            <div class="text-field-button-Tw7">
              <div class="text-field-nyP">
                <input type="email" class="text-field-nyP" placeholder="Enter Your email">
              </div>
              <a href="#" class="button-gSV">Subscribe</a>
            </div>
          </div>
        </div>
      </div>
      <div class="hr-rights-toT">
        <img class="hr-4C9" src="REPLACE_IMAGE:0:159"/>
        <div class="made-by-bC5">
          <p class="made-with-by-XLd">
            <span class="made-with-by-XLd-sub-0">Được thực hiện</span>
            <span class="made-with-by-XLd-sub-1"> </span>
            <span class="made-with-by-XLd-sub-2"><img src="../banner/assets/icon-heart.png" alt="" style="height: 13px; width: 15px;"></span>
            <span class="made-with-by-XLd-sub-3"> </span>
            <span class="made-with-by-XLd-sub-4">bởi</span>
          </p>
          <p class="kim-ng-tng-uy-tMX">Kim Đặng Tùng Uy</p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>