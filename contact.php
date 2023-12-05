<!DOCTYPE html>
<html>
<head>
<title>Simple Contact Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
<<<<<<< Updated upstream
<input type="hidden" name="submission_type" value="contact" />
<input type="hidden" name="recipient" value="jjclucas.student@ua.edu.ph" />
<input type="hidden" name="cf_form_name" value="Contact Form" />
<input type="hidden" name="user_captcha" value="" />
<label for="name">Name:</label><br />
<input type="text" id="name" name="name" required><br />
<label for="email">Email:</label><br />
<input type="email" id="email" name="email" required><br />
<label for="subject">Subject:</label><br />
<input type="text" id="subject" name="subject" required><br />
<label for="message">Message:</label><br />
<textarea id="message" name="message" required></textarea><br />
<input type="submit" value="Submit" onclick="btnFunction()">
</form>

<script>
    function btnFunction() {
        // Checking the values of name, email, subject, and message fields.
        if(document.getElementById('name').value && document.getElementById('email').value && document.getElementById('subject').value && document.getElementById('message').value) {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var subject = document.getElementById('subject').value;
            var message = document.getElementById('message').value;
            Email.send({
    SecureToken:  "c32f4d27-1985-42e5-a501-97fc5a3d8d94",
    Host : "smtp.elasticemail.com",
    Username : "jjclucas.student@ua.edu.ph",
    Password : "2A5E62567D00C93DC8BCA9548E8CB20C5A84",
    To : 'nutjabhd@gmail.com',
    From: 'jjclucas.student@ua.edu.ph',
    Subject : "Contact Service",
    Body : 'Name: '+name+ '<br/> Email: ' +email+ '<br/>Subject: '+subject+ '<br/>Message: ' + message
}).then(
  message => alert(message)
);
            alert("Form Submitted Successfully");
        } else {
            // Displaying an error message
            alert("Please fill in all fields");
=======
  <div class="cont-container">
      <h1 class="color-change">Contact Form</h1>
    <input type="hidden" name="submission_type" value="contact" />
    <input type="hidden" name="recipient" value="jjclucas.student@ua.edu.ph" />
    <input type="hidden" name="cf_form_name" value="Contact Form" />
    <input type="hidden" name="user_captcha" value="" />
    <input type="text" id="name" name="name" placeholder="Enter name:" required><br />
    <input type="email" id="email" name="email" placeholder="Enter email:"required><br />
    <input type="text" id="subject" name="subject" placeholder="Enter subject:"required><br />
    <textarea id="message" name="message" placeholder="Your Message:"required></textarea><br />
    <input type="submit" value="Submit" onclick="btnFunction()">
</div>
    </form>
    
    <script>
        function btnFunction() {
            if(document.getElementById('name').value && document.getElementById('email').value && document.getElementById('subject').value && document.getElementById('message').value) {
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var subject = document.getElementById('subject').value;
                var message = document.getElementById('message').value;
                Email.send({
        SecureToken:  "a5c3fcfe-a1b6-493e-9de5-06fc2586ef9f",
        Host : "smtp.elasticemail.com",
        Username : "quickpic38@gmail.com",
        Password : "E718FE409BB81367C0A1CC58277CB96CC194",
        To : 'jjclucas.student@ua.edu.ph',
        From: 'quickpic38@gmail.com',
        Subject : "Contact Service",
        Body : 'Name: '+name+ '<br/> Email: ' +email+ '<br/>Subject: '+subject+ '<br/>Message: ' + message
    }).then(
      message => alert(message)
    );
                alert("Form Submitted Successfully");
            } else {
                // Displaying an error message
                alert("Please fill in all fields");
            }
>>>>>>> Stashed changes
        }
    }
</script>

</body>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
</html>