<?php $u = $_GET["u"];
?>
<style>
    .select_field:hover {
        background-color: #e54b3d;
        color: white;
    }

    .select_field {
        height: auto;
        width: auto;
        padding: 5px;
        display: inline-block;
        margin: 2px;
        background-color: #ddd;
        cursor: pointer;
    }
</style>
<script>
    var ex = <?php echo $u ?>;
    var userId = <?php echo $userId ?>;
    var collectObj = {};

    function clearData(y) {
        delete collectObj[y];
        $("._selected_field" + y).css("background-color", "#ddd");
        $("._selected_field" + y).css("color", "#6c7293");
    }

    var ref = firebase.database().ref();
    var db = firebase.firestore();

    function captureTask(x, y) {
        if (y in collectObj) {
            $("._selected_field" + y).css("background-color", "#ddd");
            $("._selected_field" + y).css("color", "#6c7293");
        }
        collectObj[y] = document.getElementById("_selected_field" + x).innerHTML;
        $("#_selected_field" + x).css("background-color", "#e54b3d");
        $("#_selected_field" + x).css("color", "white");
    }

    ref.child("diamonds").on("value", function (snapshot) {


        snapshot.forEach((child) => {
            var firstObj = child.val();
            var clearObj = 'clearData("' + child.key + '")';
            var div = "<div class='container'><div class='row'><div class='col-lg-12 grid-margin stretch-card'><div class='card'><div class='card-body'><div class='row'><div class='col-sm-12 mb-4 mb-xl-0'><div class='d-lg-flex align-items-center'><div class='col-sm-12'><div class=''><div class='pr-1 mb-3 mb-xl-0'><button type='button' class='btn btn-secondary  btn-icon-text' onclick='" + clearObj + "' style='float:right;display-inline;'><i class='mdi mdi-playlist-plus btn-icon-prepend'></i>Clear</button><div class='row mt-2'><div class='col-lg-12 inp'><div class='template-demo'><div class='#' role='group' aria-label='Basic example'><div style=' height:auto; width:100%;padding:10px;background:white;'><b class='text-dark font-weight-bold mb-2'>" + child.key + "</b><br/><br/>";
            for (var key in firstObj) {
                if (ex == 2 || (ex == 1 && key != "recently uploaded"))
                    div = populateArray(key, child.key, div, firstObj);
            }
            div = div + "</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><br/>";
            $("#diamond_type").append(div);


        });

    }, function (error) {
        alert("Error: " + error.code);
    });

    function isObject(value) {
        return value && typeof value === 'object' && value.constructor === Object;
    }


    function populateArray(key, childKey, div, firstObj) {
        var x = key.replaceAll("_", ".");
        var f = childKey;
        var m = firstObj[key] + ",'" + f + "'";
        var click = 'onClick=captureTask(' + m + ')';
        div = div + '<div class="select_field _selected_field' + f + ' " id="_selected_field' + firstObj[key] + '"  ' + click + ' >';
        div = div + x + '</div> ';
        //}
        return div;
    }

    String.prototype.replaceAll = function (stringToFind, stringToReplace) {
        if (stringToFind === stringToReplace) return this;
        var temp = this;
        var index = temp.indexOf(stringToFind);
        while (index != -1) {
            temp = temp.replace(stringToFind, stringToReplace);
            index = temp.indexOf(stringToFind);
        }
        return temp;
    };

    function saaveDiamondObj() {
        if (selectFiles == null) {
            alert("Select Image of Diamond");
        } else if (Object.keys(collectObj).length == 0) {
            alert("please select the details of Diamond");
        } else {
            uploadFiles();
        }
    }

    var selectFiles;
    $(document).ready(function () {
        $("#_uploadFile").on("change", function (event) {
            selectFiles = event.target.files[0];
        });
    });

    function uploadFiles() {
        var d = new Date();
        var uniqueId = d.getTime();
        var storageRef = firebase.storage().ref('/diamond/');
        var uploadTask = storageRef.child(uniqueId + '.jpg').put(selectFiles);

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
                alert('File available at' + downloadURL);
                collectObj["image_url"] = downloadURL;
                collectObj["owner"] = userId;
                var d = new Date();
                var updateObj = {};
                updateObj[uniqueId] = uniqueId;
                firebase.database().ref('member/' + userId + "/diamond").update(updateObj);
                db.collection("diamond").doc(uniqueId + "").set(collectObj)
                    .then(function () {
                        console.log("Doc successful");
                    })
                    .catch(function (error) {
                        console.error("Error writing doc", error);
                    });
            });
        });
    }

    var ref = firebase.database().ref();

    function captureTask(x, y) {
        if (y in collectObj) {
            $("._selected_field" + y).css("background-color", "#ddd");
            $("._selected_field" + y).css("color", "#6c7293");
        }
        collectObj[y] = document.getElementById("_selected_field" + x).innerHTML;
        $("#_selected_field" + x).css("background-color", "#e54b3d");
        $("#_selected_field" + x).css("color", "white");
    }

    function populateArray(key, childKey, div, firstObj) {
        var x = key.replaceAll("_", ".");
        var f = childKey;
        var m = firstObj[key] + ",'" + f + "'";
        var click = 'onClick=captureTask(' + m + ')';
        div = div + '<div style="height: 42px;padding: 11px;" class="select_field mb-2 btn _selected_field' + f + '" id="_selected_field' + firstObj[key] + '"  ' + click + ' >';
        div = div + x + '</div> ';
        return div;
    }

    String.prototype.replaceAll = function (stringToFind, stringToReplace) {
        if (stringToFind === stringToReplace) return this;
        var temp = this;
        var index = temp.indexOf(stringToFind);
        while (index != -1) {
            temp = temp.replace(stringToFind, stringToReplace);
            index = temp.indexOf(stringToFind);
        }
        return temp;
    };
</script>