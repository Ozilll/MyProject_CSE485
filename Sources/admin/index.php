<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Quản trị đồ án CNTT</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="#"/>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
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
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Quản lý đồ án</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.php">
              <i class="menu-icon mdi mdi-arrow-up-bold"></i>
              <span class="menu-title">Thông báo mới</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Phản biện đồ án</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.php">
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
                          <th>
                            #
                          </th>
                          <th>
                            Họ Tên
                          </th>
                          <th>
                            Tiến trình
                          </th>
                          <th>
                            Tiền độ qua tuần
                          </th>
                          <th>
                            Hạn nộp
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="font-weight-medium">
                            1
                          </td>
                          <td>
                            Trương Minh Đức
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-danger"> 3.64%
                            <i class="mdi mdi-arrow-down"></i>
                          </td>
                          <td>
                            15/5/2018
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-medium">
                            2
                          </td>
                          <td>
                            Vân ri
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </td>
                          
                          <td class="text-success"> 4.56%
                            <i class="mdi mdi-arrow-up"></i>
                          </td>
                          <td>
                            1/5/2018
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-medium">
                            3
                          </td>
                          <td>
                            Nguyễn Hữu Đức
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </td>
                          
                          <td class="text-danger"> 2.76%
                            <i class="mdi mdi-arrow-down"></i>
                          </td>
                          <td>
                            13/6/2018
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-medium">
                            4
                          </td>
                          <td>
                            Đinh Đăng Đức
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </td>
                          
                          <td class="text-danger"> 3.45%
                            <i class="mdi mdi-arrow-down"></i>
                          </td>
                          <td>
                            15/5/2018
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-medium">
                            5
                          </td>
                          <td>
                            Phạm Việt Hưng
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </td>
                          
                          <td class="text-success"> 1.32%
                            <i class="mdi mdi-arrow-up"></i>
                          </td>
                          <td>
                            3/5/2018
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-medium">
                            6
                          </td>
                          <td>
                            Trần Việt Nam Hoàng
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </td>
                          
                          <td class="text-danger"> 2.67%
                            <i class="mdi mdi-arrow-down"></i>
                          </td>
                          <td>
                            16/6/2018
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Phản biện</h5>
                  <div class="fluid-container">
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face4.jpg" alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Đức :</p>
                          <p class="text-primary mr-1 mb-0">[#23047]</p>
                          <p class="mb-0 ellipsis">.................</p>
                        </div>
                      
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Lần phản hồi cuối :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">3 phút trước</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Đăng lúc :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">2 Ngày trước</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Quản lý
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-reply fa-fw"></i>Phản hồi</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-history fa-fw"></i>Hành động khác</a>
                            <div class="dropdown-divider"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face2.jpg" alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Vân :</p>
                          <p class="text-primary mr-1 mb-0">[#23135]</p>
                          <p class="mb-0 ellipsis">.</p>
                        </div>
                        
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Lần phản hồi cuối :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">3 tiếng trước</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Đăng lúc :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">4 ngày trước</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Quản lý
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-reply fa-fw"></i>Phản hồi</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-history fa-fw"></i>Hành động khác</a>
                            <div class="dropdown-divider"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face3.jpg" alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Loan :</p>
                          <p class="text-primary mr-1 mb-0">[#23246]</p>
                          <p class="mb-0 ellipsis">.</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">.</p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Lần phản hồi cuối :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">5 hours ago</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Đăng lúc :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">2 Ngày trước</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Quản lý
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-reply fa-fw"></i>Phản hồi</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-history fa-fw"></i>Hành động khác</a>
                            <div class="dropdown-divider"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

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