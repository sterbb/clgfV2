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
        startInactivityTimer(5); // Set the inactivity timeout duration (60 seconds in this example)
    }


      function showLockScreen() {

        $('#lockScreen').modal('show');




        // var password = "1234"; // Replace with your desired password
        // var userPassword = prompt("Enter the password to unlock:"); // Display password prompt to the user
      
        // if (userPassword === password) {
        //   // Password matches, hide lock screen and reset inactivity timer
        //   hideLockScreen();
        //   resetInactivityTimer();
        // } else {
        //   // Password does not match, display error message or take appropriate action
        //   alert("Incorrect password. Please try again.");
        // }
      }
      
      function hideLockScreen() {
        $('#lockScreen').modal('hide');
      }
      
      // Start the inactivity timer when the page loads or when user activity is detected
      document.addEventListener("DOMContentLoaded", function() {
        startInactivityTimer(5); // Set the initial inactivity timeout duration (60 seconds in this example)
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

        alert(password);

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
                console.log(answer);
                if(answer == "true"){
                    hideLockScreen();
                    resetInactivityTimer();
                }else{
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

