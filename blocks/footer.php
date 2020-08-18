<div class="thongtin-title">
   <div class="right">
      <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
   </div>
</div>
<div class="thongtin-content">
   <?php
   $types = getTypesMenu();
   while ($row_type = mysqli_fetch_array($types)) {
      $idTL = $row_type["idTL"]
   ?>
      <ul class="ulBlockMenu">
         <li class="liFirst">
            <h2>
               <a class="mnu_giaoduc" href="#"><?php echo $row_type['TenTL'] ?></a>
            </h2>
         </li>
         <li class="liFollow">
            <?php
            $loaditin = getChildTypes($idTL);
            while ($row_loaitin =  mysqli_fetch_array($loaditin)) {
            ?>
               <h2>
                  <a href="index.php?p=tintrongloai&idLT=<?php echo $row_loaitin["idLT"] ?>">
                     <?php echo $row_loaitin["Ten"] ?>
                  </a>
               </h2>

            <?php } ?>
         </li>
      </ul>

   <?php } ?>
</div>