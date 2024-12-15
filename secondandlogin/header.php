<!DOCTYPE html>
<html lang="en">
    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trade Diamond Panel </title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../diamand/images/dimamondfav.png" />
  </head>
    	<script>
	var ref = firebase.database().ref();

ref.child("member").child(<?php echo $userId;?>).on("value", function(snapshot) {
	$('#_intro').html("Hi " + snapshot.val().name +", Welcome back");
	$('#_profile').html(" " + snapshot.val().name +"");
}, function (error) {
   alert("Error: " + error.code);
});

  firebase.database().ref("member").orderByChild('account').equalTo("seller").on('value', function(snap){
	  $("#_seller_count").html(snap.numChildren());
});
	</script>
    <style>
    /*        start littel logos section with tons of images*/
        
        
      .logos-section {
    text-align: center;
    background: #fff;
}
        .container-fluid {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}
        .logos-section h2 {
    color: #35393d;
    margin: 0 0 54px;
    font: 36px 'Hind Vadodara',sans-serif;
    padding-top: 57px;
}
     .logos-list > li {
    display: inline-block;
    vertical-align: middle;
}
        .logos-list {
    list-style: none;
    padding: 0;
    font-size: 0;
    line-height: 0;
    font-family: 'AdobeBlank';
    padding-bottom: 100px;
}
        .logos-list .logo-image {
    position: relative;
    overflow: hidden;
    display: inline-block;
    margin-bottom: 50px;
}
        .logos-list .logo-image img {
    max-height: 40px;
    display: block;
    width: auto;
    max-width: 100%;
}
        .logos-list.logos-trusted .logo-image.logo-01 img {
    padding: 0px 56px 0px 0px;
}

.logos-list.logos-trusted .logo-image img {
    max-height: 50px !important;
}
.logos-list .logo-image.logo-01 img {
    padding: 0px 58px 0px 0px;
}.logos-list .logo-image.logo-02 img {
    padding: 0px 58px 0px 0px;
}.logos-list .logo-image.logo-03 img {
    padding: 0px 58px 0px 0px;
}.logos-list .logo-image.logo-04 img {
    padding: 0px 58px 0px 0px;
}
     
        /*        ends littel logos section with tons of images*/

        
        
              
/*        start app area images and get app playstore*/
        
        
        .app-area-img {
    max-height: 655px;
    max-width: 100%;
/*            position: absolute;*/
    height: 655px;
    top: 0;
    right: 0;
    z-index: 1;
}
        .app-area-img {
    max-height: 655px;
    max-width: 100%;
}
        
        .app-area-img {
    position: absolute;
    height: 655px;
    top: 0;
    right: 1px;
    z-index: 1;
}
        
        .app-area-body h3 {
    font-size: 36px;
    margin-top: 82px;
    margin-bottom: 25px;
            color: #62657a;
}
        .app-area-body p {
    font-family: 'Hind Vadodara',sans-serif;
    line-height: 25px;
            color: #626482;
            font-size: 13;
            line-height: 1.9;
}
        .app-area-link {
    display: block;
    border: 2px;
    border-radius: 4px;
    border-style: solid;
    border-color:#c0c0c0;
    text-transform: uppercase;
    font-size: 15px;
    margin-left: 35px;
    margin-right: 40px;

    margin-top: 21px;
    margin-bottom: 105px;
}
    
.app-area-link:hover, .app-area-link:focus {
    border-color: #00ADE6;
    color: #fff;
    box-shadow: 3px 5.196px 18px 0px rgba(0,0,0,0.25);
    background-color: #00ADE6;
}

.app-area-link:hover {
    text-decoration: none;
}
        
        .apple-link img {
    margin-left: auto;
    margin-right: auto;
/*    padding: 10px;*/
            display: block;
    max-width: 100%;
    height: auto;
}
        .google-link img {
    margin-left: auto;
    margin-right: auto;
/*    padding: 10px;*/
            display: block;
    max-width: 100%;
    height: auto;
                margin-left: 18px;

}
        .bts   {
            color: aqua;
        }
        .app-area {
    position: relative;
    height: 580px;
}
        
        /*        ends app area images and get app playstore*/

        
        
        
        
        
        
        
        
        
    
    </style>
    
    
    
    <body>
    <div class="container-scroller">
<!--
				<div class="pro-banner" id="pro-banner">
						<div class="card pro-banner-bg border-0 rounded-0">
							<div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
								<p class="mb-0 text-white font-weight-medium mb-2 mb-lg-0 mb-xl-0">Like what you see? Checkout our premium version for more.</p>
								<div class="d-flex">
									<a href="https://github.com/Bootstrapdash/Kapella-Free-Bootstrap-Admin-Template" target="_blank" class="btn btn-outline-light mr-2">Download free version</a>
									<a href="http://www.bootstrapdash.com/demo/kapella/template/" target="_blank" class="btn btn-outline-light mr-2 bg-white text-dark">Upgrade to Pro</a>
									<button id="bannerClose" class="btn border-0 p-0">
										<i class="mdi mdi-close text-white"></i>
									</button>
								</div>
						</div>
					</div>
				</div>
-->
		<!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
              <li class="nav-item dropdown">
                  
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell mx-0"></i>
                  <span class="count bg-success">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                          <i class="mdi mdi-information mx-0"></i>
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
                          <i class="mdi mdi-settings mx-0"></i>
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
                          <i class="mdi mdi-account-box mx-0"></i>
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
                
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email mx-0"></i>
                  <span class="count bg-primary">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          The meeting is cancelled
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          New product launch
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal"> Username
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          Upcoming board meeting
                        </p>
                    </div>
                  </a>
                </div>
              </li>
                
<!--                massage icons-->
<!--
              <li class="nav-item dropdown">
                <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
              </li>
-->
<!--
              <li class="nav-item nav-search d-none d-lg-block ml-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                </div>
              </li>	
-->
            </ul>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.php"><img src="../diamand/images/icon2.png" alt="logo" style="height: 50px" /></a>
                <a class="navbar-brand brand-logo-mini" href="#"><img src="../diamand/images/icon2.png" alt="logo"/></a>
            </div>
              
            <ul class="navbar-nav navbar-nav-right">
<!--
                 <li class="nav-item dropdown">
                <a href="#" class="nav-link count-indicator "><i class="mdi mdi-cart"></i></a>
              </li>
-->
<!--
                <li class="nav-item dropdown  d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Product </button>
                </li>
-->
                 <li class="nav-item dropdown d-lg-flex d-none">
                  <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-toggle="dropdown"><img src="../diamand/images/in.svg" alt="" class="img-circle" style="
    height: 25px;
    margin: 0px 11px 0px 0px;
">
                  English
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
<!--                      <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>-->
                      <a class="dropdown-item">
                        <img src="../diamand/images/cn.svg" alt="" class="img-circle" style="
    height: 25px;
    margin: 0px 11px 0px 0px;
">
                        Chinese
                      </a>
<!--
                      <a class="dropdown-item">
                        <i class="mdi mdi-file-excel text-primary"></i>
                        Exel
                      </a>
-->
                  </div>
                </li>
<!--
                <li class="nav-item dropdown d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
                </li>
-->
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <span id="_profile" class="nav-profile-name">Username</span>
                    <span class="online-status"></span>
                    <img src="images/faces/face28.png" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
<!--
                       <a class="dropdown-item">
                        <i class="mdi mdi-account text-primary"></i>
                        Profile
                      </a>
-->
<!--
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
-->
                      <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                      <a href="../logout.php" class="dropdown-item">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="color: #151515">
                  <i class="mdi mdi-home menu-icon" style="color: #e75b4f;"></i>
                  <span class="menu-title" style="color: #151515">Home</span>
                </a>
              </li>
                 <li class="nav-item">
                  <a href="../secondandlogin/search.php" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Search</span>
                    <i class="menu-arrow"></i>
                  </a>
<!--
                  <div class="submenu">
                      <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                      </ul>
                  </div>
-->
              </li>
<!--
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">UI Elements</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul>
                          <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                      </ul>
                  </div>
              </li>
-->
              <li class="nav-item">
                  <a href="../secondandlogin/supplier.php" class="nav-link">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    <span class="menu-title">Suppliers</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../secondandlogin/support.php" class="nav-link">
                    <i class="mdi mdi-headset menu-icon"></i>
                    <span class="menu-title">Support</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
<!--
              <li class="nav-item">
                  <a href="../secondandlogin/trending.php" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Trending</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
-->
                 <li class="nav-item">
                  <a href="../diamand/shop.php" class="nav-link">
                      <span class="count bg-success" style="
    height: 17px;
    border-radius: .25rem;
    color: #ffffff;
    top: 0px;
    font-size: 12px;
    line-height: 8px;
    position: absolute;
    padding: 5px;
">2</span>
                    <i class="mdi mdi-cart menu-icon"></i>
                    <span class="menu-title">Cart</span>
                    <i class="menu-arrow"></i>
                      
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../maindashbord/dashbord.php" class="nav-link">
                    <i class="mdi mdi-view-dashboard menu-icon"></i>
                    <span class="menu-title">Dashbord</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
<!--
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Search</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                      </ul>
                  </div>
              </li>
-->
<!--
              <li class="nav-item">
                  <a href="docs/documentation.html" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Documentation</span></a>
              </li>
-->
            </ul>
        </div>
      </nav>
    </div>
   
                        
                        
                        
                        
                        
<!--           extra bug             -->
                        
        </div>

		<!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
		<script src="vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
		<script src="vendors/justgage/raphael-2.1.4.min.js"></script>
		<script src="vendors/justgage/justgage.js"></script>
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>