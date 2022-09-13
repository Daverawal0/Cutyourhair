$(document).ready(function() {
///////////////contact
$('#contact_form').submit(function(e) {
  e.preventDefault();
  console.log($(this).serialize());
  $.ajax({
    type: "POST",
    url: './backend/contact.php',
    data: $(this).serialize(),
    success: function(response)
    {
        if (response == true) {
          alert("Message Successfully Sent");
        }
        else {
          alert(response);
        }
    }
});
});

////////////////login
$('#login_form').submit(function(e) {
  e.preventDefault();
  console.log($(this).serialize());
  $.ajax({
    type: "POST",
    url: './backend/login.php',
    data: $(this).serialize(),
    success: function(response)
    {
        if (response == true) {
          alert("Login Successfull");
          window.location = 'index.php';
        }
        else {
          alert(response);
        }
    }
});
});


////////////////signup
$('#signup_form').submit(function(e) {
  e.preventDefault();
  console.log($(this).serialize());
  $.ajax({
    type: "POST",
    url: './backend/signup.php',
    data: $(this).serialize(),
    success: function(response)
    {
        if (response == true) {
          alert("Registration Successfull. Please login to continue");
          window.location = 'login.php';
        }
        else {
          alert(response);
        }
    }
});
});


////////////////booking appointment
$('#booking_form').submit(function(e) {
  e.preventDefault();
  console.log($(this).serialize());
  $.ajax({
    type: "POST",
    url: './backend/makeAppointment.php',
    data: $(this).serialize(),
    success: function(response)
    {
        if (response == true) {
          alert("Booking Successfull.");
          window.location = 'manageBooking.php';
        }
        else {
          alert(response);
        }
    }
});
});

/////////////////////////

});
