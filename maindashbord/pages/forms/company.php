<!DOCTYPE html>
<html lang="en">
     <?php include('../../../firebase_connect.php');
if(!isset($_SESSION['username'])){
	   header('Location:http://localhost/trade-diamond/trade-diamond/secondandlogin/index.php');
}else
	$userId = $_SESSION['username'];
 ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>User Company</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="../../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../diamand/images/dimamondfav.png" />
  </head>
     <script>
	var ref = firebase.database().ref();
        var userId = <?php echo $userId;?>;
ref.child("member").child(userId).on("value", function(snapshot) {
    //intros name
    
    $('#_intro').html("Hello " + snapshot.val().name + ".");
	$('#_profileName').html(snapshot.val().name);
	$('#_profileName2').html(snapshot.val().name);
    
    //inputs information
	$('#companyName').val(snapshot.val().companyName);
	$('#companyEmail').val(snapshot.val().companyEmail);
	$('#companyNumber').val(snapshot.val().companyNumber);
	$('#companyId').val(snapshot.val().companyId);
    $('#companyWhNumber').val(snapshot.val().companyWhNumber);
	$('#companyAddress').val(snapshot.val().companyAddress);
	$('#companyAbout').val(snapshot.val().companyAbout);
	$('#companyWeb').val(snapshot.val().companyWeb);
}, function (error) {
   alert("Error: " + error.code);
});
        function updateProfile () {
            saveDataToFireBase();
        }
     function saveDataToFireBase() {
           var companyName  = $('#companyName').val();
           var companyEmail  = $('#companyEmail').val();
           var companyNumber  = $('#companyNumber').val();
           var companyId  = $('#companyId').val();
           var companyWhNumber  = $('#companyWhNumber').val();
           var companyAddress  = $('#companyAddress').val();
           var companyAbout  = $('#companyAbout').val();
           var companyWeb  = $('#companyWeb').val();
          firebase.database().ref('member/' + userId).update({
            companyName : companyName,
            companyEmail : companyEmail,
            companyNumber : companyNumber,
              companyId : companyId,
              companyWhNumber : companyWhNumber,
              companyAddress :companyAddress,
              companyAbout :companyAbout,
              companyWeb :companyWeb
          });
		 }
    </script>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
                <img src="../../../assets/images/faces/face1.jpg" alt="profile" />
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
              <img class="sidebar-brand-logo" src="../../../diamand/images/icon2.png" alt="" style="height: 45px;" />
              <img class="sidebar-brand-logomini" src="../../../diamand/images/dimamondfav.png" alt="" style="height: 30px" />
              <div class="small font-weight-light pt-1"><img src="../../../diamand/images/arrow-left-circle.png">Get back to trade diamond</div>
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
             <li class="nav-item ">
            <a class="nav-link" href="../../stock.php">
              <i class="mdi mdi-dropbox menu-icon"></i>
              <span class="menu-title">Stock</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../diamond.php">
              <i class="mdi mdi-pencil-circle menu-icon"></i>
              <span class="menu-title">Add Diamond</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">
              <i class="mdi mdi-account-settings  menu-icon"></i>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="company.php">
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
        <!-- partial:../../partials/_settings-panel.html -->
<!--
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
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
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-chevron-double-left"></span>
            </button>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="#">
                  <img src="../../../diamand/images/dimamondfav.png" alt="logo" style="height: 30px;" />
                </a>
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
                    <span id="_profileName2" class="nav-profile-name" style="margin-right: 12px;">Username</span>
                    <span class="online-status"></span>
                    <img src="../../../secondandlogin/images/faces/face28.png" alt="profile">
                  </a>
                  <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                 <!--
                  <a class="dropdown-item" href="profile.php">
                    <i class="mdi mdi-account text-danger mr-3"></i> Profile </a>
                  <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="company.php">
                    <i class="mdi mdi-home-modern text-danger mr-3"></i> Company </a>
                  <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="kyc.php">
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
          <div class="content-wrapper">
              <div class="d-lg-flex align-items-center">
								<div style="">
									
                                    <h2 id="_intro" class="text-dark font-weight-bold">Hello User </h2>
									<h5 class="font-weight-normal mb-2">This is your personal area You can view and edit your personal info.
</h5>
                                    
                                    
<!--
                                   <div class="pt-5">
                                     <button type="button" class="btn btn-lg btn-danger">Search Diamonds</button>
                                    </div>
-->
                                    
                                      
                            
                                    
                                    
                                    
								</div>
                  
                         

							</div>
            <div class="page-header">
              <h3 class="page-title mt-5">Supplier Information Page</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> My Company Profile </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <div class="row"> 
                          <div class="col-lg-3">
                            <img  src="../../img/banner.jpg">

                          </div> 
                         <div style="height: 43px;/* background: rebeccapurple; */margin-top: 165px;margin-left: 21px;" class="col-lg-1"> 
                             <button type="button" class="btn btn-danger btn-rounded btn-icon">
                            <i class=" mdi mdi-pencil
"></i>
                          </button>
                          </div>
                          
                          <div class="col-lg-7">
                             <p class="card-title  mt-5" style="font-size: 14px;margin: 0px 0px 0px 10px;font-weight: 400;line-height: 2.0;">Your company's page in Get-Diamonds is visible to all buyers. They can contact you regarding diamonds, and other business inquiries. Edit this section in order to update your Get-Diamonds supplier's page.
                              <a href="#">You can view this page here. </a></p>

                          </div>
                         

                      </div>
                      

<!--                    <p class="card-description">Basic form layout</p>-->
                    <div class="forms-sample mt-5">
                        <div class="row">
                        <div class="col-lg-6">
                            
                            <div class="form-group">
                        <label for="#">Company Name</label>
                        <input type="text" class="form-control" id="companyName" placeholder="Company Name" />
                      </div>
                            </div>
                            <div class="col-lg-6">
                            
                            <div class="form-group">
                        <label for="#">Company ID</label>
                        <input type="text" class="form-control" id="companyId" placeholder="Company ID" />
                      </div>
                            </div>
                        </div>
                      
                        
<!--
                       <div class="row">
                        <div class="col-lg-6">
                            
                            <div class="form-group">
                        <label for="#">Contact person</label>
                        <input type="text" class="form-control" id="#" placeholder="Contact person" />
                      </div>
                            </div>
                            <div class="col-lg-6">
                            
                            <div class="form-group">
                        <label for="#">Telephone number</label>
                        <input type="text" class="form-control" id="#" placeholder="Telephone number" />
                      </div>
                            </div>
                        </div>
-->
                         <div class="row">
                        <div class="col-lg-6">
                            
                            <div class="form-group">
                        <label for="#">Company phone Number</label>
                        <input type="text" class="form-control" id="companyNumber" placeholder="Mobile phone" />
                      </div>
                            </div>
                            <div class="col-lg-6">
                            
                            <div class="form-group">
                         <label for="#">Whatsapp Number</label>
                        <input type="text" class="form-control" id="companyWhNumber" placeholder="Whatsapp Number" />
                      </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-6">
                            
                            <div class="form-group">
                        <label for="#">Email address</label>
                        <input type="text" class="form-control" id="companyEmail" placeholder="Company Email address" />
                      </div>
                            </div>
                            <div class="col-lg-6">
                            
                            <div class="form-group">
                        <label for="#">Company Address</label>
                        <input type="text" class="form-control" id="companyAddress" placeholder="Company Address" />
                      </div>
                            </div>
                        </div>
                      <div class="form-group">
                        <label for="#">Company's about section</label>
                        <textarea class="form-control" id="companyAbout" rows="4" placeholder="Write some basic information and bio about your company here... "></textarea>
                      </div>
                         <div class="row">
<!--
                        <div class="col-lg-6">
                            
                            <div class="form-group">
                        <label for="#">Whatsapp Numbers</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Whatsapp Number" />
                      </div>
                            </div>
-->
                            <div class="col-lg-6">
                            
                            <div class="form-group">
                        <label for="#">Website link</label>
                        <input type="text" class="form-control" id="companyWeb" placeholder="Website link" />
                      </div>
                            </div>
                        </div>
                                           
                        
<!--                        <button type="submit" class="btn btn-danger  mr-2"> Add New Branch </button>-->

                     
                      <button type="submit" class="btn btn-primary  mr-2" data-toggle="modal" data-target="#exampleModal"> Save Changes </button>
                    </div>
                  </div>
                </div>
              </div>
        
            
             
             
             <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <p>Do you want to save changes to this document before closing?</p>
                <p class="text-secondary"><small>If you don't save, your changes will be lost.</small></p>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="updateProfile()">Save changes</button>
      </div>
    </div>
  </div>
</div>
              
             
             
             
             
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
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
        <script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../assets/js/off-canvas.js"></script>
    <script src="../../../assets/js/hoverable-collapse.js"></script>
    <script src="../../../assets/js/misc.js"></script>
    <script src="../../../assets/js/settings.js"></script>
    <script src="../../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../../assets/js/file-upload.js"></script>
    <script src="../../../assets/js/typeahead.js"></script>
    <script src="../../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>