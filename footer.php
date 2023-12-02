<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Quick Pick - Home</title>
 <!-- Bootstrap CSS -->
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
 <link rel="stylesheet" href="style.css"> 
 <link rel="icon" href="logo.ico" type="image/x-icon">
</head>
<body>

<!-- Footer -->
<footer>
  <div class="footer-content row">
     <div class="footer-column col-md-4">
       <img src="logo.png" width="60" height="60" alt="Company Logo">
       <p>Analyn & Bong's Apartment, Mercury Street, Barangay Santo Nino, San Fernando Subdivision, City of San Fernando, Pampanga</p>
     </div>
     
     <div class="footer-column col-md-4">
       <h3>Contact Us</h3>
       <ul>
         <li><i class="bi bi-telephone"></i>&nbsp;&nbsp; 0966 948 7089</li>
         <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i>&nbsp;&nbsp;Facebook Page</a></li>
       </ul>
     </div>
     
     <div class="footer-column col-md-4">
       <div class="container">
         <h2>New to Quick Pick?</h2>
         <p>Sign up for emails to get the latest updates</p>
         
         <div class="input-group mb-3">
           <input type="email" class="form-control" placeholder="Enter email address" aria-label="Enter email address" aria-describedby="basic-addon2">
           <button class="btn btn-primary" type="button">Subscribe</button>
         </div>
       </div>
     </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2023 Quick Pick All Rights Reserved.</p>
  </div>
</footer>

<script>
    function btnFunction() {
        // Checking the values of name, email, subject, and message fields.
        if(document.getElementById('email').value) {
            var email = document.getElementById('email').value;
            Email.send({
    SecureToken:  "c32f4d27-1985-42e5-a501-97fc5a3d8d94",
    Host : "smtp.elasticemail.com",
    Username : "jjclucas.student@ua.edu.ph",
    Password : "2A5E62567D00C93DC8BCA9548E8CB20C5A84",
    To : 'nutjabhd@gmail.com',
    From: 'jjclucas.student@ua.edu.ph',
    Subject : "Contact Service",
    Body : 'Email: '  +email
  }).then(
  message => alert(message)
);
            alert("Form Submitted Successfully");
        } else {
            // Displaying an error message
            alert("Please fill in all fields");
        }
    }
</script>
</body>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
</html>