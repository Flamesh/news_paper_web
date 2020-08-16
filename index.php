<?php
require("lib/dbConnet.php");
require("lib/trangchu.php");
if (isset($_GET["p"]))
    $p = $_GET["p"];
else
    $p = "";
?>
<!DOCTYPE html PUBLIC "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Công an thành phố Hòa Bình</title>
    <link rel="stylesheet" type="text/css" href="css/layout.css" />
    <link rel="icon" href="images/logo-cong-an.ico" type="image/ico">
</head>

<body>
    <div id="wrap-vp">
        <div id="header-vp">
            <div id="logo" style="width: auto;"><img src="images/cover.png" /></div>
        </div>
        <div class="clear"></div>
        <div id="menu-vp">
            <?php require "blocks/menu.php" ?>
        </div>
        <div id="midheader-vp">
            <div id="left">
                <ul class="list_arrow_breakumb">
                    <li class="start">
                        <a href="javascript:;">Trang nhất</a>
                        <span class="arrow_breakumb">&nbsp;</span></li>
                </ul>
            </div>
            <div id="right">
                <?php require "blocks/thongtinchung.php" ?>
            </div>
        </div>
        <div class="clear"></div>

        <div id="slide-vp">
            <!--blocks/top_trang_chu.php-->
            <?php require "blocks/top_trang_chu.php" ?>

            <div id="slide-right">
                <!--blocks/quangcao_top_phai.php-->
                <?php require "blocks/quangcao_top_phai.php" ?>
            </div>
        </div>

        <div id="content-vp">
            <div id="content-left">
                <!--blocks/cot_trai.php-->
                <?php require "blocks/cot_trai.php" ?>
            </div>
            <div id="content-main">

                <!--PAGES-->
                <?php
                switch ($p) {
                    case "tintrongloai":
                        require "pages/tintrongloai.php";
                        break;
                    case "chitiettin":
                        require "pages/chitiettin.php";
                        break;
                    case "timkiem":
                        require "pages/timkiem.php";
                        break;
                    default:
                        require "pages/trangchu.php";
                }
                ?>

            </div>
            <div id="content-right">
                <!--blocks/cot_phai.php-->
                <?php require "blocks/cot_phai.php" ?>
            </div>

            <div class="clear"></div>

        </div>
        <div class="clear"></div>
        <div id="footer">
            <!--blocks/footer.php-->
            <!-- <?php require "blocks/footer.php" ?> -->
            <div class="ft-bot" style="text-align: center; margin-top: 30px; padding: 20px 0">
                <h3 style="text-transform: uppercase">Cổng thông tin điện tử công an thành phố Hòa Binh </h3>
                <h3>Địa chỉ tổ 16 - phường Tân Thịnh - TPHB 0123.888.0123 - 0129.233.3555</h3>
                <p>Chịu trách nhiệm nội dung: Đ/c AAAAAAA -Trưởng Công an Thành phố</p>
                <p>Liên hệ: Đ/C BBBBB - 1234567890 </p>
                <p>Ghi rõ nguồn Cổng Thông tin điện tử Công an thành phố Hòa Binh khi trích dẫn lại tin từ địa chỉ này.</p>
            </div>
        </div>
    </div>
</body>

</html>