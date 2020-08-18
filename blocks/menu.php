<ul class="width_common" id="menu_web">
    <a class="dropbtn" href="./">TRANG CHỦ</a>
   
        <?php
        $types = getTypesMenu();
        while ($row_type = mysqli_fetch_array($types)) {
            $idTL = $row_type["idTL"]

        ?>
            <div class="dropdown">
                <button class="dropbtn"> <?php echo $row_type['TenTL'] ?></button>
                <div class="dropdown-content">
                    <?php
                    $loaditin = getChildTypes($idTL);
                    while ($row_loaitin =  mysqli_fetch_array($loaditin)) {
                    ?>
                        <a href="index.php?p=tintrongloai&idLT=<?php echo $row_loaitin["idLT"] ?>">
                            <?php echo $row_loaitin["Ten"] ?>
                        </a>

                    <?php } ?>
                </div>
            </div>
        <?php
        }
        ?>
   




</ul>