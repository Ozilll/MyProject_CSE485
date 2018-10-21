<div class="background-color">
  <div class="container">
    <div class="login-form">
      <div class="main-div">
        <img src="img/logo.png" class="logo-login">
        <div class="panel">
          <h2>ĐĂNG KÝ</h2>
          <hr>
        </div>
        <?php validate_user_registration(); ?>
        <form id="register-form" method="post" role="form">
          <div class="form-group">
            <input type="text" class="form-control" name="username_student" placeholder="Tên tài khoản" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="first_name_student" placeholder="Tên" required>
          </div>
          <div>
            <input type="text" class="form-control" name="last_name_student" placeholder="Họ" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email_student" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password_student" placeholder="Mật khẩu" required>
          </div>
          <div class="form-control">
            <input type="password" class="form-control" name="confirm_password" placeholder="Xác thực mật khẩu" required>
          </div>
          <hr>
          <button type="submit" class="btn btn-primary" name="register-submit">Đăng ký</button>
        </form>
      </div>
    </div>
  </div>
</div>