<?php include('../../firebase_connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trade Diamond New Register</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- base:css -->
    <!--    ../../css/style.css-->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../secondandlogin/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../secondandlogin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../diamand/images/dimamondfav.png"/>
</head>
<style>
    .login-details {
        height: 570px;
        width: 77%;
        margin-left: 40px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 5px;
        background-color: #fff;
        padding-top: 20px;
        padding-left: 10px;
        padding-right: 10px;
        margin-top: 35px;
    }

    .login-details .welcome {
        font-family: Gilroy ExtraBold;
        font-size: 25px;
        text-align: center;
        margin-bottom: 20px;
    }

    .login-details .image-on-right {
        width: 223.7px;
        height: 210px;
    }

    .login-details .paragraph {
        margin-top: 40px;
        font-size: 14px;
        color: #787878;
        width: 85%;
        text-align: center;
        line-height: 1.93;
        letter-spacing: .27px;
        display: flex;
        justify-content: center;
    }

    .help {
        text-align: center;
        padding: 20px;
    }


    .border {
        border: 5px solid black;
    }

    #firstID {

    }


    #secondID {
    }

    #Div2 {
        display: none;
    }

    #Div3 {
        display: none;
    }

    #Div4 {
        display: none;
    }


    #btn {
        /*            display: none;*/
    }

    /*
            #valid {
                border-color: #5bff5b;
            }
            #invalid {
                border-color: #ffa2a2;
            }
            input + p {
                color: orange;
                opacity: 0;
                height: 0;
                font-size: 1.0em;
                    font-family: "Source Sans Pro", sans-serif;
                margin: 0 auto;

            }
            #invalid +p {
                opacity: 1;
            }

    */
    .fileupload {
        width: 100px;
        height: 50px;
        position: relative;
        overflow: hidden;
        background: . . .; /* and other things to make it pretty */
    }

    .fileupload input {
        position: absolute;
        top: 0;
        right: 0;
        /* not left, because only the right part of the input seems to
                        be clickable in some browser I can't remember */
        cursor: pointer;
        opacity: 0.0;
        filter: alpha(opacity=0);
        /* and all the other old opacity stuff you
                                        want to support */
        font-size: 300px;
        /* wtf, but apparently the most reliable way to make
                                a large part of the input clickable in most browsers */
        height: 200px;
    }

    #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 30px;
        font-size: 17px;
    }

    #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
    }

    @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
    }

    @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
    }

    @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
    }




</style>

<body>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">

                <div class="col-lg-8 d-flex align-items-center justify-content-center">
                    <div class="auth-form-transparent text-left p-3">
                        <div class="brand-logo" style="padding: 15px 0px 15px 0px;">
                            <a href="login.php">
                                <img src="../../diamand/images/icon2.png" alt="logo" style="height: 60px;width: 220px;">

                            </a>
                            <!--
                              <img src="../../../diamand/images/India%20Flag%2080-80.jpg" alt="" class="img-circle" style="
              margin-right: 10px;
              max-width: 39px;
          ">
          -->
                        </div>


                        <div id="Div1">


                            <h2 style="text-align: center">Sign in </h2>

                            <!--                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">-->

                            <script>
                                $(document).ready(function () {

                                    $("#btn").hide();

                                    $("#email").keyup(function () {
                                        //magic
                                        if (validateEmail()) {
                                            //green when correct
                                            $("#email").css("border", "1px solid green");
                                            // alert msg
                                            $("#emailMsg").html("<p class='class=text-success mt-2' style='text-align: center'>This Email is valid</p>");
                                        } else {
                                            //red when uncorrect
                                            $("#email").css("border", "1px solid red");
                                            // alert msg
                                            $("#emailMsg").html("<p class='class=text-danger mt-2' style='text-align: center'>Email must be a valid character for example (abc123@gmail.com)</p>");
                                        }
                                        buttonState();
                                    });

                                    $("#username").keyup(function () {
                                        //magic
                                        if (validateUsername()) {
                                            //green when correct
                                            $("#username").css("border", "1px solid green");
                                            // alert msg
                                            $("#userMsg").html("<p class='class=text-success mt-2' style='text-align: center'>This is valid name  </p>");
                                        } else {
                                            //red when uncorrect
                                            $("#username").css("border", "1px solid red");
                                            // alert msg
                                            $("#userMsg").html("<p class='class=text-danger mt-2' style='text-align: center'>Your name must be a valid character (numbers,commas, & symbols are not allowed) </p>");
                                        }
                                        buttonState();

                                    });


                                    $("#otp").keyup(function () {
                                        //magic
                                        if (validateOtp()) {
                                            //green when correct
                                            $("#otp").css("border", "1px solid green");
                                            // alert msg
                                            $("#userMsg").html("<p class='class=text-success mt-1' style='text-align: center'>Valid</p>");
                                        } else {
                                            //red when uncorrect
                                            $("#otp").css("border", "1px solid red");
                                            // alert msg
                                            $("#userMsg").html("<p class='class=text-danger mt-1' style='text-align: center'>Un Valid</p>");
                                        }
//                                        buttonState();

                                    });

                                    //restriction for first
                                    $(function () {

                                        $('#username').keydown(function (e) {

                                            if (e.shiftKey || e.ctrlKey || e.altKey) {

                                                e.preventDefault();

                                            } else {

                                                var key = e.keyCode;

                                                if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {

                                                    e.preventDefault();

                                                }

                                            }

                                        });

                                    });


                                });


                                function buttonState() {
                                    if (validateEmail() && validateUsername()) {
                                        $("#btn").show();
                                    } else {
                                        $("#btn").hide();

                                    }
                                }

                                //                        function buttonState() {
                                //                            if(validateOtp()){
                                //                                $("#btn").show();
                                //                            }else {
                                //                                $("#btn").hide();
                                //
                                //                                }
                                //                        }


                                //email function
                                function validateEmail() {

                                    var email = $("#email").val();
                                    var reg = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                                    if (reg.test(email)) {
                                        return true;
                                    } else {
                                        return false;
                                    }
                                }

                                //username function
                                function validateUsername() {

                                    var user = $("#username").val();
//                            var reg = /^[a-zA-Z0-9_]{8-30}$/
                                    if (user.length > 2) {
                                        return true;
                                    } else {
                                        return false;
                                    }
                                }


                                function validateOtp() {

                                    var otp = $("#otp").val();
                                    var reg = /^[0-9]*$/
                                    if (reg.test(otp)) {
                                        return true;
                                    } else {
                                        return false;
                                    }
                                }
                            </script>


                            <form class="pt-3" action="" method="post">
                                <div class="form-group">
                                    <label for="#">Full Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account text-danger"></i>
                      </span>
                                        </div>
                                        <input id="username" type="text"
                                               class="userName form-control form-control-lg border-left-0"
                                               placeholder="Enter your full name" name="userName" autocomplete="off"
                                               style="text-transform:capitalize" maxlength="21">
                                        <!--                      <p class="pt-1">Your name must alphanumeric and contain 5 - 16 character </p>-->
                                    </div>

                                    <span id="userMsg" class="pt-1"></span>

                                </div>
                                <div class="form-group">
                                    <label for="#">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email text-danger"></i>
                      </span>
                                        </div>
                                        <input id="email" type="text"
                                               class="email form-control form-control-lg border-left-0"
                                               placeholder="Enter your email address" name="emailAddress">


                                        <!--                    <p >Your name must alphanumeric and contain 5 - 16 character </p>-->

                                    </div>
                                    <span id="emailMsg" class="pt-1"></span>

                                </div>
<!--                                <div class="form-group">-->
<!--                                                      <label for="exampleInputPassword" >Enter Number</label>-->
<!---->
<!--                                    <div class="input-group">-->
<!--                                        -->
<!--                                                            <div class="input-group-prepend bg-transparent">-->
<!--                                                              <span class="input-group-text bg-transparent border-right-0">-->
<!--                                                                <i class="mdi mdi-phone text-danger"></i>-->
<!--                                                              </span>-->
<!--                                                            </div>-->
<!--                                        -->
<!--                                        -->
<!--                                                              <div class="input-group-prepend show">-->
<!--                                                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Dropdown</button>-->
<!--                                                                <div class="dropdown-menu show" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -149px, 0px);">-->
<!--                                                                  <a class="dropdown-item" href="#">Action</a>-->
<!--                                                                  <a class="dropdown-item" href="#">Another action</a>-->
<!--                                                                  <a class="dropdown-item" href="#">Something else here</a>-->
<!--                                                                  <div role="separator" class="dropdown-divider"></div>-->
<!--                                                                  <a class="dropdown-item" href="#">Separated link</a>-->
<!--                                                                </div>-->
<!--                                                              </div>-->
<!--                                        -->
<!--                                        -->
<!--                                                              <input id="exampleInputPassword" type="text" class="phoneNumber form-control bfh-phone  form-control-lg border-left-0 " data-format="+91 (ddd) ddd-dddd" placeholder="Enter your Number" data-country="countries_phone1" name="phoneNumber">-->
<!--                                                                                    <p class="pt-1">Number must be valid Ind telephone number (10 digit) </p>-->
<!--                                        -->
<!---->
<!---->
<!--                                                           <input type="number" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Enter your Number">                       -->
<!--                                    </div>-->
<!--                                </div>-->
                                <p id="def_position" style="text-align: center;">OTP will sent you on your provided
                                    Email address id</p>
<!--                                <div class="my-2 d-flex justify-content-between align-items-center">-->
<!---->
<!--                                    <div class="form-check">-->
<!--                                        -->
<!--                                                                    <label class="form-check-label text-muted" style="font-size: 13px;">-->
<!--                                                                      <input type="checkbox" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="" >Keep me signed in-->
<!--                                                                    <i class="input-helper"></i></label>-->
<!--                                        -->
<!--                                    </div>-->
<!---->
<!--                                                      <a href="#" class="auth-link text-black">Forget Number?</a>-->
<!--                                </div>-->
                                <div class="my-3">
                                    <!--                    href="../../secondandlogin/index.html"-->
                                    <a id="btn"
                                       class="subButton btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn"
                                       onclick="switchVisible(); changeImage();" name="submit" style="color: white;">
                                        Nexts</a>
                                </div>
                                <!--
                                                <div class="mb-2 d-flex">
                                                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                                                    <i class="mdi mdi-facebook mr-2"></i>Facebook
                                                  </button>
                                                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                                                    <i class="mdi mdi-google mr-2"></i>Google
                                                  </button>
                                                </div>
                                -->
                                <!--
                                                <div class="text-center mt-4 font-weight-light">
                                                  Do you have an account? <a href="#" class="text-danger">Login now</a>
                                                </div>
                                -->
                                <br/>
                                <h6 class="font-weight-light"><span>Trade Diamonds</span> is in full compliance with
                                    maximum security protocols in order to make sure your details are secured and
                                    confidential. You can read more on our security and privacy features, along with
                                    more important details regarding our terms of use.</h6>

                            </form>


                        </div>


                        <!--                background: red;-->
                        <div id="Div2" style=" height: auto;">

                            <a style="text-decoration: none; color: black"><img src="../images/arrow-left-circle.png"
                                                                                style="height: 23px"
                                                                                onclick="switchVisible();  changeImage1()">&nbsp;
                                &nbsp;Go Back</a>


                            <!--                href="registertype.html"-->


                            <h2 style="text-align: center;    margin-top: 25px;">Check your mail and enter OTP</h2>

                            <!--                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">-->


                            <form class="pt-3">
                                <div class="form-group" style="
    margin-top: 35px;">
                                    <!--                    <label for="exampleInputEmail">Enter OTP</label>-->
                                    <!--                  <label for="exampleInputEmail">Email address</label>-->
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-message text-danger"></i>
                      </span>
                                        </div>
                                        <input id="otp" type="tel" class="form-control form-control-lg border-left-0"
                                               id="exampleInputEmail" placeholder="Enter otp" name="enterOtp"
                                               maxlength="4">
                                        <p class="mr-2 " style="text-align:center " id="email_msg">You have only 60
                                            seconds to enter otp (must be
                                            valid otp)</p>
                                    </div>
                                </div>
                                <!--
                                                <div class="form-group">
                                                  <label for="exampleInputPassword">Enter Password</label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend bg-transparent">
                                                      <span class="input-group-text bg-transparent border-right-0">
                                                        <i class="mdi mdi-lock-outline text-danger"></i>
                                                      </span>
                                                    </div>
                                                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Enter your Password">
                                                  </div>
                                                </div>
                                -->
                                <p style="text-align: center;">Don't Share this OTP with anyone</p>

                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <!--
                                                            <label class="form-check-label text-muted">
                                                              <input type="checkbox" class="form-check-input">
                                                              Keep me signed in
                                                            </label>
                                        -->
                                    </div>
                                    <a href="#" class="auth-link text-black">Resend OTP</a>
                                </div>
                                <div class="my-3">
                                    <!--                    href="../../secondandlogin/index.html"-->
                                    <a id="btnOtp"
                                       class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn"
                                       onclick="saveData()" style="color: white;"> Submit</a>
                                    <div id="snackbar">Wrong OTP entred</div>

                                </div>
                                <!--
                                                <div class="mb-2 d-flex">
                                                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                                                    <i class="mdi mdi-facebook mr-2"></i>Facebook
                                                  </button>
                                                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                                                    <i class="mdi mdi-google mr-2"></i>Google
                                                  </button>
                                                </div>
                                -->
                                <!--
                                                <div class="text-center mt-4 font-weight-light">
                                                  Do you have an account? <a href="#" class="text-danger">Login now</a>
                                                </div>
                                -->
                                <br/>
                                <h6 class="font-weight-light"><span>Trade Diamonds</span> is in full compliance with
                                    maximum security protocols in order to make sure your details are secured and
                                    confidential. You can read more on our security and privacy features, along with
                                    more important details regarding our terms of use.</h6>

                            </form>


                        </div>


                        <!--                background: blue;-->
                        <div id="Div3" style="width: 590px;margin-left: -75px;">
                            <a style="text-decoration: none; color: black"><img src="../images/arrow-left-circle.png"
                                                                                style="height: 23px"
                                                                                onclick="switchVisible2(); document.getElementById('myImage').src='../../diamand/images/enter-otp.png'">&nbsp;
                                &nbsp;Go Back</a>
                            <h2 style="text-align: center">Please choose an account type</h2>
                            <br>
                            <br>
                            <br>

                            <!--                <hr style="height:2px;border-width:0;color:gray;background-color:gray">-->


                            <div>
                                <form class="pt-5">

                                    <div class="row">

                                        <div id="firstID" style="background: #e2e2e2;height: 240px; /*border: 2px solid red;*/border-radius: 8px 8px 8px 8px;    margin: 0px 0px 0px 22px;
;" class="col-lg-5  check-buy">

                                            <div class="self">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                               name="optionsRadios" id="buy" value="">
                                                        Buyer Account
                                                        <i class="input-helper"></i></label>


                                                </div>

                                                <div class="help">
                                                    <img src="../../diamand/images/asbuys.png" style="height: 182px;">

                                                </div>

                                                <div class="para"
                                                     style="max-width: 90%;font-size: 14px;margin: 15px auto;">
                                                    <p>Search, add to your wishlist and bid on any diamond.</p>
                                                </div>

                                            </div>

                                        </div>

                                        <div id="secondID" style="background: #e2e2e2;height: 240px;
                                             /*border: 2px solid red;*/border-radius: 8px 8px 8px 8px;margin-left: 60px;"
                                             class="col-lg-5 check-sel ">


                                            <div class="self ">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                               name="optionsRadios" id="sell" value="">
                                                        Buyer seller Account
                                                        <i class="input-helper"></i></label>
                                                </div>

                                                <div class="help">
                                                    <img src="../../diamand/images/registertype.png">

                                                </div>

                                                <div class="para"
                                                     style="max-width: 90%;font-size: 14px;margin: 31px  auto;">
                                                    <p>Search, add to your wishlist and bid on any diamond.</p>
                                                </div>

                                            </div>


                                        </div>
                                    </div>

                                    <!--
                                                    <div class="form-group">
                                                      <label for="exampleInputEmail">Email address</label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend bg-transparent">
                                                          <span class="input-group-text bg-transparent border-right-0">
                                                            <i class="mdi mdi-email-outline text-primary"></i>
                                                          </span>
                                                        </div>
                                                        <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Enter full email address">
                                                      </div>
                                                    </div>
                                    -->
                                    <!--
                                                    <div class="form-group">
                                                      <label for="exampleInputPassword">Enter Password</label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend bg-transparent">
                                                          <span class="input-group-text bg-transparent border-right-0">
                                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                                          </span>
                                                        </div>
                                                        <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Enter your Password">
                                                      </div>
                                                    </div>
                                    -->
                                    <!--
                                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                                      <div class="form-check">
                                                        <label class="form-check-label text-muted">
                                                          <input type="checkbox" class="form-check-input">
                                                          Keep me signed in
                                                        </label>
                                                      </div>
                                                      <a href="#" class="auth-link text-black">Forgot password?</a>
                                                    </div>
                                    -->


                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="my-6">
                                        <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn"
                                           href="#" style="width: 60%; margin: 35px auto;" onclick="saveType();"
                                           style="color: white;"> Next </a>
                                    </div>
                                    <!--
                                                    <div class="mb-2 d-flex">
                                                      <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                                                        <i class="mdi mdi-facebook mr-2"></i>Facebook
                                                      </button>
                                                      <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                                                        <i class="mdi mdi-google mr-2"></i>Google
                                                      </button>
                                                    </div>
                                    -->
                                    <!--
                                                    <div class="text-center mt-4 font-weight-light">
                                                      Don't have an account? <a href="register-2.html" class="text-primary">Register now</a>
                                                    </div>
                                    -->
                                    <br/>
                                    <h6 class="font-weight-light"><span>Trade Diamonds</span> is in full compliance with
                                        maximum security protocols in order to make sure your details are secured and
                                        confidential. You can read more on our security and privacy features, along with
                                        more important details regarding our terms of use.</h6>

                                </form>


                            </div>


                        </div>


                        <!--                start-->


                        <div>
                            <div>
                                <div id="Div4" style="/* background: red; */width: 751px;margin-left: -140px;">

                                    <div class="absolute flex align-centered register-go-back">
                                        <div class="flex">
                                            <a style="text-decoration: none; color: black"><img
                                                        src="../images/arrow-left-circle.png" style="height: 23px"
                                                        onclick="switchVisible3(); document.getElementById('myImage').src='../../diamand/images/set-sail2.png'">&nbsp;
                                                &nbsp;Go Back</a>
                                        </div>
                                    </div>

                                    <h2 style="text-align: center">Create an account</h2>
                                    <p class="pt-2" style="text-align: center">Fill this quick form in order to confirm
                                        the following process.</p>


                                    <!--                this code is for extra 1 and 2 form-->
                                    <!--                <div class="flex centered column stepper-container"><div class="flex full-width space-between align-centered steps-container"><div class="flex align-centered"><div><img alt="1" src="../images/step1-blue.png"></div><div class="step-title">Create An Account</div></div><div class="step-divider"></div><div class="flex align-centered"><div><img alt="2" src="../images/step2-gray.png"></div><div class="step-title">AML / KYC</div></div></div><div class="stepper-divider"></div></div>-->


                                    <!--                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">-->

                                    <form class="pt-5">


                                        <div class="card">
                                            <div class="card-body">
                                                <!--                    <h4 class="card-title">Horizontal Two column</h4>-->
                                                <form class="form-sample">
                                                    <p class="card-description">Personal info</p>
                                                    <!--
                                                                          <div class="row">
                                                                            <div class="col-md-6">
                                                                              <div class="form-group row">
                                                                                <label class="col-sm-6 col-form-label" >First Name*</label>
                                                                                <div class="col-sm-12">
                                                                                  <input placeholder="Example: John" type="text" name="firstName" class="form-control" />
                                                                          <p class="pt-1">Must alphanumeric and contain 5 - 12 character </p>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                              <div class="form-group row">
                                                                                <label class="col-sm-6 col-form-label">Last Name*</label>
                                                                                <div class="col-sm-12">
                                                                                  <input type="text" class="form-control" name="lastName" placeholder="Example: Doe"/>
                                                                                    <p class="pt-1">Must alphanumeric and contain 5 - 12 character </p>

                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                    -->
                                                    <div class="row">

                                                    </div>
                                                    <div class="row">

                                                    </div>
                                                    <!--                      <p class="card-description">Address</p>-->
                                                    <!--
                                                                          <div class="row">
                                                                            <div class="col-md-6">
                                                                              <div class="form-group row">
                                                                                <label class="col-sm-6 col-form-label">Full Address*</label>
                                                                                <div class="col-sm-12">
                                                                                  <input placeholder="complete street address" type="text" class="form-control" />
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                              <div class="form-group row">
                                                                                <label class="col-sm-6 col-form-label">Phone Number*</label>
                                                                                <div class="col-sm-12">
                                                                                  <input type="text" class="form-control" placeholder=""/>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                    -->

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-6 col-form-label">Company
                                                                    Name*</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="companyName form-control"
                                                                           name="companyName"
                                                                           placeholder="Full company name"/>
                                                                    <p class="pt-1">Enter valid Company name </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-6 col-form-label">Company
                                                                    Id*</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="reg form-control"
                                                                           name="companyId" placeholder="company id"/>
                                                                    <p class="pt-1">Enter valid Company name Id </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--
                                                                                <div class="col-md-6">
                                                                                  <div class="form-group row">
                                                                                    <label class="col-sm-6 col-form-label">Confirm Password*</label>
                                                                                    <div class="col-sm-12">
                                                                                      <input type="text" class="form-control" placeholder="Repeat password"/>
                                                                                    </div>
                                                                                  </div>
                                                                                </div>
                                                        -->

                                                        <div class="form-check mx-sm-2">
                                                            <!--
                                                                                    <label class="form-check-label">
                                                                                      <input type="checkbox" class="form-check-input" checked /> Remember me </label>
                                                            -->
                                                        </div>
                                                        <!--                      <button type="submit" class="btn btn-primary mb-2"> Next </button>-->

                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-6 col-form-label">Compnay Email
                                                                    Address*</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="emailAddress form-control"
                                                                           name="emailAddress"
                                                                           placeholder="Full email address"/>
                                                                    <p class="pt-1">Email must be valid e.g
                                                                        me@mydomain.com </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-6 col-form-label">Company Phone
                                                                    Number*</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="companyPhone form-control"
                                                                           name="companyPhone"
                                                                           placeholder="company phone number"/>
                                                                    <p class="pt-1">Number must be valid telephone
                                                                        number </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--
                                                                                <div class="col-md-6">
                                                                                  <div class="form-group row">
                                                                                    <label class="col-sm-6 col-form-label">Password*</label>
                                                                                    <div class="col-sm-12">
                                                                                      <input type="text" class="form-control" placeholder="6 characters at least"/>
                                                                                    </div>
                                                                                  </div>
                                                                                </div>
                                                        -->
                                                    </div>


                                                    <!--
                                                                            <div class="row justify-content-center">
                                                                                <div class="col-md-8">
                                                    -->
                                                    <div class="form-group">
                                                        <label>File upload</label>
                                                        <input id="_uploadFile" type="file" name="img[]"
                                                               class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input type="text" class="form-control file-upload-info"
                                                                   disabled="" placeholder="Upload Image">
                                                            <span class="input-group-append">
                             <div class="fileupload">
                            <button class="file-upload-browse btn btn-danger" type="button"
                                    style="height:50px;width: 100%;">
                                                               <input type="file" id="upload_kyc"/>Upload

                            </button>
                              </div>
                         
                        </span>
                                                        </div>
                                                    </div>
                                                    <!--
                                                                            <div class="fileupload">
                                                      <input type="file" />
                                                      Any content here, perhaps button text
                                                    </div>
                                                    -->
                                                    <!--
                                                                                </div>
                                                                            </div>
                                                    -->
                                                    <!--
                                                                             <p>Custom file:</p>
                                                        <div class="custom-file mb-3">
                                                          <input type="file" class="custom-file-input" id="customFile" name="filename">
                                                          <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    -->
                                                </form>

                                            </div>
                                        </div>
                                        <div class="my-3 mt-5">
                                            <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn"
                                               href="javascript:void(0)" style="width: 50%;margin: auto;padding: 19px;font-size: 15px;" onClick="verificationData();"> Next last</a>
                                        </div>


                                        <!--
                                                        <div class="form-group">
                                                          <label for="exampleInputEmail">Email address</label>
                                                          <div class="input-group">
                                                            <div class="input-group-prepend bg-transparent">
                                                              <span class="input-group-text bg-transparent border-right-0">
                                                                <i class="mdi mdi-email-outline text-primary"></i>
                                                              </span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Enter full email address">
                                                          </div>
                                                        </div>
                                        -->
                                        <!--
                                                        <div class="form-group">
                                                          <label for="exampleInputPassword">Enter Password</label>
                                                          <div class="input-group">
                                                            <div class="input-group-prepend bg-transparent">
                                                              <span class="input-group-text bg-transparent border-right-0">
                                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                                              </span>
                                                            </div>
                                                            <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Enter your Password">
                                                          </div>
                                                        </div>
                                        -->
                                        <!--
                                                        <div class="my-2 d-flex justify-content-between align-items-center">
                                                          <div class="form-check">
                                                            <label class="form-check-label text-muted">
                                                              <input type="checkbox" class="form-check-input">
                                                              Keep me signed in
                                                            </label>
                                                          </div>
                                                          <a href="#" class="auth-link text-black">Forgot password?</a>
                                                        </div>
                                        -->
                                        <!--
                                                        <div class="my-3">
                                                          <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html"> Enter Get Diamonds</a>
                                                        </div>
                                        -->


                                        <!--
                                                        <div class="mb-2 d-flex">
                                                          <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                                                            <i class="mdi mdi-facebook mr-2"></i>Facebook
                                                          </button>
                                                          <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                                                            <i class="mdi mdi-google mr-2"></i>Google
                                                          </button>
                                                        </div>
                                        -->
                                        <!--
                                                        <div class="text-center mt-4 font-weight-light">
                                                          Don't have an account? <a href="register-2.html" class="text-primary">Register now</a>
                                                        </div>
                                        -->
                                        <br/>
                                        <h6 class="font-weight-light"><span>Trade Diamonds</span> is in full compliance
                                            with maximum security protocols in order to make sure your details are
                                            secured and confidential. You can read more on our security and privacy
                                            features, along with more important details regarding our terms of use.</h6>

                                    </form>
                                </div>


                            </div>
                        </div>

                        <!--                end-->


                    </div>
                </div>
                <div class="col-lg-4 login-half-bg d-flex flex-row">
                    <div class="login-details">
                        <div class="welcome"></div>
                        <div class="flex align-centered centered"><img id="myImage" class="image-on-right" src="../../diamand/images/login1.png"></div>
                        <div class="paragraph">In order to maintain the validation of the stock in our system, we have
                            to confirm the availability of the companies we serve to trade diamonds. Only law verified
                            companies will be able to trade in Trade-Diamonds.
                        </div>


                    </div>
                    <!--            <p class="text-white font-weight-medium text-center flex-grow align-self-end">By clicking Next, you agree to our <a href="/terms">Terms and Conditions</a> and <a href="/privacy">Privacy Policy</a>&nbsp; Call for support: 922-110-8664.</p>-->
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- base:js -->
<!--    <script src="../js/validation.js"></script>-->
<script>
    var userName, name, phoneNumber, typeAcc = null, company_email, email, reg, companyName, otp = null;

    function switchVisible() {
        userName = document.getElementsByClassName('userName')[0].value;
        email = document.getElementById('email').value;
        if (document.getElementById('Div1')) {

            if (document.getElementById('Div1').style.display == 'none') {
                document.getElementById('Div1').style.display = 'block';
                document.getElementById('Div2').style.display = 'none';
            } else {
                document.getElementById('def_position').innerHTML = "sending otp....";
                document.getElementsByClassName('subButton')[0].style.display = "none";
                otp = Math.floor((Math.random() * 9999) + 1);
                $.post("../../maindashbord/email.php",
                    {
                        email: email,
                        topic: "OTP",
                        msg: "Your otp for sigin is " + otp
                    },
                    function (data, status) {
                        document.getElementById('Div1').style.display = 'none';
                        document.getElementById('Div2').style.display = 'block';
                        document.getElementById('email_msg').innerHTML = '('+otp + ') OTP has been send to your provided email address <b>' + email + '</b>';
                    });

            }
        }
    }

    function saveData() {
        if (document.getElementById('otp').value == "" || document.getElementById('otp').value != otp) {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
            // alert("Wrong otp");
            return;
        }
        document.getElementById('myImage').src='../../diamand/images/set-sail2.png';
        document.getElementById('btnOtp').style.display = 'none';
        firebase.database().ref("member").orderByChild('email').equalTo(email).on('value', function (snap) {
            if (snap.exists()) {
                snap.forEach(function (returnData) {
                    if (!returnData.val().verified)
                            alert("verification pending from admin please try after 24 hours");
                    else {

                        $.post("../../session.php",
                            {
                                key: returnData.key
                            },
                            function (data, status) {
                                if (data == 1)
                                    window.location.replace("../../secondandlogin/index.php");
                                else
                                    alert("Something went wrong try again later " + status)
                            });
                    }
                });

            } else {
                switchVisible2();
            }
        });
    }

    function saveType() {
        if (document.getElementById('sell').checked)
            typeAcc = "seller";
        else if (document.getElementById('buy').checked)
            typeAcc = "buyer";
        else {
            alert("Please select Account type");
            return;
        }
        switchVisible3();
        document.getElementById('myImage').src = '../../diamand/images/registeres.png'
    }

    function verificationData() {
        reg = document.getElementsByClassName('reg')[0].value;
        company_email = document.getElementsByClassName('email')[0].value;
        companyName = document.getElementsByClassName('companyName')[0].value;
        phoneNumber = document.getElementsByClassName('companyPhone')[0].value;
        if (reg == "" || company_email == "" || companyName == "" && uploadFiles != null) {
            alert("fill company email , register number, company name and provide copy of company kyc");
            return;
        }
        uploadFiles();
    }

    function switchVisible2() {
        if (document.getElementById('Div2')) {

            if (document.getElementById('Div2').style.display == 'none') {
                document.getElementById('Div2').style.display = 'block';
                document.getElementById('Div3').style.display = 'none';
            } else {
                document.getElementById('Div2').style.display = 'none';
                document.getElementById('Div3').style.display = 'block';
            }
        }
    }

    function switchVisible3() {
        if (document.getElementById('Div3')) {

            if (document.getElementById('Div3').style.display == 'none') {
                document.getElementById('Div3').style.display = 'block';
                document.getElementById('Div4').style.display = 'none';
            } else {
                document.getElementById('Div3').style.display = 'none';
                document.getElementById('Div4').style.display = 'block';
            }
        }
    }

    function changeImage() {
        var image = document.getElementById('myImage');
        if (image.src.match("login1.png")) {
            image.src = "../../diamand/images/enter-otp.png";
        } else {
            image.src = "../../diamand/images/login1.png";
        }
    }

    function changeImage1() {
        var image = document.getElementById('myImage');
        if (image.src.match("login1.png")) {
            image.src = "../../diamand/images/enter-otp.png";
        } else {
            image.src = "../../diamand/images/login1.png";
        }
    }


    $(".check-buy").click(function () {
        $("#buy").prop("checked", true);
    });
    $(".check-sel").click(function () {
        $("#sel").prop("checked", true);

    });


</script>
<script src="../../vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../../js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
</body>

</html>
<script type="text/javascript" nonce="8ed45c9c2b994b4db65392ac67b"
        src="//local.adguard.org?ts=1595609627357&amp;type=content-script&amp;dmn=mail-attachment.googleusercontent.com&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1&amp;stealth=1&amp;uag="></script>
<script type="text/javascript" nonce="8ed45c9c2b994b4db65392ac67b"
        src="//local.adguard.org?ts=1595609627357&amp;name=AdGuard%20Popup%20Blocker&amp;name=AdGuard%20Assistant&amp;name=AdGuard%20Extra&amp;type=user-script"></script>
<script type="text/javascript" nonce="16d502d5451346b891c86c80c2a"
        src="//local.adguard.org?ts=1593603268007&amp;type=content-script&amp;dmn=mail-attachment.googleusercontent.com&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1&amp;stealth=1&amp;uag="></script>
<script type="text/javascript" nonce="16d502d5451346b891c86c80c2a"
        src="//local.adguard.org?ts=1593603268007&amp;name=AdGuard%20Popup%20Blocker&amp;name=AdGuard%20Assistant&amp;name=AdGuard%20Extra&amp;type=user-script"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase.js"></script>
<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyDBS7uuDQU9SZ2kwwHPH_4NkkNiuo1LGBo",
        authDomain: "trade-diamonds.firebaseapp.com",
        databaseURL: "https://trade-diamonds.firebaseio.com",
        projectId: "trade-diamonds",
        storageBucket: "trade-diamonds.appspot.com",
        messagingSenderId: "499194145548",
        appId: "1:499194145548:web:44defcbe79adc341dab729",
        measurementId: "G-EP9Z5BG1CG"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    var selectFiles;
    $(document).ready(function () {
        $("#upload_kyc").on("change", function (event) {
            selectFiles = event.target.files[0];
        });
    });

    function uploadFiles() {
        var storageRef = firebase.storage().ref('/KYC image/');
        var uploadTask = storageRef.child(Math.floor((Math.random() * 9999999) + 1) + '.jpg').put(selectFiles);

// Register three observers:
// 1. 'state_changed' observer, called any time the state changes
// 2. Error observer, called on failure
// 3. Completion observer, called on successful completion
        uploadTask.on('state_changed', function (snapshot) {
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
        }, function (error) {
            // Handle unsuccessful uploads
        }, function () {
            // Handle successful uploads on complete
            // For instance, get the download URL: https://firebasestorage.googleapis.com/...
            uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
                console.log('File available at', downloadURL);
                var d = new Date();
                var n = d.getTime();
                firebase.database().ref('member/' + n).set({
                    name: userName,
                    email: email,
                    companyId: reg,
                    account: typeAcc,
                    company_kyc: downloadURL,
                    verified: false,
                    phoneNumber: phoneNumber
                });
            });
        });
    }


</script>