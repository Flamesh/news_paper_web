<ul class="width_common" id="menu_web">
    <a class="dropbtn" href="./">TRANG CHỦ</a>
    <li>
        <?php
        $types = getTypesMenu();
        while ($row_type = mysql_fetch_array($types)) {
            $idTL = $row_type["idTL"]

        ?>
            <div class="dropdown">
                <button class="dropbtn"> <?php echo $row_type['TenTL'] ?></button>
                <div class="dropdown-content">
                    <?php
                    $loaditin = getChildTypes($idTL);
                    while ($row_loaitin =  mysql_fetch_array($loaditin)) {
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

        <!-- <div class="dropdown">
                    <button class="dropbtn">TIN TỨC</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                 </div>
                 <div class="dropdown">
                    <button class="dropbtn">VĂN BẢN HÀNH CHÍNH</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                 </div>
                 <div class="dropdown">
                    <button class="dropbtn">THỦ TỤC HÀNH CHÍNH</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                 </div> -->
    </li>




</ul>