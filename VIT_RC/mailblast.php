<?php
// TODO: Mail Templates with Local Host Change it in the prodcution




function PHPMailer($Email,$tname,$Subject,$Message){
  require 'PHPMailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'admin@vnc17.in';                 // SMTP username
  $mail->Password = 'vishnu456';                           // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465;                                    // TCP port to connect to

  $mail->setFrom('admin@vnc17.in', 'VNC Admin');
  $mail->addAddress($Email, $tname);     // Add a recipient
  $mail->addAddress($Email);               // Name is optional
  $mail->addReplyTo('admin@vnc17.in', 'For More Information');
  /*$mail->addCC('cc@example.com');
  $mail->addBCC('bcc@example.com');*/

  /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/    // Optional name
  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = $Subject;
  $mail->Body    = $Message;
  //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if(!$mail->send()) {
        Errono($Email,$mail->ErrorInfo);
        return false;
  } else {
      return true;
  }
}
function CheckSum($email){
  require "dbconnect.php";
  $checksum = substr( md5(rand()), 0, 7);

  $id_assoc = mysqli_query($stat,"SELECT id FROM details WHERE email = '$email'");
  $data_id_array = mysqli_fetch_assoc($id_assoc);
  $id = $data_id_array['id'];
  $insert_checksum  = mysqli_query($stat,"INSERT INTO verifylog (id,checksum) VALUES ($id,'$checksum')");
  if(!$insert_checksum) Errono($email,1);

    return $checksum;
}

function Errono($email,$code)
{
  require "dbconnect.php";
  $data = mysqli_query($stat, "SELECT id FROM details WHERE email = '$email'");
  $data_Array = mysqli_fetch_assoc($data);
  $id = $data_Array['id'];
  $Insert_error = mysqli_query($stat, "INSERT INTO errors VALUES($id,'$code')");

}


function SendMail($id, $code){
require "dbconnect.php";
$getEmail = mysqli_query($stat,"SELECT email,tname FROM details WHERE id=$id");

$getEmail_array = mysqli_fetch_assoc($getEmail);
$tname = $getEmail_array['tname'];
$m = $getEmail_array['email'];
$checkSum = CheckSum($m);
$Mail_subjects = array(1 => "Welcome to VNC",
                       2 => "VNC Account Password Recovery",
                       3 => "Abstract Upload Notification",
                       4 => "VNC -> You are Rejected",
                       5 => "VNC -> You are Accepted");

$MailTemplates = array(1 => "<!DOCTYPE html>
<html>
<head>
  <title>Welcome to VNC</title>
</head>
<body style=\"background-image: url(http://www.redcatracing.com/2016/images/slider/LG-Slider_RampageXTE_side.jpg);\">
<h2 style=\"color: yellow;text-align: center;\">Welcome to Vishnu Nitro Championship</h2>
<p style=\"font-size: 20px;justify-content: center;\">
  Hello, $tname <br>
  We are delighted to hear that you have registered for our contest, again thank you for Registering with Vishnu Nitro Championship. In order to participate in the Contest we are going to need a small email verification please click on the below link to verify your email. <br>
  Thanking you,<br>
  Cheers,<br>
  VNC Team.<br>
</p>
<a style=\"height: 40px;width: 150px;color: white;background-color: orange;display: block;text-decoration: none; text-align: center;padding-top: 20px\" href=\"http://vnc17.in/security_token_check.php?token=$checkSum\">Click here to Verify</a>
</body>
</html>",
                       2 => "<!DOCTYPE html>
<html>
<head>
  <title>Password Recovery Email - VNC</title>
</head>
<body>
<p style=\"font-size:24px\"> Hello,<br>
  We have received at Request to reset your password if you didn't make this request you can ignore this email ,<br> If you have requested a new password please use the belowlink to recover your acount with new password,<br>
    Cheers<br>,
    Vishnu Nitro Championship.<br>
</p>
<br>
<button style=\"background-color: orange;color: white;height: 30px;width: 70px\" href=\"http://vnc17.in/Password_Reset.php?hash='$checkSum'\">Click Here to reset your password</button>
</body>
</html>",
                       3 => "<!DOCTYPE html>
                       <html>
                       <head>
                         <title>Please Update your RC data</title>
                       </head>
                       <body style=\"background-image: url(http://www.redcatracing.com/2016/images/slider/LG-Slider_RampageXTE_side.jpg);\">
                       <h2 style=\"color: yellow;text-align: center;\">Welcome to Vishnu Nitro Championship</h2>
                       <p style=\"font-size: 20px;justify-content: center;\">
                         Hello, $tname <br>
                         We have observed that you didn't upload your RC car Specification. In order for your to get qualified for the Contest you need to upload your RC car Specification,For More Details Please Contact VNC Team using Conatact Form <br>
                         Thanking you,<br>
                         Cheers,<br>
                         VNC Team.<br>
                       </p>

                       </body>
                       </html>",
                       4 => "<!DOCTYPE html>
                       <html>
                       <head>
                         <title>Your Application is Rejected</title>
                       </head>
                       <body style=\"background-image: url(http://www.redcatracing.com/2016/images/slider/LG-Slider_RampageXTE_side.jpg);\">
                       <h2 style=\"color: yellow;text-align: center;\">Welcome to Vishnu Nitro Championship</h2>
                       <p style=\"font-size: 20px;justify-content: center;\">
                         Hello, $tname <br>
                         We are sorry to say that your application is Rejected it may be because of lack of data or your car isn't qualified for the Race Better Luck next Time  <br>
                         Thanking you,<br>
                         Cheers,<br>
                         VNC Team.<br>
                       </p>
                       </body>
                       </html> ",
                       5 => "<!DOCTYPE html>
                       <html>
                       <head>
                         <title>Your Application is Accepted</title>
                       </head>
                       <body style=\"background-image: url(http://www.redcatracing.com/2016/images/slider/LG-Slider_RampageXTE_side.jpg);\">
                       <h2 style=\"color: yellow;text-align: center;\">Welcome to Vishnu Nitro Championship</h2>
                       <p style=\"font-size: 20px;justify-content: center;\">
                         Hello, $tname <br>
                         Congos , Now Pack your bags your are coming to the race we are so happy that you have made through the qualification Round, See your at the Race. If there are any doubts please contact uisng the Contact form or with the mobile numbers provided in the website <br>
                         Thanking you,<br>
                         Cheers,<br>
                         VNC Team.<br>
                       </p>
                       </body>
                       </html> "
);
if($code == 4){
  $Reject = mysqli_query($stat,"UPDATE details SET applications=-1 WHERE id= $id ");
}
if($code == 5){
  $Reject = mysqli_query($stat,"UPDATE details SET applications=1 WHERE id= $id ");
}
$email_template = $MailTemplates[$code];
$mail_sub = $Mail_subjects[$code];
$maol = $getEmail_array['email'];

if(!PHPMailer($maol,$tname,$mail_sub,$email_template)){
  Errono($getEmail_array['email'],1);
  return false;
}
return true;
}


if(isset($_GET['clicked'])){
  $Click = $_GET['clicked'];
  if($Click == 'Y')
    session_start();
    $id = $_SESSION['id'];
    SendMail($id,2);
    $dat_mesh = array(0 => "Sent" );

    echo json_encode($dat_mesh);
}
 ?>
