<?php
$placement = $_Tutor_Placement['placement']
$name = $_POST['name'];
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$rel = $_POST['rel '];
$num = $_POST['num'];
$subject = $_POST['subject'];
$visitor_email = $_POST['email'];
$area = $_POST['area'];

$email_from ='info@newgeneration.com';

$email_subject ='New Form Tutor Application ';

$email_body = "Service: $placement.\n".
                "Tutor Name: $name.\n".
                "Father/Husband Name: $fname.\n".
                "Gender: $gender.\n".
                "Status: $status.\n".
                "Religion: $rel.\n".
                "Tutor No: $num.\n".
                "Subject: $subject.\n".
                "Tutor Email: $visitor_email.\n".
                "City|Area: $area.\n";
                
                

$headers = "From: $email_from \r\n ";

$headers .= "Reply_To: $visitor_email \r\n ";

mail($to,$email_subject,$email_body,$headers);

header("location: NGn Become a tutor.html")










?>