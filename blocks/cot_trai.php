

<div class="box-cat">
  <div class="cat">
    <div class="main-cat">
      <a href="#">Tin xem nhiều</a>
    </div>

    <div class="clear"></div>
    <div class="cat-content">
      <?php
    $tinxemnhieu = TinXemNhieuNhat();
    while( $row_tinxemnhieu = mysql_fetch_array($tinxemnhieu)) {
      ?>
      <div class="col1">
        <div class="news">
          <img class="images_news" alt="Image not found"
          src="upload/tintuc/<?php echo$row_tinxemnhieu['urlHinh'] ?>" />
          <h3 class="title">
             <a href="index.php?p=chitiettin&idTin=<?php echo $row_tinxemnhieu['idTin']?>" class="txt_link"> 
            <?php echo $row_tinxemnhieu['TieuDe'] ?>
            </a><span class="hit"> <?php echo $row_tinxemnhieu['SoLanXem'] ?></span></h3>
          <div class="clear"></div>
        </div>
      </div>

      <?php
    }
      ?>
    </div>
  </div>
</div>
<div class="clear"></div>