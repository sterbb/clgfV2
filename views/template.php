<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLGF</title>
    <link rel="icon" href="views/img/logo_crown.png" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- End fonts -->

        <!-- core:css -->
        <link rel="stylesheet" href="views/assets/vendors/core/core.css">
        <!-- endinject -->

        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="views/assets/vendors/select2/select2.min.css">
        <link rel="stylesheet" href="views/assets/vendors/jquery-tags-input/jquery.tagsinput.min.css">
        <link rel="stylesheet" href="views/assets/vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="views/assets/vendors/flatpickr/flatpickr.min.css">

        <link rel="stylesheet" href="views/assets/vendors/sweetalert2/sweetalert2.min.css">
        <link rel="stylesheet" href="views/assets/vendors/prismjs/themes/prism.css">
        <link rel="stylesheet" href="views/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
        <!-- End plugin css for this page -->

        <!-- inject:css -->
        <link rel="stylesheet" href="views/assets/fonts/feather-font/css/iconfont.css">
        <link rel="stylesheet" href="views/assets/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="views/assets/vendors/mdi/css/materialdesignicons.min.css">

        <!-- endinject -->

          <!-- Plugin css for this page -->
          <link rel="stylesheet" href="views/assets/vendors/fullcalendar/main.min.css">

        <!-- End plugin css for this page -->

        <link rel="stylesheet" href="views/css/custom.css">
        <!-- Layout styles -->  
        <link rel="stylesheet" href="views/assets/css/demo2/style.css">
        
        <!-- End layout styles -->

        


        <link rel="shortcut icon" href="views/img/logo_circle.png" />

        


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.5/bluebird.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>



    
</head>
<body>

    
    <?php

    if(isset($_SESSION['name']) && isset($_SESSION['allowed'])){
        $name = $_SESSION['name'];
        $allowed = $_SESSION['allowed'];
        // $allowed = "false";
        $false = "false";
        if($allowed == $false){
            include "modules/404.php";
        }else{
            echo '<div class="main-wrapper">'; 
            include "modules/sidebar.php"; 
            echo '<div class="page-wrapper">';   
            include "modules/header.php";
            echo '<div class="page-content">';  

            if(isset($_GET["route"])){
                if ($_GET["route"] == 'members' ||
                    $_GET["route"] == 'attendance' ||
                    $_GET["route"] == 'accounts' ||
                    $_GET["route"] == 'login'||
                    $_GET["route"] == 'logout'||
                    $_GET["route"] == 'logout'||
                    $_GET["route"] == 'checkattendance'||
                    $_GET["route"] == 'eventattendance'||
                    $_GET["route"] == 'registration'||
                    $_GET["route"] == 'report'||
                    $_GET["route"] == 'viewattendance'){
                include "modules/".$_GET["route"].".php";
                }else{
                include "modules/404.php";
                }
            }else{
                include "modules/members.php";
            }
    
            echo '</div>';
            //footer
            include "modules/footer.php";
            echo '</div>';
            echo '</div>';  


        }
       
    
    }else{
            include "modules/login.php";
    }
        

    
    ?>


    


    <!-- core:js -->
	<script src="views/assets/vendors/core/core.js"></script>
	<!-- endinject -->

    

	<!-- Plugin js for this page -->
    <script src="views/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="views/assets/vendors/jquery-validation/jquery.validate.min.js"></script>
	<script src="views/assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
	<script src="views/assets/vendors/inputmask/jquery.inputmask.min.js"></script>
	<script src="views/assets/vendors/moment/moment.min.js"></script>
	<script src="views/assets/vendors/flatpickr/flatpickr.min.js"></script>

    <script src="views/assets/vendors/sweetalert2/sweetalert2.min.js"></script>




    <script src="views/assets/vendors/prismjs/prism.js"></script>
	<script src="views/assets/vendors/clipboard/clipboard.min.js"></script>
    <script src="views/assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="views/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>

  
	<!-- End plugin js for this page -->

    <!-- Custom js for this page -->
	<script src="views/assets/js/form-validation.js"></script>
	<script src="views/assets/js/bootstrap-maxlength.js"></script>
	<script src="views/assets/js/inputmask.js"></script>
	<script src="views/assets/js/flatpickr.js"></script>

    <script src="views/js/members.js"></script>
    <script src="views/assets/js/sweet-alert.js"></script>
    <script src="views/assets/js/data-table.js"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

	<!-- End custom js for this page -->


	<!-- inject:js -->
	<script src="views/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="views/assets/js/template.js"></script>
	<!-- endinject -->

    <script src="views/js/members.js"></script>
    <script src="views/js/payment.js"></script>
    <script src="views/js/accounts.js"></script>
    <script src="views/js/login.js"></script>
    <script src="views/js/attendance.js"></script>
    <script src="views/helpers/helper.js"></script>
    <script src="views/js/email.js"></script>
    <script src="views/js/report.js"></script>
    <script src="views/js/lockscreen.js"></script>

    <script src="views/assets/js/typeahead.js"></script>

    <script src="JSPrintManager.js"></script>



                            



<script>

    //WebSocket settings
    JSPM.JSPrintManager.auto_reconnect = true;
    JSPM.JSPrintManager.start();
    JSPM.JSPrintManager.WS.onStatusChanged = function () {
        if (jspmWSStatus()) {
            //get client installed printers
            JSPM.JSPrintManager.getPrinters().then(function (myPrinters) {
                var options = '';
                for (var i = 0; i < myPrinters.length; i++) {
				    options += '<option>' + myPrinters[i] + '</option>';
				}
                $('#installedPrinterName').html(options);
            });
        }
    };

    //Check JSPM WebSocket status
    function jspmWSStatus() {
        if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Open)
            return true;
        else if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Closed) {
            alert('JSPrintManager (JSPM) is not installed or not running! Download JSPM Client App from https://neodynamic.com/downloads/jspm');
            return false;
        }
        else if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Blocked) {
            alert('JSPM has blocked this website!');
            return false;
        }
    }

    //Do printing...
    function print(o) {
        if (jspmWSStatus()) {
            //generate an image of HTML content through html2canvas utility
            html2canvas(document.getElementById('tt'), { scale: 5 }).then(function (canvas) {

                //Create a ClientPrintJob
                var cpj = new JSPM.ClientPrintJob();
                //Set Printer type (Refer to the help, there many of them!)
                    cpj.clientPrinter = new JSPM.DefaultPrinter();
                //Set content to print... 
                var b64Prefix = "data:image/png;base64,";
                var imgBase64DataUri = canvas.toDataURL("image/png");
                var imgBase64Content = imgBase64DataUri.substring(b64Prefix.length, imgBase64DataUri.length);

                var myImageFile = new JSPM.PrintFile(imgBase64Content, JSPM.FileSourceType.Base64, 'report.png', 1);
                //add file to print job
                cpj.files.push(myImageFile);

                //Send print job to printer!
                cpj.sendToClient();


            });
        }
    }

    </script>
    

    

</body>

</html>