<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Quick Pick - Home</title>
 <!-- Bootstrap CSS -->
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
           <!-- Added id to the email input field -->
           <input type="email" id="email" class="form-control" placeholder="Enter email address" aria-label="Enter email address" aria-describedby="basic-addon2">
           <button class="btn btn-primary" onclick="btnFunction()" type="button">Subscribe</button>
         </div>
       </div>
     </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2023 Quick Pick All Rights Reserved.</p>
  </div>
</footer>

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
  function btnFunction() {
    // Checking the value of the email field.
    var email = document.getElementById('email').value;
    
    // Checking if the email is not empty.
    if (email.trim() !== "") {
      Email.send({
        SecureToken: "a5c3fcfe-a1b6-493e-9de5-06fc2586ef9f",
        Host: "smtp.elasticemail.com",
        Username: "quickpic38@gmail.com",
        Password: "E718FE409BB81367C0A1CC58277CB96CC194",
        To: 'casquiambao.student@ua.edu.ph',
        From: 'quickpic38@gmail.com',
        Subject: "Subscriber: ",
        Body: 'Email: ' + email
      }).then(
        message => {
          alert("Form Submitted Successfully");
          console.log(message);
        }
      );
    } else {
      // Displaying an error message
      alert("Please fill in the email field");
    }
  }
</script>
</body>
</html>
