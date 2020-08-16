<div id="slide-left">
  <?php
  $tinmoinhat = getOneNews_inTop();
  $row_tinmoinhat = mysql_fetch_array($tinmoinhat);
  ?>
  <div id="slideleft-main">
    <img src="upload/tintuc/<?php echo $row_tinmoinhat['urlHinh'] ?>" />
    <br />
    <h2 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat['idTin'] ?>">
        <?php echo $row_tinmoinhat['TieuDe'] ?>
      </a>
    </h2>
    <div class="des">
      Trung Quốc đang tiến hành tập trận bắn đạn thật trên vịnh Bắc Bộ, gần sát Việt Nam và sẽ bắt đầu tập trận tại biển Hoa Đông vào ngày 29/7 tới.
    </div>
    <p class="tlq"><a href="#">Hàng trăm chuyến bay bị hủy vì Trung Quốc tập trận</a></p>

  </div>
  <div id="slideleft-scroll">

    <div class="content_scoller width_common">
      <ul>
        <?php
        $bontin = get5news_inTop();
        while ($row_bontin = mysql_fetch_array($bontin)) {
        ?>
          <li>
            <div class="title_news">
              <a href="index.php?p=chitiettin&idTin=<?php echo $row_bontin['idTin'] ?>" class="txt_link">
                <?php echo $row_bontin['TieuDe'] ?>
              </a>
            </div>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>

    <div id="gocnhin">
      <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
      <div class="title_news"></div>
    </div>

  </div>
</div>