<?php
$name = $_POST["name"];
$Message = $_POST["message"];

$email_from = "Jawahir's website";

$email_subject = "New form Submission";

$email_body = "User Name: $name."
              "User Message: $message ./n".

$to = "Jawahirabas4@gmail.com";

$headers = "From: $email from /r/n";

$headers .- "Reply-To: $visitor_email /r/n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>