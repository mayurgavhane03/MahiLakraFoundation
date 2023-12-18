<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$servername = "localhost"; //Give remote database information
$database = "databaseName"; //create a database in php admin and then write name of the database
$username = "usernameOfMysql"; //Give remote database information
$password = "Password"; //Give remote database information
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$name=$_POST['name'];
$school=$_POST['school'];
$city=$_POST['city'];
$state=$_POST['state'];
$email=$_POST['email'];

/*

Validation

*/


//create a table and enter the name here
$sql = "INSERT INTO table_name VALUES ('$name', '$school', '$city', '$state', '$email')";
mysqli_query($conn, $sql);
mysqli_close($conn);

function sendmail($Username,$Email){

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';


$mail->Username = sendermail;
$mail->Password = senderpassword;

$mail->IsHTML(true);
$mail->SingleTo = true;

$mail->From = sender_mail;
$mail->FromName = sender_name;

// $mail->AddAttachment($path);

$mail->addAddress($Email,$Username);

// $mail->addCC("user.3@ymail.com","User 3");
// $mail->addBCC("user.4@in.com","User 4");

$mail->Subject = "MAHI LAKRA FOUNDATION INTERNSHIP";
$mail->Body = "Dear $Username,

Greetings from MAHI LAKRA FOUNDATION.
We are delighted to inform you that your registration on our website has been successfully 
completed. Welcome to MAHI LAKRA FOUNDATION! We appreciate your interest and trust in our platform.

$Username
$Email

If you have any questions, concerns, or need assistance, please do not reply this mail. 
Reach out to us at info@admsociety.org . We are here to assist you. We look forward to 
your active participation and hope that you find our platform valuable and enjoyable.

Best regards,

MAHI LAKRA FOUNDATION";

if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent";
}
sendmail($name,$email)


?>