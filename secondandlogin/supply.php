<!DOCTYPE html>
<?php include('common_header.php');
$u = "";
if(isset($_GET['u']))
    $u = $_GET['u'];
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trade Diamond Company Profile </title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../diamand/images/dimamondfav.png"/>
</head>

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
        font: 36px 'Hind Vadodara', sans-serif;
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
    }

    .logos-list .logo-image.logo-02 img {
        padding: 0px 58px 0px 0px;
    }

    .logos-list .logo-image.logo-03 img {
        padding: 0px 58px 0px 0px;
    }

    .logos-list .logo-image.logo-04 img {
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
        font-family: 'Hind Vadodara', sans-serif;
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
        border-color: #c0c0c0;
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
        box-shadow: 3px 5.196px 18px 0px rgba(0, 0, 0, 0.25);
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
    }

    .bts {
        color: aqua;
    }

    .app-area {
        position: relative;
        height: 580px;
    }

    /*        ends app area images and get app playstore*/


</style>
<script>
    var ref = firebase.database().ref();

    ref.child("member").child(<?php echo $u;?>).on("value", function(snapshot) {
        $('#cname').html(snapshot.val().companyName);
        $('#cId').html(snapshot.val().companyId);
        $('#cemail').html(snapshot.val().email);
        $('#cNumber').html(snapshot.val().phoneNumber);
    }, function (error) {
        alert("Error: " + error.code);
    });

</script>

<body>
<div class="container-scroller">


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel" style="
    background-image: linear-gradient(hsla(0, 0%, 92%, 0.61),hsla(0,0%,100%,.6)),url(../diamand/images/landing-background.png);
    background-position: top;
    background-color: hsla(0,0%,100%,.9);
    ">


            <div class="content-wrapper">
                <div class="container">


                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div style="padding: 35px">
                                    <h2 class="text-info font-weight-bold">Company Profile!</h2>

                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">


                                <form class="pt-5">


                                    <div class="card">
                                        <div class="card-body">

                                            <p class="card-description">Company info</p>

                                            <div class="row">

                                            </div>
                                            <div class="row">

                                            </div>


                                            <div class="row">
                                                <div class="col-md-5 mt-2"
                                                     style="background: #f1f1f1;padding: 30px;border-radius: 26px;margin-right:4px;">
                                                    <div class="form-group row">
                                                        &nbsp;<i class=" mdi mdi-account-box-outline text-danger"></i>&nbsp;
                                                        &nbsp; &nbsp;<span style="font-size:16px">Company Name</span>

                                                    </div>

                                                    <div>
                                                        <label class="col-sm-10 col-form-label"
                                                               style="background: #dddddd;border-radius: 47px;">&nbsp;<i
                                                                    class=" mdi mdi-account-check text-danger"></i>&nbsp;
                                                            &nbsp; &nbsp;<span id="cname"
                                                                    style="font-size:19px"></span></label>
                                                    </div>

                                                </div>


                                                <div class="col-md-6 mt-2"
                                                     style="background: #f1f1f1;padding: 30px;border-radius: 26px;">
                                                    <div class="form-group row">
                                                        &nbsp;<i
                                                                class=" mdi mdi-checkbox-marked-circle-outline text-danger"></i>&nbsp;
                                                        &nbsp; &nbsp;<span style="font-size:16px">Company Id*</span>

                                                    </div>

                                                    <div>
                                                        <label class="col-sm-6 col-form-label"
                                                               style="background: #dddddd;border-radius: 47px;">&nbsp;<i
                                                                    class=" mdi mdi-checkbox-multiple-marked-circle-outline text-danger"></i>&nbsp;
                                                            &nbsp; &nbsp;<span id="cId"
                                                                    style="font-size:21px"></span></label>
                                                    </div>

                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-5 mt-2"
                                                     style="background: #f1f1f1;padding: 30px;border-radius: 26px;margin-right:4px;">
                                                    <div class="form-group row">
                                                        &nbsp;<i class=" mdi mdi-cellphone-link text-danger"></i>&nbsp;
                                                        &nbsp; &nbsp;<span style="font-size:16px">Email Address</span>

                                                    </div>

                                                    <div>
                                                        <label class="col-sm-10 col-form-label"
                                                               style="background: #dddddd;border-radius: 47px;">&nbsp;<i
                                                                    class=" mdi mdi-email text-danger"></i>&nbsp; &nbsp;
                                                            &nbsp;<span id="cemail"
                                                                        style="font-size:19px"></span></label>
                                                    </div>

                                                </div>


                                                <div class="col-md-6 mt-2"
                                                     style="background: #f1f1f1;padding: 30px;border-radius: 26px;">
                                                    <div class="form-group row">
                                                        &nbsp;<i class=" mdi mdi-cellphone-iphone text-danger"></i>&nbsp;
                                                        &nbsp; &nbsp;<span style="font-size:16px">Phone Number</span>

                                                    </div>

                                                    <div>
                                                        <label class="col-sm-6 col-form-label"
                                                               style="background: #dddddd;border-radius: 47px;">&nbsp;<i
                                                                    class=" mdi mdi-phone text-danger"></i>&nbsp; &nbsp;
                                                            &nbsp;<span id="cNumber"
                                                                    style="font-size:21px"></span></label>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->

                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>

    </div>


    <?php include('../diamand/footer.php'); ?>


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