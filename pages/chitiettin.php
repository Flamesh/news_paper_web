<?php

if (isset($_GET["idTin"])) {
  $idTin = $_GET["idTin"];
  settype($idTin, "int");
} else {
  $idTin = 1;
}
updateNumOfSeen($idTin);
$detail_news = getDetaltNews($idTin);
$row_detail = mysqli_fetch_array($detail_news);

?>

<h1 class="title"><?php echo $row_detail['TieuDe'] ?></h1>
<div class="des">
  <?php echo $row_detail['TomTat'] ?>
</div>
<div class="chitiet" style="text-align: justify !important;">
  <!--noi dung-->
  <?php echo $row_detail["Content"] ?>
  <!--//noi dung-->
</div>
<div class="clear"></div>

<div class="number_count">
  <span id="like-total-1000000-3023795">
    Số lần xem: <?php echo $row_detail["SoLanXem"] ?>
  </span>
</div>

<!--google-->
<div class="left">
  <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"></div>
</div>

<div id="tincungloai">
  <div class="clear"></div>
  <ul>
    <?php
    $same_news = getNewsSameType($idTin, $row_detail["idLT"]);
    while ($row_same_news = mysqli_fetch_array($same_news)) {
    ?>
      <li>

        <img src="upload/tintuc/<?php echo $row_same_news["urlHinh"] ?>" width="200px" height="100px">

        <br />
        <a class="title"
         href="index.php?p=chitiettin&idTin=<?php echo $row_same_news["idTin"]?>">
          <?php echo $row_same_news["TieuDe"] ?>
        </a>
        <span class="no_wrap">
      </li>
    <?php } ?>
  </ul>
</div>

<div class="clear"></div>