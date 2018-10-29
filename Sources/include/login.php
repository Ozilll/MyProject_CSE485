<div class="background-color">
  <div class="container">
    <div class="login-form">
      <div class="main-div">
        <img src="img/logo.png" class="logo-login">
        <div class="panel">
          <h2>QUẢN LÝ ĐỒ ÁN TỐT NGHIỆP</h2>
          <hr>
        </div>
        <?php display_message(); ?>
        <form id="Login" method="POST">
          <?php validate_user_login() ?>
          <div class="form-group">
            <input type="email" class="form-control" name="email_student" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password_student" placeholder="Mật khẩu">
          </div>
          <div class="form-group">
            <input type="checkbox" tabindex="3" name="remember" id="remember" style="float: left;">
            <label for="remember" style="float: left;"> Lưu tài khoản</label>
          </div>
          <br>
          <br>
          <div class="forgot">
            Chưa có tài khoản? <a href="register.php">Đăng ký</a>
          </div>
          <div class="forgot">
            Quên mật khẩu? <a href="recover.php">Nhấn vào đây</a>
          </div>
          <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
      </div>
    </div>
  </div>
</div>
