<?php include("../../../functions/init.php") ?>
<?php $sql = "SELECT * FROM students";
  $result = query($sql);
  confirm($result);
 ?>
<?php
  $delete = $_POST['username'];
  $xoa_phantu = "DELETE FROM students WHERE username = $delete";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Phản biện</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          Admin
        </a>
      </div>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
       <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="../../images/faces/face4.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  <div>
                    <small class="designation text-muted">Quản lý</small>
                     <a href="#">
                      <span class="glyphicon glyphicon-log-out">Đăng Xuất</span>
                    </a>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">Đồ án mới
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Quản lý đồ án</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/thongbao.php">
              <i class="menu-icon mdi mdi-arrow-up-bold"></i>
              <span class="menu-title">Thông báo mới</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/phanbien.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Phản biện đồ án</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/icons/ketqua.php">
              <i class="menu-icon mdi mdi-checkbox-marked"></i>
              <span class="menu-title">Kết quả đồ án</span>
            </a>
          </li>
          </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Quản lý tài khoản</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/tables/sinhvien.php"> Tài khoản sinh viên </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/tables/giaovien.php"> Tài khoản giáo viên </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
        <div>
        <div class="content-wrapper">
          <div class="row purchace-popup">
          </div>
          <form action="<?php $PHP_SEFL?>" method="POST">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bảng quản lý tài khoản sinh viên</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th id="username">Họ và tên</th>
                          <th>Email</th>
                          <th>Mật khẩu</th>
                        </tr>
                        <tbody>
                          <?php while($row = fetch_array($result)): ?> 
                          <tr>
                          <td><?php echo $row['username_student'] ?></td>
                          <td><?php echo $row['email'] ?></td>
                          <td class="text-danger"><?php echo $row['password_student'] ?></td>
                          <td>
                              <input type="button" name="xoa" id="xoa" value="Xóa">
                              <br>
                              <br>
                              <input type="button" name="them" id="them" value="Thêm">
                          </td>
                          </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </thead> 
                   </table>
                  </div>
                </div>
              </div>
            </div>
      </div>
      </form>
    </div>
  </div>
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
</body>

</html>