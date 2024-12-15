<?php include('../../firebase_connect.php'); 


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Trade Diamond Login</title>
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
  <link rel="shortcut icon" href="../../diamand/images/dimamondfav.png" />
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
    
    </style>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
            
          <div class="col-lg-8 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo"style="padding: 15px 0px 15px 0px;">
                <img src="../../diamand/images/icon2.png" alt="logo" style="height: 60px;width: 220px;">
<!--
                    <img src="../../../diamand/images/India%20Flag%2080-80.jpg" alt="" class="img-circle" style="
    margin-right: 10px;
    max-width: 39px;
">
-->
              </div>
                
            
                
                
                
                <div id="Div1">
                  <h2 style="text-align: center">Login To Trade Diamonds</h2>
                
                    <!--  <hr style="height:2px;border-width:0;color:gray;background-color:gray">-->

                
                
              <form class="pt-3">
              <div class="form-group">
                  <label for="#">Full Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account text-danger"></i>
                      </span>
                    </div>
                    <input type="text" class="userName form-control form-control-lg border-left-0" id="#" placeholder="Enter your full name"  name="userName">
                        <p class="pt-1">Your name must alphanumeric and contain 5 - 16 character </p>

                  </div>
                </div>
                   <!--div class="form-group">
                  <label for="#">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email text-danger"></i>
                      </span>
                    </div>
                    <input type="text" class="email form-control form-control-lg border-left-0" id="#" placeholder="Enter your email address" name="userName">
                            <p class="pt-1">Your name must alphanumeric and contain 5 - 16 character </p>

                  </div>
                </div-->
                <div class="form-group">
                  <label for="exampleInputPassword">Enter Number</label>
                    
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-phone text-danger"></i>
                      </span>
                    </div>
                      
                      <input id="#" type="text" class="phoneNumber form-control bfh-phone  form-control-lg border-left-0" data-format="+91 (ddd) ddd-dddd" placeholder="Enter your Number" data-country="countries_phone1" name="phoneNumber">
                            <p class="pt-1">Number must be valid Ind telephone number (10 digit) </p>

                      <!--   <input type="number" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Enter your Number">                        -->
                  </div>
                </div>
                    <p style="text-align: center;">OTP will sent you on your provided number</p>
                <div class="my-2 d-flex justify-content-between align-items-center">
                    
                    <div class="form-check">
<!--
                            <label class="form-check-label text-muted" style="font-size: 13px;">
                              <input type="checkbox" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="" >Keep me signed in
                            <i class="input-helper"></i></label>
-->
                          </div>
                 
                  <a href="#" class="auth-link text-black">Forget Number?</a>
                </div>
                <div class="my-3">
<!--                    href="../../secondandlogin/index.html"-->
                  <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn"  onclick="switchVisible();document.getElementById('myImage').src='../../diamand/images/enter-otp.png'" style="color: white;"> Next</a>
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
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="#" class="text-danger">Register now</a>
                </div>
                  <br/>
                                <h6 class="font-weight-light"><span>Trade Diamonds</span> is in full compliance with maximum security protocols in order to make sure your details are secured and confidential. You can read more on our security and privacy features, along with more important details regarding our terms of use.</h6>

              </form>
                </div>
                  <div id="account_type" style="display:none;">
			                  <h2 style="text-align: center; margin-top: 25px;">Select Account type</h2>
							  <div style="width:100%;height:200px;">
							  <div style="width:135px;float:right;">
			 <Img src="../../diamand/images/asbuys.png?x=1" height ="130px"  id="x1" onclick="accountType('buyer')"/></div>
			 							  <div style="width:140px;">
			 <Img src="../../diamand/images/asbuys.png?x=1" height ="130px" id="y1" onclick="accountType('seller')"/></div>
			 							  </div>
										  <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" onclick="showForm();" style="color: white;"> Next</a>
			 </div>
			  <div id="kyc_form" style="display:none;">
			   <h2 style="text-align: center; margin-top: 25px;">Enter more info</h2>
							 <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-message text-danger"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="email" placeholder="Enter email" name="enterEmail">
                            <p class="pt-1">Ydef</p>         

                  </div> <br/>
				  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-message text-danger"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="reg" placeholder="Registeration id" name="registeration">
                            <p class="pt-1">kyc form</p>         

                  </div>
				  <br/>
           <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" onclick="showKyc();" style="color: white;"> Next</a>

			  </div>
            <div id="Div2" style=" height: auto">
			
                
                   <a  style="text-decoration: none; color: black"><img src="../images/arrow-left-circle.png" style="height: 23px" onclick="switchVisible(); document.getElementById('myImage').src='../../diamand/images/login1.png'">&nbsp; &nbsp;Go Back</a>
                
                
<!--                href="registertype.html"-->
             
                    
                
                 <h2 style="text-align: center; margin-top: 25px;">Enter OTP</h2>
                
<!--                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">-->

                
                
              <form  id="pt-3" class="pt-3">
                 <div class="form-group" style="
    margin-top: 35px;">
<!--                  <label for="exampleInputEmail">Email address</label>-->
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-message text-danger"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Enter otp" name="enterOtp">
                            <p class="pt-1">You have only 60 seconds to enter otp (must be valid otp)</p>         

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
                  <a href="#" class="auth-link text-black">Did't get otp?</a>
                </div>
                <div class="my-3">
<!--                    href="../../secondandlogin/index.html"-->
                  <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" onClick="saveData()" href="#"> Enter Trade Diamonds</a>
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
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="#" class="text-danger">Register now</a>
                </div>
                  <br/>
                                <h6 class="font-weight-light"><span style="color:red;">Trade Diamonds</span> is in full compliance with maximum security protocols in order to make sure your details are secured and confidential. You can read more on our security and privacy features, along with more important details regarding our terms of use.<div>By clicking Next, you agree to our <a href="/terms">Terms and Conditions</a> and <a href="/privacy">Privacy Policy</a>.</div></h6>

              </form>
                
                
                </div>
                
            </div>
          </div>
		           <div id="Div3" style="width: 590px;">
                      <a  style="text-decoration: none; color: black"><img src="../images/arrow-left-circle.png" style="height: 23px" onclick="switchVisible2(); document.getElementById('myImage').src='../../diamand/images/enter-otp.png'">&nbsp; &nbsp;Go Back</a>
                     <h2 style="text-align: center">Please choose an accout type</h2>
                 <br>
                  <br>
                  <br>
                
<!--                <hr style="height:2px;border-width:0;color:gray;background-color:gray">-->

                
                
             <div >
                 <form class="pt-5">
             
                 <div class="row">
                  
                   <div id="firstID" style="background: #e2e2e2;height: 240px; /*border: 2px solid red;*/border-radius: 8px 8px 8px 8px;    margin: 0px 0px 0px 22px;
;" class="col-lg-5 clickable">
                  
                   <div class="self">
                        <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                              Buyer Account
                            <i class="input-helper"></i></label>
                            
                            
                            
                          </div>
                       
<div class="help">
                                             <img src="../../diamand/images/asbuys.png" style="height: 182px;">
 
                       </div>                       
                       
                       <div class="para" style="max-width: 90%;font-size: 14px;margin: 15px auto;">
                           <p>Search, add to your wishlist and bid on any diamond.</p>
                       </div>
                       
                       </div>
                       
                  </div>
                  
                   <div id="secondID" style="background: #e2e2e2;height: 240px;
                                             /*border: 2px solid red;*/border-radius: 8px 8px 8px 8px;margin-left: 60px;"  class="col-lg-5 clickable">
                       
                       
                       
                         <div class="self">
                        <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                              Buyer seller Account
                            <i class="input-helper"></i></label>
                          </div>
                       
<div class="help">
                                             <img src="../../diamand/images/registertype.png">
 
                       </div>                       
                       
                       <div class="para" style="max-width: 90%;font-size: 14px;margin: 31px  auto;">
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
                  <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" href="newregister-2.php" style="width: 60%; margin: 35px auto;"> Next</a>
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

              </form>
                
                </div>
                
                
                
                
                
                </div>
          <div class="col-lg-4 login-half-bg d-flex flex-row">
                <div class="login-details"><div class="welcome"></div><div class="flex align-centered centered"><img id="myImage" class="image-on-right" src="../../diamand/images/login1.png"></div><div class="paragraph">In order to maintain the validation of the stock in our system, we have to confirm the availability of the companies we serve to trade diamonds. Only law verified companies will be able to trade in Trade-Diamonds.</div>
              
              
              
           
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
        <script src="../js/validation.js"></script>
 
    <script>
        var userName,name,phoneNumber,typeAcc = null,email,reg;
    function switchVisible() {
          userName = document.getElementsByClassName('userName')[0].value;
         phoneNumber = document.getElementsByClassName('phoneNumber')[0].value;
		 if(!phoneNumber.startsWith("+"))
			 phoneNumber = "+91" + phoneNumber;
            if (document.getElementById('Div1')) {

                if (document.getElementById('Div1').style.display == 'none') {
                    document.getElementById('Div1').style.display = 'block';
                    document.getElementById('Div2').style.display = 'none';
                }
                else {
                    document.getElementById('Div1').style.display = 'none';
                    document.getElementById('Div2').style.display = 'block';
                }
            }
}
         function saveData() {
			 
			         firebase.database().ref("member").orderByChild('phoneNumber').equalTo(phoneNumber).on('value', function(snap){
						   if (snap.exists()){
							   					 snap.forEach(function(returnData) {
									if(!returnData.val().verified)
								alert("verification pending for " + phoneNumber);
							   else{
								   
								     $.post("../../session.php",
  {
    key: returnData.key
  },
  function(data, status){
	  if(data ==1)
            window.location.replace("../../secondandlogin/index.php");
		else
		   alert("Something went wrong try again later " + status)
  });
							   }
    });
							   
						   }else{
							   $('#pt-3').hide();
							   $('#account_type').show();
						   }
});
			 
			 
 /*         var d = new Date();
        var n = d.getTime();
             saveDataToFireBase(n,userName,phoneNumber);

        }
         function saveDataToFireBase(userId, name, phoneNumber) {
          firebase.database().ref('member/' + userId).set({
            name: name,
            verified:false,
            phoneNumber: phoneNumber
          });
             setTimeout(
    function() {
        window.location.replace("newregister-2.php");
    }, 2000);*/
           
  }
function showKyc(){
	email = $("#email").val();
         reg = $("#reg").val();
		  var d = new Date();
        var n = d.getTime();
		              saveDataToFireBase(n,userName,phoneNumber);
		 function saveDataToFireBase(userId, name, phoneNumber) {
          firebase.database().ref('member/' + userId).set({
            email: email,
            compRegId: reg,
            name: name,
            account: typeAcc,
            verified:false,
            phoneNumber: phoneNumber
          });
		 }
}
function showForm(){
			$("#kyc_form").show();
			$("#Div3").hide();
			$("#account_type").hide();
}
function accountType(type){
	typeAcc = type;
	if(type == "seller"){
		$("#y1").css("background", "#000000");
		$("#x1").css("background", "#ffffff");
	}else{
		$("#x1").css("background", "#000000");
		$("#y1").css("background", "#ffffff");
	}
}	
         function switchVisible2(x) {
			 if(x ==0)
				 $("#Div2").hide();
				 $("#Div3").show();
                }
    
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
