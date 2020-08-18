<?php
$idLT = $_GET["idLT"];
settype($idLT, 'int');
?>

<?php
$bc = breadCrumb($idLT);
$row_bc = mysqli_fetch_array($bc);
?>
<div style="font-weight: bold;">
    <a href="./"> Trang chủ</a> &raquo; <?php echo $row_bc["TenTL"] ?> &raquo; <?php echo $row_bc['Ten'] ?>
</div>


<?php
$numInPage = 10;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else $page = 1;

$tin = getNewsByType_Paginate($idLT, $numInPage, (int)($page - 1));
while ($rows_tin = mysqli_fetch_array($tin)) {
?>
    <div class="box-cat">
        <div class="cat1">
            <div class="clear"></div>
            <div class="cat-content">
                <div class="col0 col1">
                    <div class="news">
                        <h3 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $rows_tin['idTin']  ?>">
                                <?php echo $rows_tin['TieuDe'] ?>
                            </a>
                        </h3>
                        <img class="images_news" src="upload/tintuc/<?php echo $rows_tin['urlHinh'] ?>" align="left" />
                        <div class="des">
                            <?php echo $rows_tin['TomTat'] ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
        </div>
        <hr>
    </div>

<?php } ?>

<!-- box cat-->


<div class='pagination'>
    <a href="http://localhost/catphb/CATP_HB/index.php?p=tintrongloai&idLT=<?php echo $idLT ?>&page=1">
        &laquo;
    </a>
    <?php
    $number = getNewsByType($idLT);
    $total_news = mysql_num_rows($number);
    $total_page =  ceil($total_news / $numInPage);
    for ($i = 1; $i <= $total_page; $i++) {
    ?>
        <a class="<?php
                    if ($page == $i) echo "active";
                    else echo "";
                    ?>" href="http://localhost/catphb/CATP_HB/index.php?p=tintrongloai&idLT=<?php echo $idLT ?>&page=<?php echo $i ?>">
            <?php
            echo $i
            ?>
        </a>
    <?php
    }
    ?>
    <a href="http://localhost/catphb/CATP_HB/index.php?p=tintrongloai&idLT=<?php echo $idLT ?>&page=<?php echo $total_page ?>">
        &raquo;
    </a>
</div>