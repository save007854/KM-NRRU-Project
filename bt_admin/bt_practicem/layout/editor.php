<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KM NRRU</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/nrru-logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="http://localhost/Project/webproject/login-systeam/admin_page.php" class="logo d-flex align-items-center">
        <img src="assets/img/nrru.png" alt="">
        <span class="d-none d-lg-block">NrruAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

     

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>   
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/save.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-3">Save</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>save</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
            <a href="http://localhost/Project/webproject/login-systeam/" class="btn">ออกจากระบบ</a>
                
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->


  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="http://localhost/Project/webproject/login-systeam/admin_page.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

             <!-- เล่มแนวปฏิบัติ -->
          <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-layout-text-window-reverse"></i><span>เล่มแนวปฏิบัติ</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                      <a href="http://localhost/Project/webproject/bt_admin/bt_practicem/home">
                        <i class="bi bi-circle"></i><span>ข้อมูลเล่มแนวปฏิบัติ</span>
                      </a>
                    </li>
                  <li>
                      <a href="http://localhost/Project/webproject/bt_admin/bt_practicem/editor" class="active">
                      <i class="bi bi-circle"></i><span>เพิ่มข้อมูลเล่มแนวปฏิบัติ</span>
                    </a>
                     </li>
                </ul>
              </li><!-- End Tables Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>แนวปฏิบัติที่ดี</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
             <a href="http://localhost/Project/webproject/bt_admin/bt_practiced/home">
              <i class="bi bi-circle"></i><span>ข้อมูลแนวปฏิบัติที่ดี</span>
            </a>
          </li>
          <li>
            <a href="http://localhost/Project/webproject/bt_admin/bt_practiced/editor">
              <i class="bi bi-circle"></i><span>เพิ่มข้อมูลแนวปฏิบัติที่ดี</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <!-- table เพิ่ม ลบ แก้ไขการใช้ประโยชน์ -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>การใช้ประโยชน์</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <a href="http://localhost/Project/webproject/bt_admin/bt_utilization/home">
            <i class="bi bi-circle"></i><span>ข้อมูลการใช้ประโยชน์</span>
            </a>
          </li>
          <a href="http://localhost/Project/webproject/bt_admin/bt_utilization/editor">
            <i class="bi bi-circle"></i><span>เพิ่มข้อมูลการใช้ประโยชน์</span>
            </a>
          </li>
          <li>
        </ul>
      </li>

              <!-- End Table -->


              <!-- table กลุ่มความรู้ -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>ด้านกลุ่มความรู้</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="http://localhost/Project/webproject/bt_admin/bt_knowledge/home">
            <i class="bi bi-circle"></i><span>ข้อมูลกลุ่มความรู้</span>
            </a>
          </li>
          <a href="http://localhost/Project/webproject/bt_admin/bt_knowledge/editor">
            <i class="bi bi-circle"></i><span>เพิ่มข้อมูลกลุ่มความรู้</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

              <!-- table ความรู้ -->
              <li class="nav-item">
                  <a class="nav-link collapsed" data-bs-target="#icons" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-book"></i><span>ด้านความรู้</span><i class="bi bi-chevron-down ms-auto"></i>
                  </a>
                  <ul id="icons" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                      <a href="http://localhost/Project/webproject/bt_admin/bt_knowl/home">
                      <i class="bi bi-circle"></i><span>ข้อมูลความรู้</span>
                      </a>
                    </li>
                    <a href="http://localhost/Project/webproject/bt_admin/bt_knowl/editor">
                      <i class="bi bi-circle"></i><span>เพิ่มข้อมูลความรู้</span>
                      </a>
                    </li>
                  </ul>
                </li><!-- End Forms Nav -->

      <!-- กราฟ -->
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>กราฟคนเข้าใช้งาน</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="charts-chartjs.html">
                    <i class="bi bi-circle"></i><span>Chart.js</span>
                  </a>
                </li>
              </ul>
            </li><!-- End Charts Nav -->

        </aside><!-- End Sidebar-->

        <main id="main" class="main">

          <div class="pagetitle">
            <h1>เพิ่มข้อมูลเล่มแนวปฏิบัติ</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/Project/webproject/login-systeam/admin_page.php">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">เพิ่มข้อมูลเล่มแนวปฏิบัติ</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <h1>เพิ่มข้อมูลเล่มแนวปฏิบัติ</h1>
    <form method='post' action=''>

           <div class="card-body">ปี พ.ศ. *
             <input type="title" name="bt_years" class="form-control" placeholder="กรอกข้อมูล">
         </div>
         <div class="card-body">รายชื่อคณะกรรมการ	*
             <input type="title" name="bt_cabtacts" class="form-control" placeholder="กรอกข้อมูล">
         </div>
         <div class="card-body">เล่มแนวปฏิบัติที่ดี *
             <input type="title" name="bt_bookpractice" class="form-control" placeholder="กรอกข้อมูล">
         </div>
         <div class="card-body">การจัดการความรู้ครั้งที่ *
             <input type="title" name="bt_knowledge" class="form-control" placeholder="กรอกข้อมูล">
         </div>
        </div>
        
           <button type="submit" name="submit" class="btn btn-success rounded-pill">Submit</button><br>
  </div>
  </form>
<!-- End Reports -->

                       
          </div>
        </div><!-- End Left side columns -->


        <!-- Right side columns -->
        
              </div>

            </div>
          </div><!-- End Recent Activity -->

                   
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NrruAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://www.facebook.com/profile.php?id=100003107586310">Thanakorn</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
