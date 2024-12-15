<head>
     <script>
         function popupDisplay(m) {
             var colorBack = false;
             $("#dimaond_desciption").html("");
             var modal = document.getElementById("myModal");
             modal.style.display = "block";
             var d_data = docData[m].data();
             var allHtml = "";
             for (var key in d_data) {
                 var sctual_key = key + "";
                 if (sctual_key != 'owner' && sctual_key != 'image_url') {
                     var lableColor = "#c0c0c0";
                     if (colorBack)
                         lableColor = "#ffffff";
                     allHtml = allHtml + "<p style='color:black;padding:3px; background:" + lableColor + "'><b>" + key + "</b> :- " + d_data[key] + "</p>";
                     colorBack = !colorBack;
                 }
             }
             firebase.database().ref("member").child(docData[m].data().owner + "").once("value", function (snap) {
                 console.log(snap.val());
                 var extraDivInfo = "<div style='width:auto;height:200px;margin-left:220px;color:black;'><center><p>Supplier information</p></center>Company Name:- <i>" +
                     snap.val().companyName + "</i><br/> Contact number:- <i>" +
                     snap.val().phoneNumber + "</i><br/><a href='supply.php?u=" + docData[m].data().owner + "'>View suppliers page</a></div>";
                 $("#dimaond_desciption").html("<img src='" + docData[m].data().image_url + "' style='float:left;display:inline;' width='200px' height='200px'>" + extraDivInfo + "<br/><br/>" + allHtml);
             });
         }

         function closePopup() {
             $("#myModal").hide();
         }
     </script>
</head>
<div id="myModal" class="modal" >
    <span class="closeTab" onClick="closePopup()">&times;</span>

    <!-- Modal content -->
    <div class="modal-content" style="overflow:auto;width:80%;margin: auto;height:90%;">
        <p id="dimaond_desciption" style="padding:10px;"></p>
    </div>

</div>