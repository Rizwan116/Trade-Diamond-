<!DOCTYPE html>
<?php include('common_header.php'); ?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trade Diamond Search</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!--
      <link rel="stylesheet" href="../secondandlogin/vendors/select2/select2.min.css">
      <link rel="stylesheet" href="../secondandlogin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../diamand/images/dimamondfav.png"/>
</head>

<style>
    /* [1] The container */
    .hover-zoom {
        /* [1.1] Set it as per your need */
        /* [1.2] Hide the overflowing of child elements */
    }


    /* [2] Transition property for smooth transformation of images */
    .hover-zoom img {
        transition: transform .5s ease;
    }

    /* [3] Finally, transforming the image when container gets hovered */
    .hover-zoom:hover img {
        transform: scale(1.15);
        transition: .2s ease-in;
    }

    .inp {
        letter-spacing: 0.3px;
        color: #131313;
    }

    .cardView {
        display: inline;
        float: left;
        margin: 4px;
        background: white;
        width: 200px;
        height: auto;;
        box-shadow: 0 2px 4px 0 rgba(185, 185, 185, 0.5);
        -webkit-box-shadow: 0 2px 4px 0 rgba(185, 185, 185, 0.5);
        -moz-box-shadow: 0 2px 4px 0 rgba(185, 185, 185, 0.5);
        -ms-box-shadow: 0 2px 4px 0 rgba(185, 185, 185, 0.5);
        border-radius: 6px;
        border: none
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

    <!-- partial:partials/_horizontal-navbar.html -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel" style="
    background-image: linear-gradient(hsla(0, 0%, 92%, 0.61),hsla(0,0%,100%,.6)),url(../diamand/images/landing-background.png);
    background-position: top;
    background-color: hsla(0,0%,100%,.9);
    ">
            <div class="content-wrapper">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div style="/*padding: 35px*/">
                                    <h3 id="_intro" class="text-info font-weight-bold mt-2">Hi, welcome back!</h3>
                                    <h2 class="text-dark font-weight-bold">Search, buy and trade natural diamonds</h2>
                                    <h5 class="font-weight-normal mb-2">Get Diamonds is the industrys polished diamonds
                                        search platform</h5>


                                    <!--
                                                                       <div class="pt-5">
                                                                         <button type="button" class="btn btn-lg btn-primary">Search Diamonds</button>
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

                                <div class="pr-1 mb-3 mb-xl-0">

                                    <a href="../maindashbord/diamond.php">
                                        <button type="button" class="btn btn-outline-inverse-info btn-icon-text" data-toggle="tooltip"
                                                data-placement="bottom" title="Add New diamond to your profile">
                                            Add Diamonds
                                            <i class="mdi mdi-plus-circle"></i>
                                        </button>
                                    </a>
                                </div>
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

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="
    max-width: 800px;
">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Diamond</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="padding: 1.6em;">
                                        <div class="row" style="
    background:#f8f9fb;
    padding: 10px;
">

                                            <div class="col-lg-2 mb-2">
                                                <img src="../diamand/upload/testimonial_01.png">
                                            </div>
                                            <div class="mt-1 col-lg-8">
                                                <h3>Diamond Name</h3>
                                                <p>Thats the type of diamond</p>
                                                <div class="template-demo">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary"> 1</button>
                                                        <button type="button" class="btn btn-primary"> 2</button>
                                                        <button type="button" class="btn btn-primary"> 3</button>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="mdi mdi-heart-outline"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="mdi mdi-calendar"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="mdi mdi-clock"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-2">
                                                <button type="button" class="btn btn-danger btn-rounded btn-fw"> Add
                                                </button>
                                            </div>


                                        </div>
                                        <div class="row" style="
    background: #eeeeee;
    padding: 10px;
">

                                            <div class="col-lg-2 mb-2">
                                                <img src="../diamand/upload/testimonial_01.png">
                                            </div>
                                            <div class="mt-1 col-lg-8">
                                                <h3>Diamond Name</h3>
                                                <p>Thats the type of diamond</p>
                                                <div class="template-demo">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary"> 1</button>
                                                        <button type="button" class="btn btn-primary"> 2</button>
                                                        <button type="button" class="btn btn-primary"> 3</button>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="mdi mdi-heart-outline"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="mdi mdi-calendar"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="mdi mdi-clock"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-2">
                                                <button type="button" class="btn btn-danger btn-rounded btn-fw"> Add
                                                </button>
                                            </div>


                                        </div>
                                        <div class="row" style="
    background:#f8f9fb;
    padding: 10px;
">

                                            <div class="col-lg-2 mb-2">
                                                <img src="../diamand/upload/testimonial_01.png">
                                            </div>
                                            <div class="mt-1 col-lg-8">
                                                <h3>Diamond Name</h3>
                                                <p>Thats the type of diamond</p>
                                                <div class="template-demo">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary"> 1</button>
                                                        <button type="button" class="btn btn-primary"> 2</button>
                                                        <button type="button" class="btn btn-primary"> 3</button>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="mdi mdi-heart-outline"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="mdi mdi-calendar"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="mdi mdi-clock"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-2">
                                                <button type="button" class="btn btn-danger btn-rounded btn-fw"> Add
                                                </button>
                                            </div>


                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--fall down                    -->
                <div id="settings-trigger" style=" position: fixed;
    bottom: 40px;
    right: 30px;
    height: 45px;
    width: 110px;
    background: #ee6465;
    z-index: 99;
    -webkit-box-shadow: 0px 0px 31px 6px rgba(0, 0, 0, 0.17);
    box-shadow: 0px 0px 31px 6px rgba(0, 0, 0, 0.17);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 8%;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;">

                    <i class="#" style="color: #ffffff;font-size: 1rem;line-height: 1rem;cursor: pointer;"
                       onClick="search_diamond()">Quick Search</i></div>


                <div class="container mt-5">

<!--                    <div class="row">-->
<!--                        <div class="col-sm-8">-->
<!--                            <div class="btn-group" role="group" aria-label="Basic example">-->
<!--                                <button type="button" class="btn btn-outline-secondary btn-danger">Single</button>-->
<!--                                <button type="button" class="btn btn-outline-secondary btn-danger">Precels</button>-->
<!--                                <button type="button" class="btn btn-outline-secondary btn-danger">Pairs</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-sm-4">-->
<!---->
<!--                            <div class="btn-group" role="group" aria-label="Basic example">-->
<!--                                <button type="button" class="btn btn-outline-secondary btn-danger btn-md">Last-->
<!--                                    Search(10)-->
<!--                                </button>-->
<!--                                <button type="button" class="btn btn-outline-secondary btn-danger">Search by free text-->
<!--                                </button>-->
<!--                                <button type="button" class="btn btn-outline-secondary btn-danger">Clear</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->


                </div>
                <span id="diamond_type" class="card-body"></span>
                <?php $_GET['u'] = "2";
                include('../maindashbord/include_search_add.php'); ?>
                <center>
                    <Button value="search" onclick="search_diamond()" style="
    height: 45px;
	color:white;
	border:none;
    width: 210px;
    background: #ee6465;
    z-index: 99;
    -webkit-box-shadow: 0px 0px 31px 6px rgba(0, 0, 0, 0.17);
    box-shadow: 0px 0px 31px 6px rgba(0, 0, 0, 0.17);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 8%;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both">Search Diamond
                    </Button>
                </center>
                <div id="snackbar">Select any one of them</div>

                <br/>
                <br/>
                <div class="container" id="result_diamond">

                </div>
            </div>
        </div>


    </div>

</div>

<?php include('../diamand/footer.php'); ?>


<!--        i added this div for bug-->
<!--      </div>-->

<!-- container-scroller -->
<!-- base:js -->
<script>
    $('#myModal3').on('shown.bs.modal', function () {
        $('#myInput3').trigger('focus')
    })
    var docData = [];

    function search_diamond() {
        docData = [];
        if (Object.keys(collectObj).length == 0) {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);        } else {
            $("#result_diamond").html("");
            var search = db.collection("diamond");
            for (var key in collectObj) {
                search = search.where(key, '==', collectObj[key]);
            }
            search.get()
                .then(function (querySnapshot) {
                    var m = 0;
                    querySnapshot.forEach(function (doc) {
                        docData.push(doc);
                        var refData = '<div class="cardView" ><inpu type="hidden" value=""><img src="' + doc.data().image_url + '" onClick=popupDisplay("' + m + '") width="200px" height="200px"/><br/>&nbsp;&nbsp;' + doc.id + "" + '<i class="mdi mdi mdi-cart" onclick=saveToCart("' + doc.id + '") style="font-size: 24px;float:right;margin-right:5px;"></i><br/><span>&nbsp;&nbsp;&nbsp;&nbsp;' + doc.data().type + '</span></div>';
                        $("#result_diamond").append(refData);
                        m++;
                    });
                    $('html, body').animate({
                        scrollTop: $("#result_diamond").offset().top
                    }, "slow");
                })
                .catch(function (error) {
                    alert("Error getting documents: ", error);
                });
        }
    }

    function saveToCart(m) {
        var n = new Date().getTime();
        firebase.database().ref('cart').child(<?php echo $userId ?>).update({
            [m]: "" + n
        });
    }

    // function popupDisplay(m) {
    //     var colorBack = false;
    //     $("#dimaond_desciption").html("");
    //     var modal = document.getElementById("myModal");
    //     modal.style.display = "block";
    //     var d_data = docData[m].data();
    //     var allHtml = "";
    //     for (var key in d_data) {
    //         var sctual_key = key + "";
    //         if (sctual_key != 'owner' && sctual_key != 'image_url') {
    //             var lableColor = "#c0c0c0";
    //             if (colorBack)
    //                 lableColor = "#ffffff";
    //             allHtml = allHtml + "<p style='color:black;padding:3px; background:" + lableColor + "'><b>" + key + "</b> :- " + d_data[key] + "</p>";
    //             colorBack = !colorBack;
    //         }
    //     }
    //     firebase.database().ref("member").child(docData[m].data().owner + "").once("value", function (snap) {
    //         console.log(snap.val());
    //         var extraDivInfo = "<div style='width:auto;height:200px;margin-left:220px;color:black;'><center><p>Supplier information</p></center>Company Name:- <i>" +
    //             snap.val().companyName + "</i><br/> Contact number:- <i>" +
    //             snap.val().phoneNumber + "</i><br/><a href='supply.php?u=" + docData[m].data().owner + "'>View suppliers page</a></div>";
    //         $("#dimaond_desciption").html("<img src='" + docData[m].data().image_url + "' style='float:left;display:inline;' width='200px' height='200px'>" + extraDivInfo + "<br/><br/>" + allHtml);
    //     });
    // }
    //
    // function closePopup() {
    //     $("#myModal").hide();
    // }

    function formatTime(timeCreated) {
        var diff = Date.now() - timeCreated;

        if (diff > periods.month) {
            // it was at least a month ago
            return Math.floor(diff / periods.month) + "m";
        } else if (diff > periods.week) {
            return Math.floor(diff / periods.week) + "w";
        } else if (diff > periods.day) {
            return Math.floor(diff / periods.day) + "d";
        } else if (diff > periods.hour) {
            return Math.floor(diff / periods.hour) + "h";
        } else if (diff > periods.minute) {
            return Math.floor(diff / periods.minute) + "m";
        }
        return "Just now";
    }
</script>
<?php include_once("../CommonFile.php") ?>
<script src="vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/template.js"></script>


<!--

      <script src="../secondandlogin/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../secondandlogin/vendors/select2/select2.min.js"></script>
      

      <script src="../secondandlogin/js/typeahead.js"></script>
  <script src="../secondandlogin/js/select2.js"></script>
-->

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