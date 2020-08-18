<?php
$types = getTypesMenu();
while ($row_type = mysqli_fetch_array($types)) {
    $idTL = $row_type["idTL"]
?>
    <div class="box-cat">
        <div class="cat">
            <div class="main-cat">
                <a href="#"><?php echo $row_type['TenTL'] ?> </a>
            </div>
            <div class="child-cat">
                <?php
                $loaditin = getChildTypes($idTL);
                while ($row_loaitin =  mysqli_fetch_array($loaditin)) {
                ?>

                    <a href="index.php?p=tintrongloai&idLT=<?php echo $row_loaitin["idLT"] ?>">
                        <?php echo $row_loaitin["Ten"] ?>
                    </a>

                <?php } ?>
            </div>
            <div class="clear"></div>
            <div class="cat-content">
                <?php
                $news = getOneNewsInMain($idTL);
                $first_news = mysqli_fetch_array($news);
                ?>
                <div class="col1">
                    <div class="news">
                        <h3 class="title">
                            <a href="index.php?p=chitiettin&idTin=<?php echo $first_news['idTin'] ?>">
                                <?php echo $first_news["TieuDe"] ?>
                            </a>
                        </h3>
                        <img class="images_news" src="upload/tintuc/<?php echo $first_news['urlHinh'] ?>" align="left" />
                        <div class="des">
                            <?php echo $first_news['TomTat'] ?>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="col2">
                    <?php
                    $three_news = getThreeNewsInMain($idTL);
                    while ($news = mysqli_fetch_array($three_news)) {
                    ?>
                        <p class="tlq">
                            <a href="index.php?p=chitiettin&idTin=<?php echo $news['idTin'] ?>">
                                <?php echo $news['TieuDe'] ?> </a>
                            </a>
                        </p>

                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>


<?php } ?>