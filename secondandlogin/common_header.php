<?php include('../firebase_connect.php');
if (!isset($_SESSION['username'])) {
    header('Location:../diamand/index.php');
} else
    $userId = $_SESSION['username'];
?>

<script>
    var ref = firebase.database().ref();

    ref.child("member").child(<?php echo $userId;?>).on("value", function(snapshot) {
        $('#_intro').html("Hi " + snapshot.val().name +", Welcome back");
        $('#_profile').html(" " + snapshot.val().name +"");
        $('#_profile1').html(" " + snapshot.val().name +"");
        $('#emails').html(" " + snapshot.val().email +"");

    }, function (error) {
        alert("Error: " + error.code);
    });

    firebase.database().ref("member").orderByChild('account').equalTo("seller").on('value', function(snap){
        $("#_seller_count").html(snap.numChildren());
    });
</script>
<div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
<!--              <li class="nav-item dropdown">-->
<!--                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">-->
<!--                  <i class="mdi mdi-bell mx-0"></i>-->
<!--                  <span class="count bg-success">2</span>-->
<!--                </a>-->
<!--                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">-->
<!--                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                        <div class="preview-icon bg-success">-->
<!--                          <i class="mdi mdi-information mx-0"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="preview-item-content">-->
<!--                        <h6 class="preview-subject font-weight-normal">Application Error</h6>-->
<!--                        <p class="font-weight-light small-text mb-0 text-muted">-->
<!--                          Just now-->
<!--                        </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                        <div class="preview-icon bg-warning">-->
<!--                          <i class="mdi mdi-settings mx-0"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="preview-item-content">-->
<!--                        <h6 class="preview-subject font-weight-normal">Settings</h6>-->
<!--                        <p class="font-weight-light small-text mb-0 text-muted">-->
<!--                          Private message-->
<!--                        </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                        <div class="preview-icon bg-info">-->
<!--                          <i class="mdi mdi-account-box mx-0"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="preview-item-content">-->
<!--                        <h6 class="preview-subject font-weight-normal">New user registration</h6>-->
<!--                        <p class="font-weight-light small-text mb-0 text-muted">-->
<!--                          2 days ago-->
<!--                        </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                </div>-->
<!--              </li>-->
<!--              <li class="nav-item dropdown">-->
<!--                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">-->
<!--                  <i class="mdi mdi-email mx-0"></i>-->
<!--                  <span class="count bg-primary">4</span>-->
<!--                </a>-->
<!--                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">-->
<!--                  <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                        <img src="images/faces/face4.jpg" alt="image" class="profile-pic">-->
<!--                    </div>-->
<!--                    <div class="preview-item-content flex-grow">-->
<!--                        <h6 class="preview-subject ellipsis font-weight-normal">David Grey-->
<!--                        </h6>-->
<!--                        <p class="font-weight-light small-text text-muted mb-0">-->
<!--                          The meeting is cancelled-->
<!--                        </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                        <img src="images/faces/face2.jpg" alt="image" class="profile-pic">-->
<!--                    </div>-->
<!--                    <div class="preview-item-content flex-grow">-->
<!--                        <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook-->
<!--                        </h6>-->
<!--                        <p class="font-weight-light small-text text-muted mb-0">-->
<!--                          New product launch-->
<!--                        </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                        <img src="images/faces/face3.jpg" alt="image" class="profile-pic">-->
<!--                    </div>-->
<!--                    <div class="preview-item-content flex-grow">-->
<!--                        <h6 class="preview-subject ellipsis font-weight-normal"> Username-->
<!--                        </h6>-->
<!--                        <p class="font-weight-light small-text text-muted mb-0">-->
<!--                          Upcoming board meeting-->
<!--                        </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                </div>-->
<!--              </li>-->

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
                <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../diamand/images/icon2.png" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
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
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
-->
                      <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="images/faces/face28.png" alt="Profile image">
                  <p id="_profile1" class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p id="emails" class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                      <a class="dropdown-item">


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
                <a class="nav-link" href="index.php">
                  <i class="mdi mdi-home menu-icon"></i>
                  <span class="menu-title">Home</span>
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
              
                <li class="nav-item">
                  <a href="cart.php" class="nav-link">
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
                  <a href="../maindashbord/stock.php" class="nav-link">
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