<!-- box cat -->

<?php
$idLT = 5;
?>
<div class="box-cat">
  <div class="cat">
    <div class="main-cat">
      <a href="#"><?php echo getNameTypesNews($idLT) ?> </a>
    </div>

    <div class="clear"></div>
    <div class="cat-content">
      <?php
      $MotTin = getNews_inLeft($idLT);
      $row_mottin = mysql_fetch_array($MotTin);
      ?>
      <div class="col1">
        <div class="news">
          <h3 class="title">
            <a href="index.php?p=chitiettin&idTin=<?php echo $row_mottin['idTin'] ?>">
              <?php echo $row_mottin['TieuDe'] ?>
            </a>
          </h3>
          <img class="images_news" src="upload/tintuc/<?php echo $row_mottin['urlHinh'] ?>" />
          <div class="des"><?php echo $row_mottin['TomTat'] ?> </div>
          <div class="clear"></div>

        </div>



      </div>
      <div class="col2">
        <?php
        $tin_moi_bon_tin = get5News_inLeft($idLT);
        while ($row_tinmoi_bontin = mysql_fetch_array($tin_moi_bon_tin)) {
        ?>
          <h3 class="tlq">
            <a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoi_bontin['idTin'] ?>"><?php echo $row_tinmoi_bontin['TieuDe'] ?></a>
          </h3>

        <?php } ?>
      </div>
    </div>

  </div>
  <div class="clear"></div>
  <!-- //box cat -->
</div>
<div class="clear"></div>
<!-- //box cat -->

<!-- box cat -->

<?php
$idLT = 7;
?>
<div class="box-cat">
  <div class="cat">
    <div class="main-cat">
      <a href="#"><?php echo getNameTypesNews($idLT) ?> </a>
    </div>

    <div class="clear"></div>
    <div class="cat-content">
      <?php
      $MotTin = getNews_inLeft($idLT);
      $row_mottin = mysql_fetch_array($MotTin);
      ?>
      <div class="col1">
        <div class="news">
          <h3 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $row_mottin['idTin'] ?>"><?php echo $row_mottin['TieuDe'] ?> </a></h3>
          <img class="images_news" src="upload/tintuc/<?php echo $row_mottin['urlHinh'] ?>" />
          <div class="des"><?php echo $row_mottin['TomTat'] ?> </div>
          <div class="clear"></div>

        </div>



      </div>
      <div class="col2">
        <?php
        $tin_moi_bon_tin = get5News_inLeft($idLT);
        while ($row_tinmoi_bontin = mysql_fetch_array($tin_moi_bon_tin)) {
        ?>
          <h3 class="tlq">
            <a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoi_bontin['idTin'] ?>"><?php echo $row_tinmoi_bontin['TieuDe'] ?></a>
          </h3>

        <?php } ?>
      </div>
    </div>

  </div>
  <div class="clear"></div>
  <!-- //box cat -->
</div>
<div class="clear"></div>
<!-- //box cat -->