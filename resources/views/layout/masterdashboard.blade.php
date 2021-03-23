<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard Admin GSM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('/assets/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/assets/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('/assets/css/vertical-layout-light/style.css?v=1.1')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav id="top-nav" class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="/"><img src="{{asset('/assets/images/main-icon.png')}}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="/"><img src="{{asset('/assets/images/small-icon.png')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('/assets/images/faces/face19.jpg')}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/modul/createmodul">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Buat Modul</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/raport/createraport">
              <i class="ti-agenda menu-icon"></i>
              <span class="menu-title">Buat Format Raport</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kupon/createkupon">
              <i class="ti-credit-card menu-icon"></i>
              <span class="menu-title">Buat Kupon Perubahan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/listuser">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">List User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-blackboard menu-icon"></i>
              <span class="menu-title">List Sekolah</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/sekolah/sekolahmodel">Sekolah Model</a></li>
                <li class="nav-item"> <a class="nav-link" href="/sekolah/sekolahemodel">Sekolah e-Model</a></li>
                <li class="nav-item"> <a class="nav-link" href="/sekolah/sekolahjejaring">Sekolah Jejaring</a></li>
                <li class="nav-item"> <a class="nav-link" href="/sekolah/sekolahindonesia">Sekolah Indonesia</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="ti-book menu-icon"></i>
              <span class="menu-title">List Modul</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="/modul/modulspesial">Spesial</a></li>
                <li class="nav-item"><a class="nav-link" href="/modul/modulbasic">Level Basic</a></li>
                <li class="nav-item"><a class="nav-link" href="/modul/moduladvanced">Level Advanced</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="ti-bookmark-alt menu-icon"></i>
              <span class="menu-title">List Raport</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/raport/raportuser">Raport User</a></li>
                <li class="nav-item"> <a class="nav-link" href="/raport/raportsekolah">Raport Sekolah</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="ti-pencil-alt menu-icon"></i>
              <span class="menu-title">List Permintaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/request/permintaanmentor">Mentor</a></li>
                <li class="nav-item"> <a class="nav-link" href="/request/permintaansekolah">Sekolah Model</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kupon/listkupon">
              <i class="ti-id-badge menu-icon"></i>
              <span class="menu-title">Kupon Perubahan</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      
      @yield('container')

      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. from Team GSM. All rights reserved.</span>
        </div>
      </footer>

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('/assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('/assets/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('/assets/js/template.js')}}"></script>
  <script src="{{asset('/assets/js/settings.js')}}"></script>
  <script src="{{asset('/assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('/assets/js/dashboard.js')}}"></script>
  <script src="{{asset('/assets/js/Chart.roundedBarCharts.js')}}"></script>
	<script> 
		$(document).ready(function() {
			const linkLi = $( ".nav-item" );
			const linkAnchor = $( ".nav-item a" ); // anchor is require to prevent for not to direct
			linkAnchor.bind( "click", function(event) {
				var clickedItem = $( this ).parent("li:first");
				linkLi.each( function() {
					$( this ).removeClass( "active" );
				});
				clickedItem.addClass( "active" );
			});
		   $( ".nav-item a[href$='"+window.location.pathname+"']" ).parent("li:first").addClass("active"); 
		});
	</script>
	<script>
			jQuery(function($) {
			var path = window.location.href; 
			$('ul a').each(function() { 
				if (this.href === path) {
					$(this).addClass('sub-menu active');
					$( this ).parent().parent().closest("li").addClass('active2');
					$('.active2 a:first').addClass('active'); //add the active class to the parent node
				}
			});
			});
	</script>
  <!-- End custom js for this page-->
</body>

</html>

