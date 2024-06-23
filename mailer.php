<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\aircon\phpmailer.php\src\Exception.php';
require 'C:\xampp\htdocs\aircon\phpmailer.php\src\PHPMailer.php';
require 'C:\xampp\htdocs\aircon\phpmailer.php\src\SMTP.php';



$name = isset($_POST['name']) ? $_POST['name'] : '';
$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';


$conn=mysqli_connect("localhost","root","","ac");


if (!$conn) {
    echo "database not connected".mysqli_connect_error();
}

$sql =  "INSERT INTO `register` (`id`, `name`, `username`, `password`) VALUES (NULL,'$name', '$uname', '$pass')";



if (mysqli_query($conn,$sql)) {


$mail = new PHPMailer(true);

$uemail = 'dy804097@gmail.com';
$password = 'bvxd iogc nmdq wnit';

try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $uemail;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 25;

    // Recipient information
    $mail->setFrom($uemail, 'yadavdinesh853006@gmail.com');
    $mail->addAddress('yadavdinesh853006@gmail.com', 'dinesh yadav');
    $mail->addReplyTo($uemail, 'dinesh');

    // //Attachments
    //     //Add attachments
    // $mail->addAttachment('Chrysanthemum.jpg', 'Chrysanthemum.jpg');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Thank You for registering';
    $mail->Body    = 'Now You can Login ';

    $mail->send();
     
   header('Location:login.html');
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}

} else {
    echo "something went wrong";
}

mysqli_close($conn)

?>