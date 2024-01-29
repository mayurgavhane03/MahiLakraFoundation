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

function generateRegNo($name){
    $string=str_replace(' ','',$name);
    $reg1=strtoupper(substr($string,0,3));
    $reg2=str_pad(rand(1,999),3,'0',STR_PAD_LEFT);
    $regId=$reg1.$reg2;
    return $regId;
}

function sendmail($Username,$Email,$regId){

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
$mail->Body = "Dear $Username,<br>
<br>
Greetings from <b>MAHI LAKRA FOUNDATION</b>.<br>
We are delighted to inform you that your registration on our website has been successfully completed. 
<br><br>Welcome to <b>MAHI LAKRA FOUNDATION!</b> We appreciate your interest and trust in our platform.
<br><br>
Name : $Username<br>
Email : $Email<br>
Registration ID : $regId
<br><br>
If you have any questions, concerns, or need assistance, please do not reply this mail.<br>
Reach out to us at <a href='https://instagram.com/mahilakrafoundation?igshid=YzkyYjZmZGI1Zg=='>@MahiLakraFoundation</a>. We are here to assist you. We look forward to 
your active participation and hope that you find our platform valuable and enjoyable.
<br><br>
Best regards,
<br><br>
MAHI LAKRA FOUNDATION";

if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent";
}
sendmail($name,$email,$regId)


?>