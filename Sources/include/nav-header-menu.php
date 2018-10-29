<div class="container">
    <nav class="layout-menu">
      <a href="index.php">Trang chủ</a>

      <?php if(!$_SESSION){
      	echo "<a href='login.php'>Đăng nhập</a>";
      }else{
      	echo "<a href='logout.php'>Đăng xuất</a>";
      } ?>
      <a href="register.php">Đăng ký</a>
      <a href="hoidap.php">Hỏi đáp</a>
      <a>Giới thiệu</a>
    </nav>
</div>