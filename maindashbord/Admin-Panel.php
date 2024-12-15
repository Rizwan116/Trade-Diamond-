 <?php include('../firebase_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin-Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../diamand/images/dimamondfav.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
           <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
                <img src="../assets/images/faces/face1.jpg" id="myPofilePic" alt="profile" />
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center">Admin</span>
<!--                <span class="text-secondary icon-sm text-center">$3499.00</span>-->
              </div>
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link d-block" href="#">
              <img class="sidebar-brand-logo" src="../diamand/images/icon2.png" alt="" style="height: 45px;" />
              <img class="sidebar-brand-logomini" src="../diamand/images/dimamondfav.png" alt="" style="height: 30px" />
              <div class="small font-weight-light pt-1">Get back to trade diamond</div>
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
          <li class="pt-2 pb-1">
            <span class="nav-item-head">Main Admin Panel</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin-Panel.html">
              <i class="mdi mdi-compass-outline menu-icon"></i>
              <span class="menu-title">Main Panel</span>
            </a>
          </li>
<!--
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
-->
<!--
          <li class="nav-item">
            <a class="nav-link" href="../../pages/icons/mdi.html">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/basic_elements.html">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Forms</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/charts/chartjs.html">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
-->
<!--
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link" href="http://bootstrapdash.com/demo/plus-free/documentation/documentation.html" target="_blank">
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
<!--        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>-->
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
        <!-- partial -->
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-chevron-double-left"></span>
            </button>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="../../index.html">
                  <img src="../diamand/images/dimamondfav.png" alt="logo" style="height: 30px;" />
                </a>
            </div>
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
<!--
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-logout d-none d-md-block mr-3">
                <a class="nav-link" href="#">Status</a>
              </li>
              <li class="nav-item nav-logout d-none d-md-block">
                <button class="btn btn-sm btn-danger">Trailing</button>
              </li>
              <li class="nav-item nav-profile dropdown d-none d-md-block">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <div class="nav-profile-text">English </div>
                </a>
                <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-bl mr-3"></i> French </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-cn mr-3"></i> Chinese </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-de mr-3"></i> German </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-ru mr-3"></i>Russian </a>
                </div>
              </li>
              <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="../../index.html">
                  <i class="mdi mdi-home-circle"></i>
                </a>
              </li>
            </ul>
-->
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Admin Panel</h3>
                
              <nav aria-label="breadcrumb">
                   <div class="mb-3">
                   <button class="btn btn-danger btn-lg mb-2 mb-md-0 " type="button" data-toggle="modal" data-target="#mybroad"> BroadCast to All </button>
                  </div>
                <ol class="breadcrumb">
                    
                  <li class="breadcrumb-item"><a href="#">All user info</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Users List </li>
                    
                </ol>
                 
              </nav>
            </div>
              
            <div class="row">
             
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users Status</h4>
                    <p class="card-description" id="result_found"> 
                    </p>
				
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>&nbsp;No</th>
<!--                            <th>&nbsp;User</th>-->
                            <th>&nbsp;User name</th>
                            <th>&nbsp;Status</th>
                            <th>&nbsp;Email</th>
                            <th>Registered Date</th>
                            <th>&nbsp;KYC</th>
                            <th>&nbsp;Select</th>
                          </tr>
						 
                        </thead>
						
                        <tbody id="list">
                          
                        </tbody>
                      </table>

                        <div id="loading" class="pt-5" style="text-align: center; ">
                <img src="../diamand/images/loader.gif" style="height:70px;">
                </div>
				


                        
                         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
<div class="row">
                             <div >
    
                    <h4 class="modal-title" id="myModalLabel" style="padding:10px">Modal title</h4>
    </div>

                        <div>
<!--     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
    </div>
    
                </div>                
                

            </div>
            
            
<!--            cross btn-->
            <div class="modal-body">
                <label for="exampleFormControlSelect1">Select Reason</label>
    <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                        <option>Your document(s) was blurry or illegible</option>
                        <option>The document(s) you sent did not show all four corners.</option>
                        <option>The file format was unacceptable.</option>
                        <option>The document is in a language not supported.</option>
                        <option>Other possible reasons </option>
                      </select>
                <label for="exampleTextarea1" class="mt-2">Textarea</label>
                        <textarea class="form-control"   rows="4" value="asf" placeholder="reason why?"></textarea></div>
		   <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button"  class="btn btn-danger">Send</button>
            </div>
            
            
<!--            cross btn end-->
            
            
            
            
            
        </div>
    </div>
</div>
                        
                        
                        
                  
                       
                        
                        
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
<div class="row">
                             <div >
    
                    <h4 class="modal-title" id="myModalLabel" style="padding:10px">Verify Account</h4>
    </div>

                        <div>
<!--     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
    </div>
    
                </div>                
                

            </div>
            
            
<!--            cross btn-->
            <div class="modal-body">
                <label for="exampleFormControlSelect1">Do you want to verify this account?</label>
   
               
            <div class="modal-footer">
               
                
                <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                
                 <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="veryAccount()">Confirm</button>
            </div>
            
            
<!--            cross btn end-->
            
            
            
            
            
        </div>
    </div>
</div>     
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>       
                        
                        
                        
                        
                        
                        
                        
                        
                  </div>
                </div>
              </div>
             
             
             
                
                
                
                
                
            </div>
          </div>
              
<!--              extra div-->
            </div>
<!--            extra idv-->
            
            
            
            
            
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
<!--
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="#" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
-->
          <!-- partial -->
        </div>
          
           <div class="modal fade bd-example-modal-md" id="mybroad" role="dialog">
               
    <div class="modal-dialog  modal-md">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 630px;">
        <div class="modal-header">
            <div class="dropdown" style="margin-right:10px;">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="mdi mdi-email-outline"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 42px, 0px);">
                              <h6 class="dropdown-header">Settings</h6>
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
            
             <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="mdi mdi-bell-outline"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 42px, 0px);">
                              <h6 class="dropdown-header">Settings</h6>
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
            
<!--                      <h4 class="modal-title">Modal Header</h4>-->

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          
        <div class="modal-body">
        <div class="container">
<!--
             <div class="row">
                 <div class="col-lg-10">
                        <p>Some text in the modal.</p>

            </div>
                 
          <div class="col-lg-2">
            
            </div>
            </div>
-->
           <div class="col-lg-12 grid-margin stretch-card">
                <div class="card" style="height: 272px;overflow: hidden;overflow-y: auto;">
                  <div class="card-body">
                    <div style="float: left;">
                                          <h4 class="card-title">Mass Selection</h4>

                      </div>
                      
                      
                      <div style="float: right;">
                        
                          <div class="form-check" >
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id='selectall'>  <i class="input-helper"></i></label>
                            </div>                      </div>
                      
                      
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th><i class="mdi mdi-account-box-outline"></i>Name</th>
                            <th>Email<i class="mdi mdi-email-outline"></i></th>
                            <th>Cheak<i class="mdi mdi-checkbox-marked-circle-outline"></i></th>
                          </tr>
                        </thead>
                        <tbody id="list2">
<!--
                          <tr>
                            <td>Jacob Jessu</td>
                            <td>r.siddiki167@gmail.com</td>
                            <td>  <div class="form-check" style="position: relative;display: block;margin-top: 0px;margin-bottom: 10px;padding-left: 0;">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">  <i class="input-helper"></i></label>
                            </div>   </td>
                          </tr>
-->
                           
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            
            
            
            <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                      </div>
            
            </div>
           
        </div>
        <div class="modal-footer">
		<span id="results"></span>
          <button type="button" id="close_button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" id="btn-primary" onclick="massEmail()" class="btn btn-primary">Send</button>
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
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
		<Div class ='toast' id="toast">Hello World!</div>
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <Script>
	  var regId = "",email = "";
	  var uniqueItems = [];
var allemails = [];
          $(document).ready(function(){
        firebase.database().ref("member").orderByChild('verified').equalTo(false).once('value', function(snap){

   snap.forEach(function(childNodes){
       $('#list').prepend('<tr id="demo'+childNodes.key+'"> <td>1</td><td>'+childNodes.val().name+'</td>  <td> <label class="badge badge-danger">Pending</label> </td>  <td>&nbsp;&nbsp;<Span id="email'+childNodes.key+'">'+childNodes.val().email+'</span></td> <td>May 15, 2015</td> <td><button type="button" class="btn btn-danger btn-rounded btn-icon" onclick=showKyc("'+childNodes.val().company_kyc+'")> <i class="mdi mdi-email-open"></i>  </button></td>  <td> <div class="form-check"> <label class="form-check-label">  <button id="myBtn2" type="button" onclick = "verifyAcc('+childNodes.key+')" class="btn btn-success btn-icon-text btn-sm" ><i class="mdi mdi-check-decagram btn-icon"  data-toggle="modal" data-target="#myModal2"></i></button> <button  id="myBtn" type="button" class="btn btn-warning btn-icon-text btn-sm"     data-toggle="modal" data-target="#myModal"><i class="mdi mdi-close-circle btn-icon"></i></button>  <i class="input-helper"></i> </label> </div> </td> </tr>');
  });         
  $('#loading').hide();
  $('#result_found').html(snap.numChildren() +" pending Verification");
});

 firebase.database().ref("member").once("value", function(snap) {
        snap.forEach(function(childNodes){
			allemails.push(childNodes.val().email);
       $('#list2').prepend('<tr id="demo'+childNodes.key+'"><td>'+childNodes.val().name
	   +'</td><td>&nbsp;&nbsp;<Span id="email'+childNodes.key+'">'
	   +childNodes.val().email+'</span></td><td><div class="form-check" style="position: relative;display: block;margin-top: 0px;margin-bottom: 10px;padding-left: 0;"><label class="form-check-label"><input type="checkbox" id="'
	   +childNodes.val().email+'" onclick=checkFunction("'+childNodes.val().email+'") class="checkBx">  <i class="input-helper"></i></label></div></td></tr>');
  });
}); 
});
function hideDivs(){
	$(".extraDiv").hide();
	$(".extraPopup").hide();
}
function showKyc(img){
	var x = '<div class="extraDiv" style="position:absolute;background:#000000; opacity:0.8;width:100%;height:100%;top: 0;left:0; " onclick=hideDivs()></div><div class="extraPopup" style="position:fixed;  top: 50%;  left: 50%; width:30em;  height:18em;  margin-top: -9em; margin-left: -15em;border: 1px solid #ccc;background-color: #f3f3f3;"><img src="'+img+'" width="100%" height="100%" /></div>';
	$('body').append(x);
}
function checkFunction(x){
	 allemails.push(x); 
}

  function verifyAcc(x){
		  regId = x;
		  email = $("#email"+x).html();
	  }   
	  
      function veryAccount() {
    $("#demo"+regId).hide();	
	sendEmail(email,"Account activation","Congrats your account has been activated");
}  
 
var mailedItem = 0;
function massEmail(){
	mailedItems = 0;
	var emailsText = document.getElementById("exampleTextarea1").value;
	if(emailsText == "")
		return;
	document.getElementById("results").innerHTML = "loading...";
	document.getElementById("btn-primary").disabled = true;
	 uniqueItems = Array.from(new Set(allemails))
	 for (var i = 0; i < uniqueItems.length; i++) {
		sendEmailinMass(uniqueItems[i],"ewtew",emailsText);
	 }
	 
}

function sendEmailinMass(email,topic,msg){
		
 $.post("email.php",
  {
    email: email,
    topic: topic,
    msg: msg
  },
  function(data, status){
	   document.getElementById("results").innerHTML = "email has been sent to "+email;
	  mailedItems++;
	  if(mailedItems == uniqueItems.length){
			       document.getElementById("results").innerHTML = "*All mail has been send";
			document.getElementById("btn-primary").disabled = false;
	  }
  });
}
function sendEmail(email,topic,msg){
 $.post("email.php",
  {
    email: email,
    topic: topic,
    msg: msg
  },
  function(data, status){
	  if(data == 1){
	     firebase.database().ref('member/' + regId).update({ 
            verified:true
          });
	  }
  });
}	
 
//          cross btn function
          $(document).ready(function () {
    $("#myBtn").click(function(){
         $('#myModal').modal('show');
    });
});
          
//          correct btn function
           $(document).ready(function () {
      
    $("#myBtn2").click(function(){
         $('#myModal2').modal('show');
    });
});
          
          
        
          //check box all check
          $('#selectall').change(function () {
            if ($(this).prop('checked')) {
                $('input').prop('checked', true);
            }
        else {
            $('input').prop('checked', false);
        }
          });
            $('#selectall').trigger('change');

 </Script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->

  </body>
</html>