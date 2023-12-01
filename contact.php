<!DOCTYPE html>
<html>
<head>
<title>Simple Contact Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
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
        }
    }
</script>

</body>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
</html>