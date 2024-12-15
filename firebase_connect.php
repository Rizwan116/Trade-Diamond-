<?php  ob_start();session_start();?>
<html lang="en">
<head>
<script type="text/javascript" nonce="16d502d5451346b891c86c80c2a" src="//local.adguard.org?ts=1593603268007&amp;type=content-script&amp;dmn=mail-attachment.googleusercontent.com&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1&amp;stealth=1&amp;uag="></script>
<script type="text/javascript" nonce="16d502d5451346b891c86c80c2a" src="//local.adguard.org?ts=1593603268007&amp;name=AdGuard%20Popup%20Blocker&amp;name=AdGuard%20Assistant&amp;name=AdGuard%20Extra&amp;type=user-script"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
  var myJsonArray = '{"employees":[   {"name":"Shyam", "email":"shyamjaiswal@gmail.com"},   {"name":"Bob", "email":"bob32@gmail.com"},  {"name":"Jai", "email":"jai87@gmail.com"}]}';

  let myExcelXML = (function() {
      let Workbook, WorkbookStart = '<?xml version="1.0"?><ss:Workbook  xmlns="urn:schemas-microsoft-com:office:spreadsheet" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet" xmlns:html="http://www.w3.org/TR/REC-html40">';
      const WorkbookEnd = '</ss:Workbook>';
      let fs, SheetName = 'SHEET 1',
          styleID = 1, columnWidth = 80,
          fileName = "Employee_List", uri, link;

      class myExcelXML {
          constructor(o) {
              let respArray = JSON.parse(o);
              let finalDataArray = [];

              for (let i = 0; i < respArray.length; i++) {
                  finalDataArray.push(flatten(respArray[i]));
              }

              let s = JSON.stringify(finalDataArray);
              fs = s.replace(/&/gi, '&amp;');
          }

          downLoad() {
              const Worksheet = myXMLWorkSheet(SheetName, fs);

              WorkbookStart += myXMLStyles(styleID);

              Workbook = WorkbookStart + Worksheet + WorkbookEnd;

              uri = 'data:text/xls;charset=utf-8,' + encodeURIComponent(Workbook);
              link = document.createElement("a");
              link.href = uri;
              link.style = "visibility:hidden";
              link.download = fileName + ".xls";
              console.log(link);
              document.body.appendChild(link);
              link.click();
              document.body.removeChild(link);
          }

          get fileName() {
              return fileName;
          }

          set fileName(n) {
              fileName = n;
          }

          get SheetName() {
              return SheetName;
          }

          set SheetName(n) {
              SheetName = n;
          }

          get styleID() {
              return styleID;
          }

          set styleID(n) {
              styleID = n;
          }
      }

      const myXMLStyles = function(id) {
          let Styles = '<ss:Styles><ss:Style ss:ID="' + id + '"><ss:Font ss:Bold="1"/></ss:Style></ss:Styles>';

          return Styles;
      }

      const myXMLWorkSheet = function(name, o) {
          const Table = myXMLTable(o);
          let WorksheetStart = '<ss:Worksheet ss:Name="' + name + '">';
          const WorksheetEnd = '</ss:Worksheet>';

          return WorksheetStart + Table + WorksheetEnd;
      }

      const myXMLTable = function(o) {
          let TableStart = '<ss:Table>';
          const TableEnd = '</ss:Table>';

          const tableData = JSON.parse(o);

          if (tableData.length > 0) {
              const columnHeader = Object.keys(tableData[0]);
              let rowData;
              for (let i = 0; i < columnHeader.length; i++) {
                  TableStart += myXMLColumn(columnWidth);

              }
              for (let j = 0; j < tableData.length; j++) {
                  rowData += myXMLRow(tableData[j], columnHeader);
              }
              TableStart += myXMLHead(1, columnHeader);
              TableStart += rowData;
          }

          return TableStart + TableEnd;
      }

      const myXMLColumn = function(w) {
          return '<ss:Column ss:AutoFitWidth="0" ss:Width="' + w + '"/>';
      }


      const myXMLHead = function(id, h) {
          let HeadStart = '<ss:Row ss:StyleID="' + id + '">';
          const HeadEnd = '</ss:Row>';

          for (let i = 0; i < h.length; i++) {
              const Cell = myXMLCell(h[i].toUpperCase());
              HeadStart += Cell;
          }

          return HeadStart + HeadEnd;
      }

      const myXMLRow = function(r, h) {
          let RowStart = '<ss:Row>';
          const RowEnd = '</ss:Row>';
          for (let i = 0; i < h.length; i++) {
              const Cell = myXMLCell(r[h[i]]);
              RowStart += Cell;
          }

          return RowStart + RowEnd;
      }

      const myXMLCell = function(n) {
          let CellStart = '<ss:Cell>';
          const CellEnd = '</ss:Cell>';

          const Data = myXMLData(n);
          CellStart += Data;

          return CellStart + CellEnd;
      }

      const myXMLData = function(d) {
          let DataStart = '<ss:Data ss:Type="String">';
          const DataEnd = '</ss:Data>';

          return DataStart + d + DataEnd;
      }

      const flatten = function(obj) {
          var obj1 = JSON.parse(JSON.stringify(obj));
          const obj2 = JSON.parse(JSON.stringify(obj));
          if (typeof obj === 'object') {
              for (var k1 in obj2) {
                  if (obj2.hasOwnProperty(k1)) {
                      if (typeof obj2[k1] === 'object' && obj2[k1] !== null) {
                          delete obj1[k1]
                          for (var k2 in obj2[k1]) {
                              if (obj2[k1].hasOwnProperty(k2)) {
                                  obj1[k1 + '-' + k2] = obj2[k1][k2];
                              }
                          }
                      }
                  }
              }
              var hasObject = false;
              for (var key in obj1) {
                  if (obj1.hasOwnProperty(key)) {
                      if (typeof obj1[key] === 'object' && obj1[key] !== null) {
                          hasObject = true;
                      }
                  }
              }
              if (hasObject) {
                  return flatten(obj1);
              } else {
                  return obj1;
              }
          } else {
              return obj1;
          }
      }

      return myExcelXML;
  })();

  function exportToCV() {

      // jsonObj = [];
      //
      //     var id = "wowid";
      //     var email = "wowEmail";
      //
      //     item = {}
      //     item ["title"] = id;
      //     item ["email"] = email;
      //
      //     jsonObj.push(item);

      console.log(overallJson);

      var myTestXML = new myExcelXML(JSON.stringify(overallJson));
      myTestXML.downLoad();
  }
</script>
</head>

<style>

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: FIXED; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: auto; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    /* The Close Button */
    .closeTab {
        color: black;
        float: right;
        font-size: 28px;
        font-weight: bold;
        margin-right:30px;
    }

    .closeTab:hover,
    .closeTab:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-content {
        width: 80%;
        height:100%;
    }
</style>

</html>