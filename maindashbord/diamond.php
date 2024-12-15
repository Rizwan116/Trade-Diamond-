<!DOCTYPE html>
<html lang="en">
<?php include('../firebase_connect.php');
if(!isset($_SESSION['username'])){
//	   header('Location:../diamand/index.php');
}else
    $userId = $_SESSION['username'];
$userId = "1594993616947";
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashbord Add Diamond</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../diamand/images/dimamondfav.png" />
</head>
<script>
    var ref = firebase.database().ref();
    var userId = <?php echo $userId;?>;
    ref.child("member").child(userId).on("value", function(snapshot) {
        //intros name

        $('#_profileName').html(snapshot.val().name);
        $('#_profileName2').html(snapshot.val().name);
        $('#_profileName3').html(snapshot.val().name);
</script>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile border-bottom">
                <a href="#" class="nav-link flex-column">
                    <div class="nav-profile-image">
                        <img src="../assets/images/faces/face1.jpg" alt="profile" />
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                        <span class="font-weight-semibold mb-1 mt-2 text-center">Username</span>
                        <span class="text-secondary icon-sm text-center">Active</span>
                    </div>
                </a>
            </li>
            <li class="nav-item pt-3">
                <a class="nav-link d-block" href="../secondandlogin/index.php">
                    <img class="sidebar-brand-logo" src="../diamand/images/icon2.png" alt="" style="height: 45px;" />
                    <img class="sidebar-brand-logomini" src="../diamand/images/dimamondfav.png" alt="" style="height: 30px" />
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
                        <a class="nav-link" href="dashbord.php">
                          <i class="mdi mdi-home menu-icon"></i>
                          <span class="menu-title">Home</span>
                        </a>
                      </li>
            -->

            <li class="nav-item ">
                <a class="nav-link" href="stock.php">
                    <i class="mdi mdi-dropbox menu-icon"></i>
                    <span class="menu-title">Stock</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="diamond.php">
                    <i class="mdi mdi-pencil-circle menu-icon"></i>
                    <span class="menu-title">Add Diamonds</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/forms/profile.php">
                    <i class="mdi mdi-account-settings menu-icon"></i>
                    <span class="menu-title">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/forms/company.php">
                    <i class="mdi  mdi-account-card-details menu-icon"></i>
                    <span class="menu-title">Company</span>
                </a>
            </li>


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
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
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
                                              <a class="dropdown-item" href="../maindashbord/pages/forms/profile.php">
                                                <i class="mdi mdi-account text-danger mr-3"></i> Profile </a>
                            -->
                            <div class="dropdown-divider"></div>
                            <!--
                                                   <a class="dropdown-item" href="../maindashbord/pages/forms/company.php">
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
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-text">English </div>
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
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper pb-0">



                <div class="d-lg-flex align-items-center">
                    <div style="padding: 35px">
                        <h3 class="text-info font-weight-bold mt-2 text-danger">Add Diamonds!</h3>
                        <!--                                    <h2 class="text-dark font-weight-bold">Search, buy and trade natural diamonds</h2>-->
                        <h5 class="font-weight-normal mb-2">You can add new diamonds form here and uploade in stock manually.
                        </h5>


                        <!--
                                                           <div class="pt-5">
                                                             <button type="button" class="btn btn-lg btn-danger">Search Diamonds</button>
                                                            </div>
                        -->






                    </div>



                </div>





                <!-- first row starts here -->
                <div class="page-header flex-wrap">
                    <div class="header-left">
                        <!--
                                        <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Create new document </button>
                                        <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents </button>
                        -->
                    </div>
                    <div class="header-left d-flex flex-wrap mt-2 mt-sm-0">
                        <button class="btn btn-danger btn-lg mb-2 mb-md-0 mr-2" data-toggle="modal" data-target="#exampleModal">
                            Add Diamonds
                        </button>


                        <!--                <button class="btn btn-danger btn-lg mb-2 mb-md-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Actions </button>-->

                    </div>
                </div>

                <!-- chart row starts here -->






                <!--              here we go-->
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="" style="text-align:center; margin:auto;">
                                    <!--                     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->

                                    <img src="../diamand/images/face101.png" style="height:150px;border-radius: 75px;">
                                    <div style="margin:-35px 0px 0px 111px" class="">
                                        <button type="button" class="btn btn-danger btn-rounded btn-icon">
                                            <i class=" mdi mdi-pencil"></i>
                                            <input type="file" id="_uploadFile"/>
                                        </button>
                                    </div>
                                </div>

                                <!--
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                -->
                            </div>
                            <div class="modal-body">

                                <span id="diamond_type"></span>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" onClick="saaveDiamondObj()" class="btn btn-danger">Add Diamond</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- image card row starts here -->
                <div class="row">



                </div>
                <!-- table row starts here -->
                <div class="row">

                    <div class="col-xl-4 grid-margin">

                        <!-- doughnut chart row starts -->
                        <div class="row">
                            <div class="col-sm-12 stretch-card grid-margin">

                            </div>
                        </div>
                        <!-- last row starts here -->
                        <div class="row">
                            <div class="col-sm-6 col-xl-4 stretch-card grid-margin">

                                <!-- partial -->
                            </div>
                            <!-- main-panel ends -->
                        </div>
                        <!-- page-body-wrapper ends -->
                    </div>
                    <!-- container-scroller -->
                    <!-- plugins:js -->

                    <script>
                        var userId = <?php echo $userId ?>;
                        var collectObj = {};

                        ref.child("diamonds").on("value", function(snapshot) {

                            snapshot.forEach((child) => {
                                var firstObj = child.val();
                                var div = "<div style='border:1px solid #bdbddd; height:auto; width:100%;padding:10px;'>"+child.key+"<br/><br/>";
                                for (var key in firstObj) {
                                    if(key != "recently uploaded")
                                        div = populateArray(key,child.key,div,firstObj);

                                }
                                div =  div+"</div><br/>";
                                $("#diamond_type").append(div);


                            });

                        }, function (error) {
                            alert("Error: " + error.code);
                        });
                        function isObject (value) {
                            return value && typeof value === 'object' && value.constructor === Object;
                        }



                        function saaveDiamondObj(){
                            if(selectFiles == null){
                                alert("Select Image of Diamond");
                            }else if(Object.keys(collectObj).length == 0){
                                alert("please select the details of Diamond");
                            }else{
                                uploadFiles();
                            }
                        }
                        var selectFiles;
                        $(document).ready(function(){
                            $("#_uploadFile").on("change", function(event){
                                selectFiles = event.target.files[0];
                            });
                        });
                        var db = firebase.firestore();

                        function uploadFiles(){
                            var d = new Date();
                            var uniqueId = d.getTime();
                            var storageRef = firebase.storage().ref('/diamond/');
                            var uploadTask = storageRef.child(uniqueId+'.jpg').put(selectFiles);

// Register three observers:
// 1. 'state_changed' observer, called any time the state changes
// 2. Error observer, called on failure
// 3. Completion observer, called on successful completion
                            uploadTask.on('state_changed', function(snapshot){
                                // Observe state change events such as progress, pause, and resume
                                // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
                                var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                                console.log('Upload is ' + progress + '% done');
                                switch (snapshot.state) {
                                    case firebase.storage.TaskState.PAUSED: // or 'paused'
                                        console.log('Upload is paused');
                                        break;
                                    case firebase.storage.TaskState.RUNNING: // or 'running'
                                        console.log('Upload is running');
                                        break;
                                }
                            }, function(error) {
                                // Handle unsuccessful uploads
                            }, function() {
                                // Handle successful uploads on complete
                                // For instance, get the download URL: https://firebasestorage.googleapis.com/...
                                uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                                     collectObj["image_url"] = downloadURL;
                                    collectObj["owner"] = userId;

                                    var d = new Date();
                                    var updateObj = {};
                                    updateObj[uniqueId] = uniqueId;
                                    firebase.database().ref('member/'+userId+"/diamond").update(updateObj);
                                    db.collection("diamond").doc(uniqueId+"").set(collectObj)
                                        .then(function() {
                                            alert("upload diamond successful");
                                        })
                                        .catch(function(error) {
                                            console.error("Error writing doc", error);
                                        });
                                });
                            });
                        }

                    </script>
                    <?php
                    $_GET['u']="1";
                    include('include_search_add.php'); ?>
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