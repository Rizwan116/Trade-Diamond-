<!doctype html>
<html class="no-js " lang="en">
<?php include('../firebase_connect.php');
if(isset($_SESSION['username'])){
	   header('Location:http://localhost/trade-diamond/trade-diamond/secondandlogin/index.php');
}
 ?>
    <head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Trade Diamonds</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/dimamondfav.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/dimamondfav.png">

	<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300&display=swap" rel="stylesheet">
	  <script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"></script>

    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">

    
    
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>
    <style>
        
        
        
        
/*     start   slider btn get free trial and member*/
        
        .btn-tcs {
          border-radius: 3px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    border-color: rgb(227 66 52);
    background-color: rgb(227 66 52);
    box-shadow: none;    font: 600 16px/21px 'Open Sans',sans-serif;
    padding: 13px 20px;

        }
        .btn-tcs:hover {
    background-color: #e71603;
    box-shadow: 0px 9px 32px 0px rgba(0,0,0,0.75);        }
    
        .btn-tcs-1 {
           min-width: 192px;
    border-radius: 3px;
    font: 600 16px/21px 'Open Sans',sans-serif;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    border: solid 2px;
    padding: 13px 20px;
          padding-bottom: 19px;
    padding-top: 14px;  
                height: 50px;
    background-color: #c2c2c2 !important;
    border-color: #c2c2c2 !important;

        }
        
        .btn-tcs-1:hover {
            box-shadow: 0px 9px 32px 0px rgba(0,0,0,0.75);
        }
        
        
        /*     ends   slider btn get free trial and member*/

        
        
/*        start why diamond section images and text css*/
        
    .why-section-new {
    background-image: url(/images/bg_gray@2x.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
        .why-diamond-top-image {
    max-height: 147px;
    position: absolute;
    right: 0px;
    top: -74px;
}
        .why-section-new h2 {
    text-align: center;
    font: 36px/44px 'Vadodara Light',sans-serif;
    letter-spacing: -0.36px;
    color: #35393D;
    opacity: 1;
    margin-top: 64px;
}
        .why-diamond-card img {
    margin-left: auto;
    margin-right: auto;
    max-height: 84px;
    margin-bottom: 30px;
             display: block;
    max-width: 100%;
    height: auto;
}
        .why-diamond-card-row {
    margin-top: 81px;
}
      
    .why-diamond-card-body-subtitle {
    margin-bottom: 113px;
            margin-right: 21px;

}
        .why-rapnet-card-body h3 {
    font-size: 28px;
}
   
        .why-diamond-card-body-subtitle li {
    font-size: 17px;
                list-style: none;
                color: #626553;


}
               .Home.Page .why-diamond-card-body-subtitle ul {
    list-style-position: inside;
}


        .why-diamond-bottom-image {
    max-height: 160px;
    position: absolute;
    bottom: -40px;
    left: 0;
    z-index: 1;
}
        
     /*        ends why diamond section images and text css*/
   
        
        
        
/*       start navbar two buttons at top choose and login css color and hover*/
        
        
        .btn-choose-plan1 {
            margin: 0px 0 0 13px;font-size: 14px;line-height: 21px;font-weight: 400;padding: 6px 15px;letter-spacing: 0;position: relative;
            background-color: #e34234;
            border-color: #e34234;
            z-index: 95;
            height: 38px;
            width: 100px;
            border-radius: 6px;
        }
       
        .btn-choose-plan2 {
            margin: 0px 0 0 13px;font-size: 14px;line-height: 21px;font-weight: 400;padding: 6px 15px;letter-spacing: 0;position: relative;
            background-color: #c2c2c2;
    border-color: #c2c2c2;
            z-index: 95;height: 38px;border-radius: 6px;
        }
        
        btn-choose-plan1:hover {
                background-color: #e33424;
            box-shadow: 1px 1px 27px 0px rgba(0,0,0,0.75);

        }
        btn-choose-plan2:hover {
                        background-color: #c2c2c2;

            box-shadow: 1px 1px 27px 0px rgba(0,0,0,0.75);

        }
        
           
        .btns-menu-side {
    display: inline-block;
    padding-left: 0px;
    padding-top: 6px;
}
        
        
        
        /*   ends    start navbar two buttons at top choose and login css color and hover*/

        
        
        
        
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

        
        
        
/*        start how diamond sextion solution css with images and section*/
        
        
        .solution-area-new {
    background-image: url(images/cover.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Hind Vadodara',sans-serif;
    font-weight: 300;
    position: relative;
}
        
/*
        .solution-area-new-title h2 {
            color: white;
    font-size: 36px;
    padding-top: 66px;
    margin-bottom: 64px;
    line-height: 42px;
}
        .solution-area-new-card {
    margin-bottom: 70px;
}
        .solution-area-new-img-container {
    height: 175px;
}
        
        .solution-area-new-img.order0 {
    width: 260px;
}
.centered-absolute {
    margin-top: auto;
    margin-bottom: auto;
    top: 0;
    bottom: 0;
    position: absolute;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
}

.solution-area-new-img {
    margin-left: auto;
    margin-right: auto;
}
        
        
        
        .solution-area-new-card-body {
    font-size: 17px;
}
        
        .solution-area-new-card-body-title {
    height: 75px;
    display: flex;
    align-items: center;
    justify-content: center;
}
        .solution-area-new-card-body h3 {
    font-size: 30px;
    line-height: 33px;
            color: #fff;
}
        .solution-area-new-card-body-subtitle {
    margin-bottom: 40px;
    height: 100px;
}
        .solution-area-new-card-body-subtitle p {
    font-size: 17px;
    line-height: 22px;
                color: white;

}
        .solution-area-new-button {
    color: #fff;
    max-height: 40px;
    border: 2px solid #fff;
    padding-left: 45px;
    padding-right: 45px;
    border-radius: 4px;
    padding-top: 8px;
    padding-bottom: 11px;
    line-height: 20px;
    margin-top: 40px;
    text-transform: uppercase;
    font-weight: 200;
}
        .solution-area-new-card {
    margin-bottom: 70px;
}
        .solution-area-new-card-body {
    font-size: 17px;
}
        .solution-area-new-img-container {
    height: 175px;
}
.p-relative {
    position: relative;
}
        .solution-area-new-img.order1 {
    width: 148px;
}
.centered-absolute {
    margin-top: auto;
    margin-bottom: auto;
    top: 0;
    bottom: 0;
    position: absolute;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
}
        .solution-area-new-card-body {
    font-size: 17px;
}
        
        .solution-area-new-img.order2 {
    width: 197px;
}
  .solution-area-new .diamonds7 {
    position: absolute;
    left: 0;
    bottom: -70px;
          z-index: 1;

}

        
       .solution-area-new-button:hover {
    background-color: #fff;
    color: #D21046 !important;
} 
        
*/
        
        
        
        
         .first-title {
    font-family: 'Hind Vadodara',sans-serif !important;
    font-size: 16px;
    line-height: 1.2;
    color: #fff;
    margin-top: 50px;
    margin-bottom: 15px;
}
        .second-title {
    font-family: 'Hind Vadodara',sans-serif !important;
    font-size: 53px;
    font-weight: 300;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.15;
    letter-spacing: normal;
    text-align: left;
    color: #fff;
            text-align: center;
}
        .landing-page-container .mil-img .second-title span {
    font-family: 'Hind Vadodara',sans-serif !important;
    margin-right: 5px;
}
      .third-title {
    font-family: 'Hind Vadodara',sans-serif !important;
    font-size: 16px;
    line-height: 1.2;
    color: #fff;
    margin-top: 60px;
}   
  .stock-value {
    font-family: 'Hind Vadodara',sans-serif !important;
    font-size: 50px;
    font-weight: 900;
    line-height: 1.21;
    letter-spacing: 4.71px;
    color: #fff;
    margin-top: 15px;
}   
        .stock-value-text {
    font-family: 'Hind Vadodara',sans-serif !important;
    font-size: 30px;
    line-height: 1.2;
    color: #fff;
}
     
        .second-title span {
    font-family: 'Hind Vadodara',sans-serif !important;
    margin-right: 5px;
}
        
        
        
        
        /*        ends how diamond sextion solution css with images and section*/

        
        
        
        
        
        
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
}
        .bts   {
            color: aqua;
        }
        .app-area {
    position: relative;
    height: 580px;
}
        
        /*        ends app area images and get app playstore*/

        
        
        
        
/*      start  help area with two buttons red and grey */
        
        .help-area.type6 {
    background-color: unset;
    background-image: url(images/bg_gray@2x.png);
    color: #35393D;
    padding-top: 66px;
    padding-bottom: 66px;
}

.help-area {
    font-family: 'Hind Vadodara',sans-serif !important;
}
.help-area {
    position: relative;
    background: #009ed3;
    color: #fff;
    line-height: 28px;
    padding-top: 47px;
    padding-bottom: 36px;
}
        
        
        .help-area.type6 .img-mobile img {
    width: 205px;
    height: auto;
}

.help-area.type6 img {
    height: 600px;
}
        .help-area .row > * {
    position: static;
}
        .help-area h3 p {
    font-size: 36px;
    line-height: 44px;
    font-weight: normal;
}
        .help-area p {
    font-size: 17px;
    line-height: 25px;
    font-weight: normal;
}
        .help-area.type6 .btns {
    margin-top: 41px;
}
        .help-area.type6 .choose-button {
    font-weight: lighter;
}

        .help-area.type6 .demo-button {
    font-weight: lighter;
}
.help-area .btn {
    width: 180px;
    margin-right: 17px;
    margin-bottom: 28px;
}

.demo-button {
    background-color: #c2c2c2 !important;
    border: unset !important;
    border-radius: 5px !important;
}
        .help-area.type6 .choose-button {
    font-weight: lighter;
}
.help-area .btn-default {
    border-color: #fff;
}

.help-area .btn {
    width: 180px;
    margin-right: 17px;
    margin-bottom: 28px;
}
.choose-button {
    background-color: #e34234 !important;
    color: white !important;
    border-radius: 5px !important;
    border-color: unset !important;
    border: unset !important;
    font-weight: 300;
}
        .help-area p {
    margin-bottom: 20px;
}
        .help-area.type6 .img-mobile {
    right: 0;
    position: absolute;
    top: -32px;
}
        .help-area h3 p {
    font-size: 36px;
    line-height: 44px;
    font-weight: normal;
}
 
        
        /*      end  help area with two buttons red and grey */

        
      
        
        
/*   start only top all footer css codes are here*/
        
        #footer {
/*    background-image: url(images/footer-background.png);*/
    background-color: #35393d;
    position: relative;
    z-index: 30;
}
      
        #footer .top {
    position: relative;
    padding: 0 0 27px;
    border-bottom: solid 2px #464b50;
}
        #footer h4 {
    font-weight: 100;
    color: #fff;
    margin: 0 0 10px;
    font: 17px/21px 'Hind Vadodara',sans-serif;
    text-transform: uppercase;
    font-size: 14px;
    line-height: 19px;
}
        .footer-title {
    color: #fff;
}
        #footer .links {
    list-style: none;
    margin: 0;
    padding: 0;
}
        #footer .links li {
    font-size: 14px;
    line-height: 19px;
    font-weight: 300;
    padding: 0 0 5px;
}
        #footer .links a {
    color: #CBCFD5;
                font-size: 0.9em;

}
        #footer .links a:hover {
    color: #fff;
    font-size: 0.9em;
}
        
        
        
        /*   end only top all footer css codes are here*/

        
       
        
        
        
        
      /*   start bottom top all footer css codes are here*/


        
        #footer .bottom {
    color: rgb(185,185,185);
    background-color: #191B1D;
    line-height: 17px;
    padding: 17px 0 0;
    font: 300 15px/19px 'Hind Vadodara',sans-serif;
}
        #footer .container {
    padding-top: 47px;
    padding-bottom: 15px;
}
        .padding-top-unset {
    padding-top: unset !important;
}
        #footer .bottom-links {
    list-style: none;
    margin: -2px 0 0;
    padding: 0;
    font-size: 0;
    line-height: 0;
    font-family: 'AdobeBlank';
}
        
        
    
        
        
        
/*        footer botton links css*/
        
         
        
        #footer .bottom-links li {
    display: inline-block;
    vertical-align: top;
    position: relative;
    font: 300 15px/19px 'Hind Vadodara',sans-serif;
}
        #footer .bottom-links a {
    color: #b9b9b9;
}
        #footer .bottom .footer-seperator {
    display: none;
}
hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
}
        footer .footer-disclaimer {
    margin: 15px 0;
}
        #footer .bottom p {
    margin: 0;
    display: inline;
}
        #footer .bottom-links li + li:before {
    content: '';
    position: absolute;
    z-index: 20;
    top: 0;
    left: 0;
    width: 1px;
    height: 16px;
    margin: 3px 0 0 14px;
    background: #a7a8a8;
}
        #footer .bottom-links a:hover {
    text-decoration: none;
    color: #fff;
}
        #footer .bottom-links li + li {
    padding: 0 0 0 27px;
}
        .clearfix:after, .dl-horizontal dd:after, .container:after, .container-fluid:after, .row:after, .form-horizontal .form-group:after, .btn-toolbar:after, .btn-group-vertical>.btn-group:after, .nav:after, .navbar:after, .navbar-header:after, .navbar-collapse:after, .pager:after, .panel-body:after, .modal-header:after, .modal-footer:after {
    clear: both;
}
        
        
        
        
        
                        /*   end bottom top all footer css codes are here*/

        
        
        
        
    
        
        
        
/*      start  fixed button red become a member */
        
/*
        .schedule-box {
     position: fixed;
    z-index: 120;
    top: 40vh;
    right: 0px;
    width: 118px;
    background: #e34234;
    color: white;
    height: 150px;
    text-align: center;
    border-radius: 7px 0px 0px 7px;
    padding: 10px;
}
        .homepage2 .schedule-box.active > a {
    visibility: visible;
    opacity: 1;
                color: white;

}
       
      
        .btn-schedule:before {
    content: '';
    position: absolute;
    z-index: 20;
    top: 50px;
    left: 50%;
    width: 58px;
    height: 58px;
    background: url(images/ico-become-a-member.svg) no-repeat;
    background-size: 52px 52px;
    margin: 25px 0 0 -25px;
}
        .request-box {
    position: fixed;
    background: #f1f1f1;
    background-image: url(images/bg_dark-blue-t[1].png) !important;
    top: 0;
    bottom: 0;
    right: 0;
    z-index: 120;
    width: 370px;
    margin: 0 -370px 0 0;
    overflow: auto;
    -webkit-transition: -webkit-box-shadow .3s;
    transition: box-shadow .3s;
}
        .request-box .valign {
    padding: 50px 25px;
}
.request-box .valign {
    display: table-cell;
    vertical-align: middle;
    width: 1%;
    height: 100vh;
    padding: 50px 26px;
}
       .request-box .request-heading {
    text-align: center;
    padding: 0 5px 30px;
    color: #35393d;
    font-size: 17px;
    line-height: 20px;
    font-weight: 400;
}
        .request-box .request-heading h3 {
    color: #fff;
    margin: 0 0 29px;
    font: 500 32px/36px 'Hind Vadodara',sans-serif;
}
        
        .request-box .request-heading p {
    margin: 0;
    color: #fff;
    font-size: 17px;
    line-height: 21px;
}
        
       .request-box .btn-close {
    position: absolute;
    z-index: 20;
    top: 0;
    right: 0;
    margin: 9px 11px 0 0;
} 
        
        .btn-close:before, .btn-close:after {
    content: '';
    position: absolute;
    z-index: 20;
    top: 0;
    left: 0;
    width: 2px;
    height: 21px;
    background: #ffffff;
    -webkit-transition: all .3s;
    transition: all .3s;
}
        .btn-close:before, .btn-close:after {
    content: '';
    position: absolute;
    z-index: 20;
    top: 0;
    left: 0;
    width: 2px;
    height: 21px;
    background: #ffffff;
    -webkit-transition: all .3s;
    transition: all .3s;
}
        
*/
        
        
        /*      end  fixed button red become a member */

        
        
        .modal-dialog {
      max-width: 800px;
      margin: 30px auto;
  }



.modal-body {
  position:relative;
  padding:0px;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}
        
        
        
        
        #fade {
  display: none;
  position: fixed;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .80;
  filter: alpha(opacity=80);
}

#light {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  max-width: 600px;
  max-height: 360px;
  margin-left: -300px;
  margin-top: -180px;
  border: 2px solid #FFF;
  background: #FFF;
  z-index: 1002;
  overflow: visible;
}

#boxclose {
  float: right;
  cursor: pointer;
  color: #fff;
  border: 1px solid #AEAEAE;
  border-radius: 3px;
  background: #222222;
  font-size: 31px;
  font-weight: bold;
  display: inline-block;
  line-height: 0px;
  padding: 11px 3px;
  position: absolute;
  right: 2px;
  top: 2px;
  z-index: 1002;
  opacity: 0.9;
}

.boxclose:before {
  content: "×";
}

#fade:hover ~ #boxclose {
  display:none;
}

.test:hover ~ .test2 {
  display: none;
}
        .language-container {
            width: 40px;
    position: relative;
    height: 40px;
        }
        .language-container .selected-flag {
    display: flex;
    width: 43px;
    justify-content: center;
    height: 40px;
}
        
        
    </style>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
<!--
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                     Begin # DIV Form 
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
-->
<!--                        </form> End # Login Form -->
<!--                    </div> End # DIV Form -->
<!--
                </div>
            </div>
        </div>
-->
        <!-- END # MODAL LOGIN -->

        <header class="header">
<!--            <div class="topbar clearfix">-->
<!--                <div class="container">-->
<!--
                    <div class="row-fluid">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i></strong> +90 543 123 45 67 &nbsp;&nbsp;
                                <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#">info@yoursite.com</a>
                            </p>
                        </div> end left 
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <div class="social">
                                <a class="facebook" href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                <a class="twitter" href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a class="google" href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin" href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a class="pinterest" href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
-->
<!--                            </div> end social -->
<!--                        </div> end left -->
<!--                    </div> end row -->
<!--                </div> end container -->
<!--            </div> end topbar -->

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.html"><img src="images/icon3.png" alt="" style="
    height: 52px;
"></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">

                            
                             <li class="dropdown hassubmenu" style="float: right;margin: -8px 0px 0px 0px;">
                                <a href="page-contact.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <img src="images/in.svg" alt="" class="img-circle" style="
    margin-right: 10px;
    max-width: 33px;
    margin-top: 3px;
">
<!--                                    Language&nbsp;<span class="fa fa-angle-down"></span>-->
                                 </a>
                                <ul class="dropdown-menu" role="menu">
<!--                                    <li><a href="page-contact.html">Blog Grid Fullwidth</a></li>-->
                                    <li><a href="blog-single.html"><img src="images/cn.svg" alt="" class="img-circle" style="
    height: 25px;
    margin: 0px 11px 0px 0px;
">Chinese</a></li>
                                    
<!--
                                    <li><a href="blog-single.html"><img src="images/cn.svg" alt="" class="img-circle" style="
    height: 25px;
    margin: 0px 11px 0px 0px;
">Chinese</a></li>
-->
                                </ul>
                                 
                                 
                            </li>
                            
<!--
                      
-->
<!--
                                  <li class="dropdown">
            <a href="#"> 
    <img style="width: 45px;margin-left: 15px;"src="upload/testimonial_01.png" alt="" class="img-circle">
            </a>
        <ul class="dropdown-menu">
    <img style="width: 45px;margin-left: 15px;"src="upload/testimonial_01.png" alt="" class="img-circle">
    <img style="width: 45px;margin-left: 15px;"src="upload/testimonial_01.png" alt="" class="img-circle">
    <img style="width: 45px;margin-left: 15px;"src="upload/testimonial_01.png" alt="" class="img-circle">
        </ul>
    </li> 
-->
                            
                <div class="btns-menu-side">
<!--                <a href="../diamand/pages/newregister-1.php" class="btn btn-choose-plan2">REGISTER</a>-->
                                
                <a href="../diamand/pages/login.php" class="btn btn-choose-plan1">Sign In</a>
                                 
                </div>
                            
<!--                            <div class="language-container">-->
<!--                                <div class="selected-flag">-->
                                
                            
                            
                            
                            
                            
                            
       
       
                            
                            
                            
                            
                            
                            

<!--                                </div>-->
<!--                            </div>                            -->
                            <!--<li class="iconitem">
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-search"></i></a>
                            </li>
                            <li class="iconitem">
                                <a class="shopicon" href="shop-cart.html">
                                    <i class="fa fa-shopping-basket">
                                    </i> 
                                    &nbsp;(0)
                                </a>
                            </li>-->
                            
        
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        <section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <p>The Largest and Most Trusted Marketplace for Diamonds and Jewelry</p>
                    <small><span style="color: #ea8634;font-weight: 900;">Powered</span> by <span style="color: #359846;font-weight: 900;">Trade Diamond</span></small>
                    <div class="btn-wrapper">
                        <div class="text-center">
                <a href="#" class="btn btn-danger wow slideInLeft btn-tcs ">
                                Enter Trade diamond
                </a> &nbsp;&nbsp;&nbsp;
            <a href="#" class="btn btn-default wow slideInRight btn-tcs-1">
                Register now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-bottom">
                
<!--
                
                <div id="light">
  <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
  <video id="VisaChipCardVideo" width="600" controls>
      <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
    </video>
</div>
-->

<!--<div id="fade" onClick="lightbox_close();"></div>-->
                
               

<div>
    <span>Explore <i class="fa fa-angle-down"></i></span>
<!--
                    <span><i class="fa fa-play">

  <a href="#" onclick="lightbox_open();">Watch video</a>
                        </i>
                        </span>
-->
    <div></div>
</div>
                
            
                
                
                
                
                
            </div>
            
            
            
        </section>

        
        
        
        
          <section class="section db">
              <h2 class="animated delay-01 text-center" style=" color: #35393d;margin: 0px 0 40px;font: 36px/25px 'Vadodara Light',sans-serif;font-weight: 100;;">Now on Trade Diamond </h2>
              
              <br>
              <br>
              
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-4 col-md-3">
                        <div class="stat-count">
                            <h4 class="stat-timer">1230</h4>
                            <h3 style="
    color:#35393d;
    font-size: 20px;
    font-weight: 900;
">
<img src="images/diamond-stone.png">
                                Available Diamond</h3>
                            <p style="color:#35393d"> Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-3">
                        <div class="stat-count">
                            <h4 class="stat-timer">331</h4>
                            <h3 style="
    color:#35393d;
    font-size: 20px;
    font-weight: 900;
">
<img src="images/account-check-outline.png">
                                Registered Supplieres

</h3>
                            <p style="color: #35393d">Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-3">
                        <div class="stat-count">
                            <h4 class="stat-timer">$0</h4>
                            <h3 style="
    color:#35393d;
    font-size: 20px;
    font-weight: 900;
">
<img src="images/playlist-check.png">
                                Total Stock Value

</h3>
                            <p style="color: #35393d">Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                        </div><!-- stat-count -->
                    </div>
                    
<!--
                    <div class="col-lg-3 col-md-3">
                        <div class="stat-count">
                            <h4 class="stat-timer">8901</h4>
                            <h3 style="
    color:#35393d;
    font-size: 20px;
    font-weight: 900;
"><i class="fa fa-search"></i> DAILY SEARCHES

</h3>
                            <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
-->
<!--                        </div> stat-count -->
<!--                    </div>-->
                    
                    <!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        
        
        
        
        
        
        
        
        
        
        
        <div class="why-section-new appear visible-element">
    <div class="container">
            <img class="why-diamond-top-image" src="images/mask-group-25-2x-1-1.png">
        <h2 class="animated delay-01 text-center">Why Trade Diamond and Jewelry Professionals Prefer DiaMond</h2>
        <div class="row why-diamond-card-row">
                    <div class="col-sm-12 col-md-4 text-center">
                        <div class="why-diamond-card">
                                <img class="img-responsive why-diamond-card-img" src="images/group-414-2x.png">
                            <div class="why-diamond-card-body">
                                    <h3  style="font-size: 27px;line-height: 24px;margin: 0 0 15px;color: #626553;">Largest</h3>
                          <div class="why-diamond-card-body-subtitle">
                                        <ul><li>Tens of thousands of members</li><li>Over 1 million diamonds and jewelry</li><li>95+ countries</li></ul>
                                    </div>
                            </div>
                        </div>
                    </div>
            
            
                    <div class="col-sm-12 col-md-4 text-center">
                        <div class="why-diamond-card">
                                <img class="img-responsive why-diamond-card-img" src="images/group-413-2x.png">
                            <div class="why-diamond-card-body" >
                                    <h3 style="font-size: 27px;line-height: 24px;margin: 0 0 15px;color: #626553;">Most Trusted</h3>
                                            <div class="why-diamond-card-body-subtitle">
                                        <ul><li>Secure network</li><li>Verified buyers and suppliers</li><li>Established in 1976</li></ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center">
                        <div class="why-diamond-card">
                                <img class="img-responsive why-diamond-card-img" src="images/group-500-2x.png">
                            <div class="why-diamond-card-body">
                                    <h3  style="font-size: 27px;line-height: 24px;margin: 0 0 15px;color: #626553;">Competitive</h3><div class="why-diamond-card-body-subtitle">
                                        <ul><li>Source at the best prices</li><li>No commission or transaction fees</li><li>Real-time pricing info with Rapaport Price List</li></ul>
                                    </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
<!--            <img class="why-diamond-bottom-image" src="images/mask-group-24-2x.png">-->

</div>
        
        
        
        
        
        
        
        
        
        <section class="logos-section  appear visible-element">
<!--
        <div class="container-fluid">
            <h2 class="animated delay-01">Trusted by thousands of buyers and sellers</h2>
            <ul class="logos-list logos-trusted animated delay-03">

                            <li class="li-logo-01">
                                <div class="logo-image logo-01">
                                        <a href="#" target="_blank">
                                            <img src="images/kf_logo_rgb_alpha_200px.png" alt="Kimberfire" title="Kimberfire">

                                        </a>
                                </div>
                            </li>
                            <li class="li-logo-02">
                                <div class="logo-image logo-02">
                                        <a href="#" target="_blank">
                                            <img src="images/logo-06.png" alt="Stuller" title="Stuller">

                                        </a>
                                </div>
                            </li>
                            <li class="li-logo-03">
                                <div class="logo-image logo-03">
                                        <a href="#" target="_blank">
                                            <img src="images/logo-01-o.png" alt="MID House of Diamonds" title="MID House of Diamonds">

                                        </a>
                                </div>
                            </li>
                            <li class="li-logo-04">
                                <div class="logo-image logo-04">
                                        <a href="#" target="_blank">
                                            <img src="images/borsheims_logo.png" alt="Borsheims" title="Borsheims">

                                        </a>
                                </div>
                            </li>

            </ul>
        </div>
-->
    </section>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <section class="solution-area-new appear visible-element">
    
    <div class="container">
        <div class="row">
            <div class="solution-area-new-title text-center">
        <div class="first-title">The next generation</div>
                <div class="second-title"><span>TRADE</span>DIAMONDS</div>
                <div class="third-title">Thanks to our fast-growing community we reached</div>
        <div class="stock-value">$5,633,349,964.00</div>
        <div class="stock-value-text">Total stock value!</div>
    </div>
<!--
                        <div class="col-sm-12 col-md-4 text-center d-flex">
                            <div class="solution-area-new-card equalHeights">
                                    <div class="solution-area-new-img-container p-relative ">
                                        <img class="img-responsive solution-area-new-img order0 centered-absolute " src="images/diamonds-5-2x-1-1-1.png">
                                    </div>
                                <div class="solution-area-new-card-body ">
                                        <div class="solution-area-new-card-body-title">
                                            <h3>Source and Sell  Diamonds</h3>
                                        </div>
                                                 <div class="solution-area-new-card-body-subtitle">
                                            <p>Immediately access over 1 million diamonds in any size, shape, color and clarity. DiaMond is the global market for diamonds.</p>
                                        </div>
                                                         <a class="solution-area-new-button" href="/diamonds/">
                                            Learn More
                                        </a>
                                </div>
                            </div>
                        </div>
-->
<!--
                        <div class="col-sm-12 col-md-4 text-center d-flex">
                            <div class="solution-area-new-card equalHeights">
                                    <div class="solution-area-new-img-container p-relative ">
                                        <img class="img-responsive solution-area-new-img order1 centered-absolute " src="images/jewerly-1a-2x.png">
                                    </div>
                                <div class="solution-area-new-card-body ">
                                        <div class="solution-area-new-card-body-title">
                                            <h3>Source and Sell Jewelry</h3>
                                        </div>
                                               <div class="solution-area-new-card-body-subtitle">
                                            <p>Source and sell fine jewelry including earrings, necklaces, watches and more. Buy at competitive prices directly from verified suppliers.</p>
                                        </div>
                                                    <a class="solution-area-new-button" href="/jewelry/">
                                            Learn More
                                        </a>
                                </div>
                            </div>
                        </div>
-->
<!--
                        <div class="col-sm-12 col-md-4 text-center d-flex">
                            <div class="solution-area-new-card equalHeights">
                                    <div class="solution-area-new-img-container p-relative ">
                                        <img class="img-responsive solution-area-new-img order2 centered-absolute " src="images/calculator-2x-1-1.png">
                                    </div>
                                <div class="solution-area-new-card-body ">
                                        <div class="solution-area-new-card-body-title">
                                            <h3>Powerful Pricing Tools</h3>
                                        </div>
                                              <div class="solution-area-new-card-body-subtitle">
                                            <p>Find the best deals and source your diamonds at the most competitive prices.</p>
                                        </div>
                                                 <a class="solution-area-new-button" href="/diamonds/pricing-tools/">
                                            LEARN MORE
                                        </a>
                                </div>
                            </div>
                        </div>
-->

        </div>

    </div>
    <img class="diamonds7" src="images/diamonds7.png">
</section>
        
        
        
        
        
        
        
        
        <section class="app-area" style="margin-top: 70px;margin-bottom: 40px;">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-5">
                            <img class="app-area-img" src="images/81yZOQEC+NL._AC_SL1500_.png" alt="DiaMond App">

            </div>
            
            <div class="col-xs-12 col-md-5 app-area-body text-center ">
                <div class="row">
                    <div class="col-xs-12 col-sm-6  col-md-7 col-lg-push-4" style="margin-top: 25px">
                        <h3>Get the App</h3>

<p style="text-align: center;">Never miss a deal. Stay on top of the market, wherever you are, with all of your DiaMond settings synced between the app and your desktop.</p>
<!--                            <a class="btn app-area-link btn-primary" href="#">DOWNLOAD NOW</a>-->


                            <div class="col-xs-12 appstore-btns" style="margin-top: 20px">
                                <div class="row no-pad">
                                                <div class="col-xs-6">
                                                    <a class="apple-link" href="#">
                                                        <img class="img-responsive" src="images/appstore.png" alt="Apple AppStore Link">
                                                    </a>
                                                </div>
                                                <div class="col-xs-6 ">
                                                    <a class="google-link" href="#">
                                                        <img class="img-responsive" src="images/googlepay.png" alt="Google Play Link">
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
        
        
        
        
        
        
        
        
        
        
        
        
<!--
         <section class="section">
            <div class="container">
                <div class="section-title text-center">
                    <h2 style="
    font-size: 40px;
    font-weight: 300;
">What Our Members Are Saying</h2>
-->
<!--                    <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>-->
                <!-- end title -->
<!--
</div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/testimonial_01.png" alt="" class="img-circle"> Jenny LUXURY</strong></p>
                            <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
-->
<!--
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/testimonial_02.png" alt="" class="img-circle"> Martin LEO</strong></p>
                            <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
-->
<!--
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/testimonial_03.png" alt="" class="img-circle"> John DOE</strong></p>
                            <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
-->
<!--
                        </div>
                    </div>
                </div>
            </div>
        </section>
-->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--
      <div class="homepage2">
          <div class="schedule-box active">
    <a href="#" data-category="Homepage" data-label="Schedule a demo - floating" class="btn-schedule">BECOME A MEMBER</a>
    <div class="request-box" style="margin-right: -370px;">
        <div class="valign">
            
                <header class="request-heading">
                    <h3>Become a member</h3>
                    <p>See for yourself how RapNet will give you the most current and accurate market information on pricing, diamonds and people for your jewelry and diamond business.</p>
                </header>
                



<div class="request-demo-form">
    <div class="request-demo-container">
        
    </div>
    <div class="request-demo-loader spinner">
    </div>
</div>


            
        </div>
        <a href="#" class="btn-close">Close</a>
    </div>
</div>
        
        </div>
-->
        
        
        
        
        
<!--       droo it there-->

<!--        <h1>CSS/Javascript popup with Lightbox effect</h1>-->


        
        
        
        
        
        <section class="help-area type6 appear visible-element">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                              <figure class="img-mobile animated delay-07"><img src="images/diamonds-6-1-1.png" alt="Diamonds 6[1][1]"></figure>
                            <div class="row">
                                <div class="col-sm-6 help-are-text text-center">
                                    <h3 class="animated delay-01"><p>Need help getting started</p></h3>
                                    <div class="animated delay-03 d-inline-block type6-text"><p>Visit our Help Center by clicking the button on the right,<br/> or send us an email at support@Trade-diamonds.com</p></div>
                                </div>
                                <div class="col-sm-6 help-are-buttons text-center">
                                        <div class="btns animated delay-05 ">
                                                    <a class="btn btn-default choose-button" data-category="Homepage" data-label="CHOOSE A PLAN - bottom" href="mailto:someone@example.com" target="_self">Email our support</a>
                                                    <a href="#popUpForm-10331" rel="modal:open" class="btn btn-primary demo-button" data-category="Homepage" data-label="GET A DEMO - bottom">Help Center</a>



<div>

            <div class="modal" id="popUpForm-10331">
                <div class="request-demo-container">
                    <div class="popup-form-title-10331">
                        <h1 style="text-align: center;">Get a Free Demo</h1></div>
                    <h3 class="popUpSubTitle-10331">See for yourself how Name will give you the most current and accurate market information on pricing, diamonds and people</h3> 
                </div>
                    <h3 class="popUpSubTitle-10331">See for yourself how Name will give you the most current and accurate market information on pricing, diamonds and people</h3>
    </div>
                </div>
            </div>
    <p hidden="" class="second-title-10331"></p>
    <p hidden="" class="second-subTitle-10331"></p>
</div>                                        </div>
                                </div>
                            </div>
                        </div>
            
        </section>
        
        
        
        
        
        
        
        
      <footer id="footer">
   <footer class="section footer noover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe Our Newsletter</h3>
                            <div class="newsletter-widget ">
                                <p>You can opt out of our newsletters at any time.<br> See our <a href="#">privacy policy</a>.</p>
                                <form class="form-inline" role="search">
                                    <div class="form-1">
                                        <input type="text" class="form-control" placeholder="Enter email here..">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                               <div class="col-xs-6">
                                                    <a class="apple-link" href="#">
                                                        <img class="img-responsive" src="images/appstore1.png" alt="Apple AppStore Link">
                                                    </a>
                                                </div> 
                                <div class="col-xs-6">
                                                    <a class="apple-link" href="#">
                                                        <img class="img-responsive" src="images/googlepay1.png" alt="Apple AppStore Link">
                                                    </a>
                                                </div>
                            </div><!-- end newsletter -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Contact us today</h3>
                            <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                            <a href="#" class="readmore">Contact Us</a>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Trade Diamond</h3>
                            <div class="tags-widget">   
                                <p>example@gmail.com</p>
                                <p>Phone: +91 (8879502021)</p>
                                <ul class="list-inline">
<!--                                    <li><i class="mdi mdi-phone"></i>9082531310</li>-->
                                </ul>
<!--
                                <ul class="list-inline">
                                    <li><a href="#">course</a></li>
                                    <li><a href="#">web design</a></li>
                                    <li><a href="#">development</a></li>
                                    <li><a href="#">language</a></li>
                                    <li><a href="#">teacher</a></li>
                                    <li><a href="#">speaking</a></li>
                                    <li><a href="#">material</a></li>
                                    <li><a href="#">css3</a></li>
                                    <li><a href="#">html</a></li>
                                    <li><a href="#">learning</a></li>
                                </ul>
-->
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Support</h3>
                            <div class="list-widget">   
                                <ul>
                                    <li><a href="#">Search</a></li>
                                    <li><a href="#">Supplier</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Trending</a></li>
                                    <li><a href="#">Help Center</a></li>
<!--                                    <li><a href="#">Contact Us</a></li>-->
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer>
          
          
          
          
          
          
    <div class="bottom">
        <div class="container padding-top-unset">
            <div class="row">
                <div class="col-md-5">
                    <ul class="bottom-links">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">License Agreement</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                    </ul>
                    <hr class="footer-seperator">

                </div>
                
            </div>
             

        </div>
    </div>
</footer>
        

      
    </div>
    <!-- end wrapper -->
   
    <script> 
    $(function () { 
    $(window).scroll(function () {
        
        
        if ($(this).scrollTop() > 70) { 
            $('.logo-normal .navbar-brand img').attr('src','images/icon2.png');
        }
        if ($(this).scrollTop() < 70) { 
            $('.logo-normal .navbar-brand img').attr('src','images/icon3.png' );
        }
    })
});
        
        
//        youtube video
        
//        window.document.onkeydown = function(e) {
//  alert('hoge')
//  if (!e) {
//    e = event;
//  }
//  if (e.keyCode == 27) {
//    lightbox_close();
//  }
//}
//
//function lightbox_open() {
//  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
//  window.scrollTo(0, 0);
//  document.getElementById('light').style.display = 'block';
//  document.getElementById('fade').style.display = 'block';
//  lightBoxVideo.play();
//}
//
//function lightbox_close() {
//  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
//  document.getElementById('light').style.display = 'none';
//  document.getElementById('fade').style.display = 'none';
//  lightBoxVideo.pause();
//}
      
    </script>
    
    
    <script>
    $(document).ready(function(){
        // Show hide popover
        $(".dropdown").click(function(){
            $(this).find(".dropdown-menu").slideToggle("fast");
        });
    });
    $(document).on("click", function(event){
        var $trigger = $(".dropdown");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".dropdown-menu").slideUp("fast");
        }            
    });
</script>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="js/videobg.js"></script>

</body>
</html>