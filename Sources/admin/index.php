<?php include("../functions/init.php"); ?>
<?php $sql = "SELECT * FROM join_project, lecturers, projects, students WHERE lecturers.id = join_project.id_lecturer AND students.id_student = join_project.id_student AND projects.id = join_project.id_project";
  $result = query($sql);
  confirm($result);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Quản trị đồ án CNTT</title>
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="#"/>
</head>

<body>
  <div class="container-scroller">
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
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face4.jpg" alt="profile image">
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
          <!-- Menu -->
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Quản lý đồ án</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/thongbao.php">
              <i class="menu-icon mdi mdi-arrow-up-bold"></i>
              <span class="menu-title">Thông báo mới</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/phanbien.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Phản biện đồ án</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/ketqua.php">
              <i class="menu-icon mdi mdi-checkbox-marked"></i>
              <span class="menu-title">Kết quả đồ án</span>
            </a>
          </li>
        ` <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Quản lý tài khoản</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/tables/sinhvien.php"> Tài khoản sinh viên </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/tables/giaovien.php"> Tài khoản giáo viên </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ĐỒ ÁN</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Đề tài</th>
                          <th>Tài khoản</th>
                          <th>Giảng viên hướng dẫn</th>
                          <th>Tiến trình</th>
                          <th>Tiền độ qua tuần</th>
                          <th>Hạn nộp</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- Show all project -->
                        <?php while($row = fetch_array($result)): ?>
                        <tr>
                          <td><?php echo $row['topic']; ?></td>
                          <td><?php echo $row['username_student'];?></td>
                          <td><?php echo $row['username']; ?></td>
                          <td class="text-danger"><i class="mdi mdi-arrow-down"></i></td>
                          <td><?php echo $row['time_begin']; ?></td>
                          <td><?php echo $row['deadline']; ?></td>
                        </tr>
                        <?php endwhile; ?>  
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>