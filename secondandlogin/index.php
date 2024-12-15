<!DOCTYPE html>
<?php include('../secondandlogin/common_header.php'); ?>

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
        margin-left: 18px;

    }

    .bts {
        color: aqua;
    }

    .app-area {
        position: relative;
        height: 580px;
    }

</style>
<script>
    var ref = firebase.firestore();
    var m = 0;
    var docData = [];
    ref.collection("diamond").get().then(function (querySnapshot) {
        $("#total_diamond_count").html(querySnapshot.size);
        querySnapshot.forEach(function (doc) {
            docData.push(doc);
            var d_data = doc.data();
            var c = 0;
            var spanData = "";
             for (var key in d_data) {
                 var sctual_key = key + "";
                 if (sctual_key != 'owner' && sctual_key != 'image_url') {
                     if (c == 3) {
                         break;
                     }
                     spanData = spanData + " " + d_data[key];
                     c++;
                 }
            }
            var refData = ' <div class="col-sm-3 stretch-card grid-margin">\n' +
                '                        <div class="card">\n' +
                '                            <div class="card-body p-0">\n' +
                '                                <img class="img-fluid w-100"  onClick=popupDisplay("' + m + '") src="' + doc.data().image_url + '" alt="" style="height:250px;">\n' +
                '                            </div>\n' +
                '                            <div class="card-body px-3 text-dark">\n' +
                '                                <div class="d-flex justify-content-between">\n' +
                '                                    <p class="text-muted font-13 mb-0">Owner :- '+doc.data().owner+'</p>\n' +
                '                                    <i class="mdi mdi mdi-cart" style="font-size: 24px;"></i>\n' +
                '                                </div>\n' +
                '                                <h5 class="font-weight-semibold">'+spanData+'</h5>\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                    </div>'
                //+
               // '<div class="cardView" ><inpu type="hidden" value=""><img src="' + doc.data().image_url + '" onClick=popupDisplay("' + m + '") width="200px" height="200px"/><br/>&nbsp;&nbsp;' + doc.id + "" + '<i class="mdi mdi mdi-cart" onclick=saveToCart("' + doc.id + '") style="font-size: 24px;float:right;margin-right:5px;"></i><br/><span>&nbsp;&nbsp;&nbsp;&nbsp;' + doc.data().type + '</span></div>'
            ;
            $("#result_diamond").append(refData);
            m++;
        });
    });
</script>
<?php include_once("../CommonFile.php") ?>
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


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel" style="
    background-image: linear-gradient(hsla(0, 0%, 92%, 0.61),hsla(0,0%,100%,.6)),url(../diamand/images/landing-background.png);
    background-position: top;
    background-color: hsla(0,0%,100%,.9);
    ">


            <div class="content-wrapper">
                <div class="container">

                    <a href="../diamand/index.php"> <img src="../diamand/images/arrow-left-circle.png"
                                                         alt="get back to trade-diamond home"></a>

                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">

                                <div style="padding: 35px">
                                    <h3 id="_intro" class="text-info font-weight-bold mt-2 text-danger">Hi, welcome
                                        back!</h3>
                                    <h2 class="text-dark font-weight-bold">Search, buy and trade natural diamonds</h2>
                                    <h5 class="font-weight-normal mb-2">Get Diamonds is the industrys polished diamonds
                                        search platform</h5>


                                    <div class="pt-5">
                                        <button type="button" class="btn btn-lg btn-danger">Search Diamonds</button>
                                    </div>
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
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-md-end">
                                <div class="pr-1 mb-3 mb-xl-0">
                                    <!--
                                                                            <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                                                                WishLists
                                                                                <i class="mdi mdi-wunderlist btn-icon-append"><span class="count bg-success" style="height: 17px;border-radius: .25rem;color: #ffffff;/* top: 0px; */font-size: 12px;line-height: 8px;padding: 5px;float:right;font-style: initial;">5</span></i>
                                                                            </button>
                                    -->
                                </div>
                                <!--
                                                                <div class="pr-1 mb-3 mb-xl-0">
                                                                        <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                                                            Add Diamonds
                                                                            <i class="mdi mdi-coin btn-icon-append"></i>
                                                                    </button>
                                                                </div>
                                -->
                                <!--
                                                                <div class="pr-1 mb-3 mb-xl-0">
                                                                        <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                                                            Download
                                                                            <i class="mdi mdi-printer btn-icon-append"></i>
                                                                        </button>
                                                                </div>
                                -->


                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-8 grid-margin stretch-card">
                        <!--                            the class was card-->
                        <div class="#">
                            <div class="card-body">
                                <div class="row">
                                    <!--
                                                                            <div class="col-lg-4">
                                                                                <h4 class="card-title">Sales Difference</h4>
                                                                                <canvas id="salesDifference"></canvas>
                                                                                <p class="mt-3 mb-4 mb-lg-0">Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing elit.
                                                                                </p>
                                                                            </div>
                                    -->
                                    <!--
                                                                            <div class="col-lg-5">
                                                                                <h4 class="card-title">Best Sellers</h4>
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <ul class="graphl-legend-rectangle">
                                                                                            <li><span class="bg-danger"></span>Automotive</li>
                                                                                            <li><span class="bg-warning"></span>Books</li>
                                                                                            <li><span class="bg-info"></span>Software</li>
                                                                                            <li><span class="bg-success"></span>Video games</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-sm-8 grid-margin">
                                                                                        <canvas id="bestSellers"></canvas>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="mt-3 mb-4 mb-lg-0">Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing elit.
                                                                                </p>
                                                                            </div>
                                    -->
                                    <!--
                                                                            <div class="col-lg-3">
                                                                                <h4 class="card-title">Social Media Statistics</h4>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="progress progress-lg grouped mb-2">
                                                                                            <div class="progress-bar  bg-danger" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12">
                                                                                        <ul class="graphl-legend-rectangle">
                                                                                            <li><span class="bg-danger"></span>Instagram (15%)</li>
                                                                                            <li><span class="bg-warning"></span>Facebook (20%)</li>
                                                                                            <li><span class="bg-info"></span>Website (25%)</li>
                                                                                            <li><span class="bg-success"></span>Youtube (40%)</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="mb-0 mt-2">Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing elit.
                                                                                </p>
                                                                            </div>

                                    -->


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <!--
                                                    <div class="card congratulation-bg text-center">
                                                        <div class="card-body pb-0">
                                                            <img src="images/dashboard/face29.png" alt="">
                                                            <h2 class="mt-3 text-white mb-3 font-weight-bold">Congratulations
                                                                Username
                                                            </h2>
                                                            <p>You have done 57.6% more sales today.
                                                                Check your new badge in your profile.
                                                            </p>
                                                        </div>
                                                    </div>
                        -->
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 flex-column d-flex stretch-card">
                            <div class="row">
                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <!--
                                                                        <div class="card bg-primary">
                                                                            <div class="card-body text-white">
                                                                                <h3 class="font-weight-bold mb-3">18,39 (75GB)</h3>
                                                                                <div class="progress mb-3">
                                                                                    <div class="progress-bar  bg-warning" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                                <p class="pb-0 mb-0">Bandwidth usage</p>
                                                                            </div>
                                                                        </div>
                                    -->

                                    <div class="card sale-diffrence-border">
                                        <div class="card-body">
                                            <h2 class="text-dark mb-2 font-weight-bold"><img
                                                        src="../diamand/images/diamond-stone.png"> <span
                                                        id="total_diamond_count">0</span></h2>
                                            <h4 class="card-title mb-2">Available Diamonds</h4>
                                            <!--											<small class="text-muted">APRIL 2019</small>-->
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card sale-diffrence-border">
                                        <div class="card-body">
                                            <h2 class="text-dark mb-2 font-weight-bold"><img
                                                        src="../diamand/images/account-check-outline.png"><span
                                                        id="_seller_count">3,807</span></h2>
                                            <h4 class="card-title mb-2">Registered Suppliers</h4>
                                            <!--											<small class="text-muted">APRIL 2019</small>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card sale-visit-statistics-border">
                                        <div class="card-body">
                                            <h2 class="text-dark mb-2 font-weight-bold"><img
                                                        src="../diamand/images/playlist-check.png">$0</h2>
                                            <h4 class="card-title mb-2">Total Stock Value</h4>
                                            <!--											<small class="text-muted">APRIL 2019</small>-->
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--
                                                        <div class="container-fluid">
                                                            <h2 class="text-dark font-weight-bold animated delay-01 mt-5 mb-5 mx-auto" style="text-align: center;">Some of our thousands of sellers...s</h2>
                                                            <ul class="logos-list logos-trusted animated delay-03" style=" margin: auto;text-align: center;">

                                                        <li class="li-logo-01">
                                                            <div class="logo-image logo-01">
                                                                    <a href="#" target="_blank">
                                                                        <img src="../diamand/images/kf_logo_rgb_alpha_200px.png" alt="Kimberfire" title="Kimberfire">

                                                                    </a>
                                                            </div>
                                                        </li>
                                                        <li class="li-logo-02">
                                                            <div class="logo-image logo-02">
                                                                    <a href="#" target="_blank">
                                                                        <img src="../diamand/images/logo-06.png" alt="Stuller" title="Stuller">

                                                                    </a>
                                                            </div>
                                                        </li>
                                                        <li class="li-logo-03">
                                                            <div class="logo-image logo-03">
                                                                    <a href="#" target="_blank">
                                                                        <img src="../diamand/images/logo-01-o.png" alt="MID House of Diamonds" title="MID House of Diamonds">

                                                                    </a>
                                                            </div>
                                                        </li>
                                                        <li class="li-logo-04">
                                                            <div class="logo-image logo-04">
                                                                    <a href="#" target="_blank">
                                                                        <img src="../diamand/images/borsheims_logo.png" alt="Borsheims" title="Borsheims">

                                                                    </a>
                                                            </div>
                            -->
                            <!--
                                                        </li>
                                             <li class="li-logo-02">
                                                            <div class="logo-image logo-02">
                                                                    <a href="#" target="_blank">
                                                                        <img src="../diamand/images/logo-06.png" alt="Stuller" title="Stuller">

                                                                    </a>
                                                            </div>
                                                        </li>
                                                        <li class="li-logo-03">
                                                            <div class="logo-image logo-03">
                                                                    <a href="#" target="_blank">
                                                                        <img src="../diamand/images/logo-01-o.png" alt="MID House of Diamonds" title="MID House of Diamonds">

                                                                    </a>
                                                            </div>
                                                        </li>

                                        </ul>
                                    </div>

                            -->


                            <div class="row">
                                <!--                                 <h2 class="text-dark font-weight-bold animated delay-01 m-3 mb-5 mx-auto" style="text-align: center;">Users’ Activity - last 7 days</h2> -->
                                <div class="col-sm-12 grid-margin d-flex stretch-card">

                                    <!--
                                                                        <div class="card">

                                                                            <div class="card-body">
                                    -->

                                    <!--
                                                                                <div class="d-flex align-items-center justify-content-between">
                                                                                    <h4 class="card-title mb-2">Users Last Activities</h4>
                                                                                    <div class="dropdown">
                                                                                        <a href="#" class="text-success btn btn-link  px-1"><i class="mdi mdi-refresh"></i></a>
                                                                                        <a href="#" class="text-success btn btn-link px-1 dropdown-toggle dropdown-arrow-none" data-toggle="dropdown" id="settingsDropdownsales">
                                                                                            <i class="mdi mdi-dots-horizontal"></i></a>
                                                                                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="settingsDropdownsales">
                                                                                                <a class="dropdown-item">
                                                                                                    <i class="mdi mdi-grease-pencil text-primary"></i>
                                                                                                    Edit
                                                                                                </a>
                                                                                                <a class="dropdown-item">
                                                                                                    <i class="mdi mdi-delete text-primary"></i>
                                                                                                    Delete
                                                                                                </a>
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                    -->
                                    <!--											<div>-->
                                    <!--
                                                                                    <ul class="nav nav-tabs tab-no-active-fill" role="tablist">
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link active pl-2 pr-2" id="revenue-for-last-month-tab" data-toggle="tab" href="#revenue-for-last-month" role="tab" aria-controls="revenue-for-last-month" aria-selected="true">Revenue for last month</a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link pl-2 pr-2" id="server-loading-tab" data-toggle="tab" href="#server-loading" role="tab" aria-controls="server-loading" aria-selected="false">Server loading</a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link pl-2 pr-2" id="data-managed-tab" data-toggle="tab" href="#data-managed" role="tab" aria-controls="data-managed" aria-selected="false">Data managed</a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link pl-2 pr-2" id="sales-by-traffic-tab" data-toggle="tab" href="#sales-by-traffic" role="tab" aria-controls="sales-by-traffic" aria-selected="false">Sales by traffic</a>
                                                                                        </li>
                                                                                    </ul>
                                    -->
                                    <!--												<div class="tab-content tab-no-active-fill-tab-content">-->
                                    <!--
                                                                                        <div class="tab-pane fade show active" id="revenue-for-last-month" role="tabpanel" aria-labelledby="revenue-for-last-month-tab">
                                                                                            <div class="d-lg-flex justify-content-between">
                                                                                                <p class="mb-4">+5.2% vs last 7 days</p>
                                                                                                <div id="revenuechart-legend" class="revenuechart-legend">f</div>
                                                                                            </div>
                                                                                            <canvas id="revenue-for-last-month-chart"></canvas>
                                                                                        </div>
                                                                                        <div class="tab-pane fade" id="server-loading" role="tabpanel" aria-labelledby="server-loading-tab">
                                                                                            <div class="d-flex justify-content-between">
                                                                                                <p class="mb-4">+5.2% vs last 7 days</p>
                                                                                                <div id="serveLoading-legend" class="revenuechart-legend">f</div>
                                                                                            </div>
                                                                                            <canvas id="serveLoading"></canvas>
                                                                                        </div>
                                                                                        <div class="tab-pane fade" id="data-managed" role="tabpanel" aria-labelledby="data-managed-tab">
                                                                                            <div class="d-flex justify-content-between">
                                                                                                <p class="mb-4">+5.2% vs last 7 days</p>
                                                                                                <div id="dataManaged-legend" class="revenuechart-legend">f</div>
                                                                                            </div>
                                                                                            <canvas id="dataManaged"></canvas>
                                                                                        </div>
                                    -->
                                    <!--
                                                                                        <div class="tab-pane fade" id="sales-by-traffic" role="tabpanel" aria-labelledby="sales-by-traffic-tab">
                                                                                            <div class="d-flex justify-content-between">
                                                                                                <p class="mb-4">+5.2% vs last 7 days</p>
                                                                                                <div id="salesTrafic-legend" class="revenuechart-legend">f</div>
                                                                                            </div>
                                                                                            <canvas id="salesTrafic"></canvas>
                                                                                        </div>
                                    -->
                                    <!--
                                                                                    </div>
                                                                                </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>


            <div class="container">
                <h2 class="text-dark font-weight-bold animated delay-01 m-3 mb-5 mx-auto" style="text-align: center;">
                    What can you achieve with Get Diamonds?</h2>


                <p style="    background: #0ddbb91a;
    padding: 15px;
    border-radius: 10px;
                                   margin-bottom: 35px;">Digital diamond features<br>
                    See our top features and how they can assist you manage and upgrade your online diamond business.
                </p>

                <div class="row">
                    <div class="col-lg-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="../diamand/images/download1.png" class="mb-4">
                                </div>
                                <h4 style="font-size: 15px;
    font-weight: 600;
    position: absolute;
    left: 15px;
    color: #001737;
    text-transform: uppercase;
}

">Place a bid on specific diamond</h4>


                            </div>
                            <br>
                            <p style="font-size: 15px; padding: 10px;">sellers name a starting price and you bid against
                                other buyers. You can watch the item to see how the bidding is going.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="../diamand/images/download2.png" class="mb-4">
                                </div>
                                <h4 style="font-size: 15px;
    font-weight: 600;
    position: absolute;
    left: 15px;
    color: #001737;
    text-transform: uppercase;
}

">Search, buy and trade diamonds</h4>


                            </div>
                            <br>
                            <p style="font-size: 15px; padding: 10px;">We presents an advanced trading platform, with
                                all diamonds in one place. In the “search” page, you can search & find diamonds
                                according to your personal demands.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="../diamand/images/download3.png" class="mb-4">
                                </div>
                                <h4 style="font-size: 15px;
    font-weight: 600;
    position: absolute;
    left: 15px;
    color: #001737;
    text-transform: uppercase;
}

">Direct contact to seller</h4>


                            </div>
                            <br>
                            <p style="font-size: 15px; padding: 10px;">Find and contact diamond companies. These
                                companies specialize in polishing all diamond shapes, round and Fancy.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="../diamand/images/download4.png" class="mb-4">
                                </div>
                                <h4 style="font-size: 15px;
    font-weight: 600;
    position: absolute;
    left: 15px;
    color: #001737;
    text-transform: uppercase;
}

">Post a Diamond Need</h4>


                            </div>
                            <br>
                            <p style="font-size: 15px; padding: 10px;">Looking for a specific diamond? In the “Diamond
                                Call” page you can specify your diamond demands. Whether you’d like a white or color
                                diamond, specify the shape, carat weight and clarity.</p>

                        </div>
                    </div>


                </div>


            </div>


            <div class="container">
                <h2 class="text-dark font-weight-bold animated delay-01 m-3 mb-5 mx-auto"><i
                            class="mdi mdi-clock-outline" style="
    font-size: 23px;
    margin-left: 0px;"></i>Popular diamond</h2>


                <div class="row" id="result_diamond"></div>

            </div>


            <!--
                                <div class="container">

                                        <div class="row">

                                    <div class="col-sm-7 grid-margin grid-margin-md-0 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-lg-flex align-items-center justify-content-between mb-4">
                                                    <h4 class="card-title">Product Orders</h4>
                                                    <p class="text-dark">+5.2% vs last 7 days</p>
                                                </div>
                                                <div class="product-order-wrap padding-reduced">
                                                    <div id="productorder-gage" class="gauge productorder-gage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </div>
            -->


            <!--
                                     <div class="container mt-5">

                                        <div class="row">
                                    <div class="col-sm-7 grid-margin grid-margin-md-0 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="card-title">Support Tracker</h4>
                                                    <h4 class="text-success font-weight-bold">Tickets<span class="text-dark ml-3">163</span></h4>
                                                </div>
                                                <div id="support-tracker-legend" class="support-tracker-legend"></div>
                                                <canvas id="supportTracker"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                </div>
            -->


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->

<section class="app-area" style="margin-top: 70px;margin-bottom: 40px;">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-5">
                <img class="app-area-img" src="../diamand/images/81yZOQEC+NL._AC_SL1500_.png" alt="DiaMond App">

            </div>

            <div class="col-xs-12 col-md-5 app-area-body text-center ">
                <div class="row">
                    <div class="col-xs-12 col-sm-6  col-md-7 col-lg-push-4"
                         style="margin-top: 25px; margin-left: 160px;">
                        <h3>Get the App</h3>

                        <p style="text-align: center;">Never miss a deal. Stay on top of the market, wherever you are,
                            with all of your DiaMond settings synced between the app and your desktop.</p>
                        <!--                            <a class="btn app-area-link btn-primary" href="#">DOWNLOAD NOW</a>-->


                        <div class="col-xs-12 appstore-btns" style="margin-top: 20px">
                            <div class="row no-pad">
                                <div class="col-xs-6">
                                    <a class="apple-link" href="#">
                                        <img class="img-responsive" src="../diamand/images/googlepay.png"
                                             alt="Apple AppStore Link">
                                    </a>
                                </div>
                                <div class="col-xs-6 ">
                                    <a class="google-link" href="#">
                                        <img class="img-responsive" src="../diamand/images/appstore.png"
                                             alt="Google Play Link">
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </div>
    </div>
</section>


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