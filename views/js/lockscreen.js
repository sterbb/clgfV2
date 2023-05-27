$(function(){

    var inactivityTimeout; // Global variable to track the inactivity timeout

    function startInactivityTimer(durationInSeconds) {
    clearTimeout(inactivityTimeout); // Clear any existing timeout
    
    inactivityTimeout = setTimeout(function() {
        showLockScreen();
    }, durationInSeconds * 1000); // Convert seconds to milliseconds
    }

    function resetInactivityTimer() {
        clearTimeout(inactivityTimeout); // Clear the timeout
        startInactivityTimer(5); 
    }


      function showLockScreen() {
        $("#passwordError").hide();
        $('#lockScreen').modal('show');

      }
      
      function hideLockScreen() {
        $('#lockScreen').modal('hide');
      }
      
      // Start the inactivity timer when the page loads or when user activity is detected
      document.addEventListener("DOMContentLoaded", function() {
        startInactivityTimer(5);
      });
      
      // Reset the inactivity timer when user activity is detected
      document.addEventListener("mousemove", resetInactivityTimer);
      document.addEventListener("keydown", resetInactivityTimer);

    $('#lockScreen').modal({
        backdrop: 'static',
        keyboard: false
    })

    $("#lockscreen-form").submit(function(e){
        e.preventDefault();

        var password = $("#passwordLock").val();

        var accID = $("#accountID").text();

        var data = new FormData();
        data.append("password",password);
        data.append("accID",accID);

        $.ajax({
            url: "ajax/lockscreen.ajax.php",
            method: "POST",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "text",
            success: function(answer) {
                if(answer == "true"){
                    hideLockScreen();
                    resetInactivityTimer();
                    $("#passwordLock").val("");

                }else{
                    $("#passwordLock").val("");
                    $("#passwordError").show();
                }

            },
            error: function() {
               
            },
            complete: function() {

            }
        });
    })

})

