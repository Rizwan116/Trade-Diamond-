<!DOCTYPE html>
<html lang="en">
<?php include('../firebase_connect.php');
if (!isset($_SESSION['username'])) {
    header('Location:../diamand/index.php');
} else
    $userId = $_SESSION['username'];
$userId = "1594993616947";
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Dashbord Stock</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/css-stars.css"/>
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css"/>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css"/>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../diamand/images/dimamondfav.png"/>
</head>
<script>
    var ref = firebase.database().ref();
    var userId = <?php echo $userId;?>;
    var m = 0;
    var docData = [];
     var fireRef = firebase.firestore();
    overallJson = [];
    ref.child("member").child(userId).once("value", function (snap) {
        var objDiamond = snap.val().diamond;
        for (var child in objDiamond) {
            var tmk = child;
            console.log(tmk);
             fireRef.collection("diamond").doc(tmk).get().then(function (doc) {
                var m = 0;
                docData.push(doc);
                var d_data = doc.data();
                var c = 0;
                var spanData = "";
                 item = {}
                 item [doc.key+""] = "owner";
                 for (var key in d_data) {
                    var sctual_key = key + "";
                     item [sctual_key] = d_data[key];
                    if (sctual_key != 'owner' && sctual_key != 'image_url') {
                          if (c == 3) {
                            break;
                        }
                        spanData = spanData + " " + d_data[key];
                        c++;

                    }
                }
                 overallJson.push(item);
                 var refData = '<div class="stretch-card grid-margin" style="max-width: 250px" >\n' +
                    '                        <div class="card">\n' +
                    '                            <div class="card-body p-0">\n' +
                    '                                <img class="img-fluid w-100"  onClick=popupDisplay("' + m + '") src="' + doc.data().image_url + '" alt="" style="height:250px;width:250px;">\n' +
                    '                            </div>\n' +
                    '                            <div class="card-body px-3 text-dark">\n' +
                    '                                <div class="d-flex justify-content-between">\n' +
                    '                                    <p class="text-muted font-13 mb-0">Owner :-' + snap.val().name + '  </p>\n' +
                    '                                    <i class="mdi mdi mdi-cart" style="font-size: 24px;"></i>\n' +
                    '                                </div>\n' +
                    '                                <h5 class="font-weight-semibold">' + spanData + '</h5>\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                    </div>';
                $("#result_diamond").append(refData);
                m++;
            }).catch(function (error) {
                console.log("Error getting cached document:", error);
            });
        }
     });

</script>
<body>
<?php include_once("../CommonFile.php") ?>

<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile border-bottom">
                <a href="../maindashbord/pages/forms/profile.php" class="nav-link flex-column">
                    <div class="nav-profile-image">
                        <img src="../assets/images/faces/face1.jpg" alt="profile"/>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                        <span id="_profileName" class="font-weight-semibold mb-1 mt-2 text-center">Username</span>
                        <span class="text-secondary icon-sm text-center">Active</span>
                    </div>
                </a>
            </li>
            <li class="nav-item pt-3">
                <a class="nav-link d-block" href="../secondandlogin/index.php">
                    <img class="sidebar-brand-logo" src="../diamand/images/icon2.png" alt="" style="height: 45px;"/>
                    <img class="sidebar-brand-logomini" src="../diamand/images/dimamondfav.png" alt=""
                         style="height: 30px"/>
                    <div class="small font-weight-light pt-1"><img src="../diamand/images/arrow-left-circle.png">Get back to trade diamond</div>
                </a>
                <!--
                            <form class="d-flex align-items-center" action="#">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                                </div>
                                <input type="text" class="form-control border-0" placeholder="Search" />
                              </div>
                            </form>
                -->
            </li>
            <!--
                      <li class="pt-2 pb-1">
                        <span class="nav-item-head">Template Pages</span>
                      </li>
            -->
            <!--
                      <li class="nav-item">
                        <a class="nav-link" href="dashbord.html">
                          <i class="mdi mdi-home menu-icon"></i>
                          <span class="menu-title">Home</span>
                        </a>
                      </li>
            -->

            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-dropbox menu-icon"></i>
                    <span class="menu-title">Stock</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="diamond.php">
                    <i class="mdi mdi-pencil-circle menu-icon"></i>
                    <span class="menu-title">Add Diamond</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../maindashbord/pages/forms/profile.php">
                    <i class="mdi mdi-account-settings  menu-icon"></i>
                    <span class="menu-title">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../maindashbord/pages/forms/company.php">
                    <i class="mdi  mdi-account-card-details menu-icon"></i>
                    <span class="menu-title">Company</span>
                </a>
            </li>

            <!--
                        <li class="nav-item">
                        <a class="nav-link" href="#">
                          <i class="mdi mdi-diamond
             menu-icon"></i>
                          <span class="menu-title">Diamond Call</span>
                        </a>
                      </li>
            -->
            <!--
                      <li class="nav-item pt-3">
                        <a class="nav-link" href="#" target="_blank">
                          <i class="mdi mdi-file-document-box menu-icon"></i>
                          <span class="menu-title">Documentation</span>
                        </a>
                      </li>
            -->
        </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <!--        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>-->
        <!--
                <div id="theme-settings" class="settings-panel">
                  <i class="settings-close mdi mdi-close"></i>
                  <p class="settings-heading">SIDEBAR SKINS</p>
                  <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
                  </div>
                  <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                  </div>
                  <p class="settings-heading mt-2">HEADER SKINS</p>
                  <div class="color-tiles mx-0 px-4">
                    <div class="tiles default primary"></div>
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles light"></div>
                  </div>
                </div>
        -->
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-chevron-double-left"></span>
                </button>
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg"
                                                                                   alt="logo"/></a>
                </div>
                <!--
                            <ul class="navbar-nav">
                              <li class="nav-item dropdown">
                                <a class="nav-link" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                  <i class="mdi mdi-email-outline"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                  <h6 class="p-3 mb-0 font-weight-semibold">Messages</h6>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                      <img src="../assets/images/faces/face1.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                                      <p class="text-gray mb-0"> 1 Minutes ago </p>
                                    </div>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                      <img src="../assets/images/faces/face6.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                                      <p class="text-gray mb-0"> 15 Minutes ago </p>
                                    </div>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                      <img src="../assets/images/faces/face7.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                                      <p class="text-gray mb-0"> 18 Minutes ago </p>
                                    </div>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <h6 class="p-3 mb-0 text-center text-primary font-13">4 new messages</h6>
                                </div>
                              </li>
                              <li class="nav-item dropdown ml-3">
                                <a class="nav-link" id="notificationDropdown" href="#" data-toggle="dropdown">
                                  <i class="mdi mdi-bell-outline"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                  <h6 class="px-3 py-3 font-weight-semibold mb-0">Notifications</h6>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                      <div class="preview-icon bg-success">
                                        <i class="mdi mdi-calendar"></i>
                                      </div>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                      <h6 class="preview-subject font-weight-normal mb-0">New order recieved</h6>
                                      <p class="text-gray ellipsis mb-0"> 45 sec ago </p>
                                    </div>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                      <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings"></i>
                                      </div>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                      <h6 class="preview-subject font-weight-normal mb-0">Server limit reached</h6>
                                      <p class="text-gray ellipsis mb-0"> 55 sec ago </p>
                                    </div>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                      <div class="preview-icon bg-info">
                                        <i class="mdi mdi-link-variant"></i>
                                      </div>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                      <h6 class="preview-subject font-weight-normal mb-0">Kevin karvelle</h6>
                                      <p class="text-gray ellipsis mb-0"> 11:09 PM </p>
                                    </div>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <h6 class="p-3 font-13 mb-0 text-primary text-center">View all notifications</h6>
                                </div>
                              </li>
                            </ul>

                -->
                <ul class="navbar-nav navbar-nav-right">
                    <!--
                                  <li class="nav-item nav-logout d-none d-md-block mr-3">
                                    <a class="nav-link" href="#">Status</a>
                                  </li>
                    -->
                    <!--
                                  <li class="nav-item nav-logout d-none d-md-block">
                                    <button class="btn btn-sm btn-danger">Trailing</button>
                                  </li>
                    -->


                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <span class="nav-profile-name" style="margin-right: 12px;">Username</span>
                            <span class="online-status"></span>
                            <img src="../secondandlogin/images/faces/face28.png" alt="profile">
                        </a>
                        <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                            <!--
                                              <a class="dropdown-item" href="../maindashbord/pages/forms/profile.html">
                                                <i class="mdi mdi-account text-danger mr-3"></i> Profile </a>
                            -->
                            <div class="dropdown-divider"></div>
                            <!--
                                                   <a class="dropdown-item" href="#">
                                                <i class="mdi mdi-home-modern text-danger mr-3"></i> Company </a>
                            -->
                            <div class="dropdown-divider"></div>
                            <!--
                                                   <a class="dropdown-item" href="#">
                                                <i class="mdi mdi-clipboard-text text-danger mr-3"></i> Aml/Kyc </a>
                            -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-logout text-danger mr-3"></i> Logout </a>
                            <div class="dropdown-divider"></div>
                            <!--
                                              <a class="dropdown-item" href="#">
                                                <i class="flag-icon flag-icon-ru mr-3"></i>Russian </a>
                            -->
                        </div>
                    </li>


                    <li class="nav-item nav-profile dropdown d-none d-md-block">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                           aria-expanded="false">
                            <div class="nav-profile-text">English</div>
                        </a>
                        <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                            <!--
                                              <a class="dropdown-item" href="#">
                                                <i class="flag-icon flag-icon-bl mr-3"></i> French </a>
                            -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="flag-icon flag-icon-cn mr-3"></i> Chinese </a>
                            <div class="dropdown-divider"></div>
                            <!--
                                              <a class="dropdown-item" href="#">
                                                <i class="flag-icon flag-icon-de mr-3"></i> German </a>
                            -->
                            <div class="dropdown-divider"></div>
                            <!--
                                              <a class="dropdown-item" href="#">
                                                <i class="flag-icon flag-icon-ru mr-3"></i>Russian </a>
                            -->
                        </div>
                    </li>


                    <li class="nav-item nav-logout d-none d-lg-block">
                        <a class="nav-link" href="../secondandlogin/index.php">
                            <i class="mdi mdi-home-circle"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper pb-0">
                <div class="page-header flex-wrap">
                    <div class="header-left">
                        <!--
                                        <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Create new document </button>
                                        <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents </button>
                        -->
                    </div>
                    <div class="header-left d-flex flex-wrap mt-2 mt-sm-0">
                        <button class="btn btn-danger btn-lg mb-2 mb-md-0 mr-2" onclick="exportToCV()"> Export to CVS</button>


                        <button class="btn btn-danger btn-lg mb-2 mb-md-0" type="button" id="dropdownMenuButton1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Actions
                        </button>

                    </div>
                </div>


                <div class="d-lg-flex align-items-center">
                    <div style="padding: 35px">
                        <h3 class="text-info font-weight-bold mt-2 text-danger">Stock!</h3>
                        <!--                                    <h2 class="text-dark font-weight-bold">Search, buy and trade natural diamonds</h2>-->
                        <h5 class="font-weight-normal mb-2">Manage uploaded stock or upload stock manually.
                        </h5>
                        <div class="row" id="result_diamond"></div>


                        <!--
                                                           <div class="pt-5">
                                                             <button type="button" class="btn btn-lg btn-danger">Search Diamonds</button>
                                                            </div>
                        -->


                    </div>


                    <!--
                                                    <div class="ml-lg-5 d-lg-flex d-none">
                                                            <button type="button" class="btn bg-white btn-icon">
                                                                <i class="mdi mdi-view-grid text-success"></i>
                                                        </button>
                                                            <button type="button" class="btn bg-white btn-icon ml-2">
                                                                <i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
                                                            </button>
                                                    </div>
                    -->
                </div>


                <!-- first row starts here -->


                <!-- chart row starts here -->


                <!-- image card row starts here -->
                <div class="row">


                    <!--
                                  <div class="col-sm-4 stretch-card grid-margin">
                                    <div class="card">
                                      <div class="card-body p-0">
                                        <img class="img-fluid w-100" src="../assets/images/dashboard/img_1.jpg" alt="" />
                                      </div>
                                      <div class="card-body px-3 text-dark">
                                        <div class="d-flex justify-content-between">
                                          <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                                          <i class="mdi mdi-heart-outline"></i>
                                        </div>
                                        <h5 class="font-weight-semibold"> Cosy Studio flat in London </h5>
                                        <div class="d-flex justify-content-between font-weight-semibold">
                                          <p class="mb-0">
                                            <i class="mdi mdi-star star-color pr-1"></i>4.60 (35) </p>
                                          <p class="mb-0">$5,267/night</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                    -->
                    <!--
                                  <div class="col-sm-4 stretch-card grid-margin">
                                    <div class="card">
                                      <div class="card-body p-0">
                                        <img class="img-fluid w-100" src="../assets/images/dashboard/img_2.jpg" alt="" />
                                      </div>
                                      <div class="card-body px-3 text-dark">
                                        <div class="d-flex justify-content-between">
                                          <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                                          <i class="mdi mdi-heart-outline"></i>
                                        </div>
                                        <h5 class="font-weight-semibold"> Victoria Bedsit Studio Ensuite </h5>
                                        <div class="d-flex justify-content-between font-weight-semibold">
                                          <p class="mb-0">
                                            <i class="mdi mdi-star star-color pr-1"></i>4.83 (12) </p>
                                          <p class="mb-0">$6,144/night</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                    -->
                    <!--
                                  <div class="col-sm-4 stretch-card grid-margin">
                                    <div class="card">
                                      <div class="card-body p-0">
                                        <img class="img-fluid w-100" src="../assets/images/dashboard/img_3.jpg" alt="" />
                                      </div>
                                      <div class="card-body px-3 text-dark">
                                        <div class="d-flex justify-content-between">
                                          <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                                          <i class="mdi mdi-heart-outline"></i>
                                        </div>
                                        <h5 class="font-weight-semibold">Fabulous Huge Room</h5>
                                        <div class="d-flex justify-content-between font-weight-semibold">
                                          <p class="mb-0">
                                            <i class="mdi mdi-star star-color pr-1"></i>3.83 (15) </p>
                                          <p class="mb-0">$5,267/night</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                    -->
                </div>
                <!-- table row starts here -->
                <div class="row">

                    <div class="col-xl-4 grid-margin">
                        <!--
                                        <div class="card card-stat stretch-card mb-3">
                                          <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                              <div class="text-white">
                                                <h3 class="font-weight-bold mb-0">$168.90</h3>
                                                <h6>This Month</h6>
                                                <div class="badge badge-danger">23%</div>
                                              </div>
                                              <div class="flot-bar-wrapper">
                                                <div id="column-chart" class="flot-chart"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                        -->
                        <!--
                                        <div class="card stretch-card mb-3">
                                          <div class="card-body d-flex flex-wrap justify-content-between">
                                            <div>
                                              <h4 class="font-weight-semibold mb-1 text-black"> Member Profit </h4>
                                              <h6 class="text-muted">Average Weekly Profit</h6>
                                            </div>
                                            <h3 class="text-success font-weight-bold">+168.900</h3>
                                          </div>
                                        </div>
                        -->
                        <!--
                                        <div class="card stretch-card mb-3">
                                          <div class="card-body d-flex flex-wrap justify-content-between">
                                            <div>
                                              <h4 class="font-weight-semibold mb-1 text-black"> Total Profit </h4>
                                              <h6 class="text-muted">Weekly Customer Orders</h6>
                                            </div>
                                            <h3 class="text-success font-weight-bold">+6890.00</h3>
                                          </div>
                                        </div>
                        -->
                        <!--
                                        <div class="card mt-3">
                                          <div class="card-body d-flex flex-wrap justify-content-between">
                                            <div>
                                              <h4 class="font-weight-semibold mb-1 text-black"> Issue Reports </h4>
                                              <h6 class="text-muted">System bugs and issues</h6>
                                            </div>
                                            <h3 class="text-danger font-weight-bold">-8380.00</h3>
                                          </div>
                                        </div>
                        -->
                    </div>
                    <!--
                                  <div class="col-xl-8 stretch-card grid-margin">
                                    <div class="card">
                                      <div class="card-body pb-0">
                                        <h4 class="card-title mb-0">Financial management review</h4>
                                      </div>
                    -->
                    <!--
                                      <div class="card-body p-0">
                                        <div class="table-responsive">
                                          <table class="table custom-table text-dark">
                    -->
                    <!--
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Sale Rate</th>
                                                <th>Actual</th>
                                                <th>Variance</th>
                                              </tr>
                                            </thead>
                    -->
                    <!--                        <tbody>-->
                    <!--
                                              <tr>
                                                <td>
                                                  <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image" /> Jacob Jensen </td>
                                                <td>
                                                  <div class="d-flex">
                                                    <span class="pr-2 d-flex align-items-center">85%</span>
                                                    <select id="star-1" name="rating" autocomplete="off">
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                  </div>
                                                </td>
                                                <td>32,435</td>
                                                <td>40,234</td>
                                              </tr>
                    -->
                    <!--
                                              <tr>
                                                <td>
                                                  <img src="../assets/images/faces/face3.jpg" class="mr-2" alt="image" /> Cecelia Bradley </td>
                                                <td>
                                                  <div class="d-flex">
                                                    <span class="pr-2 d-flex align-items-center">55%</span>
                                                    <select id="star-2" name="rating" autocomplete="off">
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                  </div>
                                                </td>
                                                <td>4,36780</td>
                                                <td>765728</td>
                                              </tr>
                    -->
                    <!--
                                              <tr>
                                                <td>
                                                  <img src="../assets/images/faces/face4.jpg" class="mr-2" alt="image" /> Leah Sherman </td>
                                                <td>
                                                  <div class="d-flex">
                                                    <span class="pr-2 d-flex align-items-center">23%</span>
                                                    <select id="star-3" name="rating" autocomplete="off">
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                  </div>
                                                </td>
                                                <td>2300</td>
                                                <td>22437</td>
                                              </tr>
                    -->
                    <!--
                                              <tr>
                                                <td>
                                                  <img src="../assets/images/faces/face5.jpg" class="mr-2" alt="image" /> Ina Curry </td>
                                                <td>
                                                  <div class="d-flex">
                                                    <span class="pr-2 d-flex align-items-center">44%</span>
                                                    <select id="star-4" name="rating" autocomplete="off">
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                  </div>
                                                </td>
                                                <td>53462</td>
                                                <td>1,75938</td>
                                              </tr>
                    -->
                    <!--
                                              <tr>
                                                <td>
                                                  <img src="../assets/images/faces/face7.jpg" class="mr-2" alt="image" /> Lida Fitzgerald </td>
                                                <td>
                                                  <div class="d-flex">
                                                    <span class="pr-2 d-flex align-items-center">65%</span>
                                                    <select id="star-5" name="rating" autocomplete="off">
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                  </div>
                                                </td>
                                                <td>67453</td>
                                                <td>765377</td>
                                              </tr>
                    -->
                    <!--
                                              <tr>
                                                <td>
                                                  <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image" /> Stella Johnson </td>
                                                <td>
                                                  <div class="d-flex">
                                                    <span class="pr-2 d-flex align-items-center">49%</span>
                                                    <select id="star-6" name="rating" autocomplete="off">
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                  </div>
                                                </td>
                                                <td>43662</td>
                                                <td>96535</td>
                                              </tr>
                    -->
                    <!--
                                              <tr>
                                                <td>
                                                  <img src="../assets/images/faces/face9.jpg" class="mr-2" alt="image" /> Maria Ortiz </td>
                                                <td>
                                                  <div class="d-flex">
                                                    <span class="pr-2 d-flex align-items-center">65%</span>
                                                    <select id="star-7" name="rating" autocomplete="off">
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                  </div>
                                                </td>
                                                <td>76555</td>
                                                <td>258546</td>
                                              </tr>
                    -->
                    <!--
                                            </tbody>
                                          </table>
                                        </div>
                    -->
                    <!--                    <a class="text-black font-13 d-block pt-2 pb-2 pb-lg-0 font-weight-bold pl-4" href="#">Show more</a>-->
                    <!--
                                      </div>
                                    </div>
                                  </div>
                                </div>
                    -->
                    <!-- doughnut chart row starts -->
                    <div class="row">
                        <div class="col-sm-12 stretch-card grid-margin">
                            <!--
                                            <div class="card">
                                              <div class="row">
                            -->
                            <!--
                                                <div class="col-md-4">
                                                  <div class="card border-0">
                                                    <div class="card-body">
                                                      <div class="card-title">Channel Sessions</div>
                                                      <div class="d-flex flex-wrap">
                                                        <div class="doughnut-wrapper w-50">
                                                          <canvas id="doughnutChart1" width="100" height="100"></canvas>
                                                        </div>
                                                        <div id="doughnut-chart-legend" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left"></div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                            -->
                            <!--
                                                <div class="col-md-4">
                                                  <div class="card border-0">
                                                    <div class="card-body">
                                                      <div class="card-title">News Sessions</div>
                                                      <div class="d-flex flex-wrap">
                                                        <div class="doughnut-wrapper w-50">
                                                          <canvas id="doughnutChart2" width="100" height="100"></canvas>
                                                        </div>
                                                        <div id="doughnut-chart-legend2" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left"></div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                            -->
                            <!--
                                                <div class="col-md-4">
                                                  <div class="card border-0">
                                                    <div class="card-body">
                                                      <div class="card-title">Device Sessions</div>
                                                      <div class="d-flex flex-wrap">
                                                        <div class="doughnut-wrapper w-50">
                                                          <canvas id="doughnutChart3" width="100" height="100"></canvas>
                                                        </div>
                                                        <div id="doughnut-chart-legend3" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left"></div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                            -->
                            <!--
                                              </div>
                                            </div>
                            -->
                        </div>
                    </div>
                    <!-- last row starts here -->
                    <div class="row">
                        <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                            <!--
                                            <div class="card">
                                              <div class="card-body">
                            -->
                            <!--
                                                <div class="card-title mb-2">Upcoming events (3)</div>
                                                <h3 class="mb-3">23 september 2019</h3>
                            -->
                            <!--
                                                <div class="d-flex border-bottom border-top py-3">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="checkbox" class="form-check-input" checked /></label>
                                                  </div>
                                                  <div class="pl-2">
                                                    <span class="font-12 text-muted">Tue, Mar 5, 9.30am</span>
                                                    <p class="m-0 text-black"> Hey I attached some new PSD files… </p>
                                                  </div>
                                                </div>
                            -->
                            <!--
                                                <div class="d-flex border-bottom py-3">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="checkbox" class="form-check-input" /></label>
                                                  </div>
                                                  <div class="pl-2">
                                                    <span class="font-12 text-muted">Mon, Mar 11, 4.30 PM</span>
                                                    <p class="m-0 text-black"> Discuss performance with manager </p>
                                                  </div>
                                                </div>
                                                <div class="d-flex border-bottom py-3">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="checkbox" class="form-check-input" /></label>
                                                  </div>
                                                  <div class="pl-2">
                                                    <span class="font-12 text-muted">Tue, Mar 5, 9.30am</span>
                                                    <p class="m-0 text-black">Meeting with Alisa</p>
                                                  </div>
                                                </div>
                            -->
                            <!--
                                                <div class="d-flex pt-3">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="checkbox" class="form-check-input" /></label>
                                                  </div>
                                                  <div class="pl-2">
                                                    <span class="font-12 text-muted">Mon, Mar 11, 4.30 PM</span>
                                                    <p class="m-0 text-black"> Hey I attached some new PSD files… </p>
                                                  </div>
                                                </div>
                            -->
                            <!--
                                              </div>
                                            </div>
                            -->
                        </div>
                        <!--
                                      <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                                        <div class="card">
                                          <div class="card-body">
                        -->
                        <!--
                                            <div class="d-flex border-bottom mb-4 pb-2">
                                              <div class="hexagon">
                                                <div class="hex-mid hexagon-warning">
                                                  <i class="mdi mdi-clock-outline"></i>
                                                </div>
                                              </div>
                                              <div class="pl-4">
                                                <h4 class="font-weight-bold text-warning mb-0"> 12.45 </h4>
                                                <h6 class="text-muted">Schedule Meeting</h6>
                                              </div>
                                            </div>
                        -->
                        <!--
                                            <div class="d-flex border-bottom mb-4 pb-2">
                                              <div class="hexagon">
                                                <div class="hex-mid hexagon-danger">
                                                  <i class="mdi mdi-account-outline"></i>
                                                </div>
                                              </div>
                                              <div class="pl-4">
                                                <h4 class="font-weight-bold text-danger mb-0">34568</h4>
                                                <h6 class="text-muted">Profile visits</h6>
                                              </div>
                                            </div>
                                            <div class="d-flex border-bottom mb-4 pb-2">
                                              <div class="hexagon">
                                                <div class="hex-mid hexagon-success">
                                                  <i class="mdi mdi-laptop-chromebook"></i>
                                                </div>
                                              </div>
                                              <div class="pl-4">
                                                <h4 class="font-weight-bold text-success mb-0"> 33.50% </h4>
                                                <h6 class="text-muted">Bounce Rate</h6>
                                              </div>
                                            </div>
                        -->
                        <!--
                                            <div class="d-flex border-bottom mb-4 pb-2">
                                              <div class="hexagon">
                                                <div class="hex-mid hexagon-info">
                                                  <i class="mdi mdi-clock-outline"></i>
                                                </div>
                                              </div>
                                              <div class="pl-4">
                                                <h4 class="font-weight-bold text-info mb-0">12.45</h4>
                                                <h6 class="text-muted">Schedule Meeting</h6>
                                              </div>
                                            </div>
                                            <div class="d-flex">
                                              <div class="hexagon">
                                                <div class="hex-mid hexagon-primary">
                                                  <i class="mdi mdi-timer-sand"></i>
                                                </div>
                                              </div>
                                              <div class="pl-4">
                                                <h4 class="font-weight-bold text-primary mb-0"> 12.45 </h4>
                                                <h6 class="text-muted mb-0">Browser Usage</h6>
                                              </div>
                                            </div>
                        -->
                        <!--
                                          </div>
                                        </div>
                                      </div>
                        -->
                        <!--
                                      <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                                        <div class="card color-card-wrapper">
                                          <div class="card-body">
                        -->
                        <!--
                                            <img class="img-fluid card-top-img w-100" src="../assets/images/dashboard/img_5.jpg" alt="" />
                                            <div class="d-flex flex-wrap justify-content-around color-card-outer">
                                              <div class="col-6 p-0 mb-4">
                                                <div class="color-card primary m-auto">
                                                  <i class="mdi mdi-clock-outline"></i>
                                                  <p class="font-weight-semibold mb-0">Delivered</p>
                                                  <span class="small">15 Packages</span>
                                                </div>
                                              </div>
                        -->
                        <!--
                                              <div class="col-6 p-0 mb-4">
                                                <div class="color-card bg-success m-auto">
                                                  <i class="mdi mdi-tshirt-crew"></i>
                                                  <p class="font-weight-semibold mb-0">Ordered</p>
                                                  <span class="small">72 Items</span>
                                                </div>
                                              </div>
                                              <div class="col-6 p-0">
                                                <div class="color-card bg-info m-auto">
                                                  <i class="mdi mdi-trophy-outline"></i>
                                                  <p class="font-weight-semibold mb-0">Arrived</p>
                                                  <span class="small">34 Upgraded</span>
                                                </div>
                                              </div>
                                              <div class="col-6 p-0">
                                                <div class="color-card bg-danger m-auto">
                                                  <i class="mdi mdi-presentation"></i>
                                                  <p class="font-weight-semibold mb-0">Reported</p>
                                                  <span class="small">72 Support</span>
                                                </div>
                                              </div>
                        -->
                        <!--
                                            </div>
                                          </div>
                                        </div>
                        -->
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <!--
                      <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                        </div>
                      </footer>
            -->
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
<script src="../assets/vendors/chart.js/Chart.min.js"></script>
<script src="../assets/vendors/flot/jquery.flot.js"></script>
<script src="../assets/vendors/flot/jquery.flot.resize.js"></script>
<script src="../assets/vendors/flot/jquery.flot.categories.js"></script>
<script src="../assets/vendors/flot/jquery.flot.fillbetween.js"></script>
<script src="../assets/vendors/flot/jquery.flot.stack.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/misc.js"></script>
<script src="../assets/js/settings.js"></script>
<script src="../assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>