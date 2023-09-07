<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$area = $_POST['area'];
$number = $_POST['number'];
$req = $_POST['req '];
$service = $_POST['service'];

$email_from ='info@newgeneration.com';

$email_subject ='New Form Student Submission ';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "Area: $area.\n".
                "User No: $number.\n".
                "User Requirments: $req.\n".
                "Tution Service: $service.\n";

$headers = "From: $email_from \r\n ";

$headers .= "Reply_To: $visitor_email \r\n ";

mail($to,$email_subject,$email_body,$headers);

header("location: NGn Find Tutor.html")

?>