<div class="container">
    <nav class="layout-menu">
      <?php
        if (!$_SESSION) {
           echo "<a href='index.php'>Trang chủ</a>";
         }else {
           echo "<a href='#'>Trang chủ</a>";
         } 
       ?>

      <?php if(!$_SESSION){
      	echo "<a href='login.php'>Đăng nhập</a>";
      }else{
      	echo "<a href='logout.php'>Đăng xuất</a>";
      } ?>
      <?php
      if (!$_SESSION) {
        echo "<a href='register.php'>Đăng ký</a>";
      } 
      ?>
      <a href="hoidap.php">Hỏi đáp</a>
      <a>Giới thiệu</a>
    </nav>
</div>