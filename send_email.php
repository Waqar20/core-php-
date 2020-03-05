<?php

date_default_timezone_set('Asia/Karachi');
include "send_email/PHPMailer/PHPMailerAutoload.php";
// ,$url

Function sendmail($from1,$pwd,$to1,$subject,$body){
  $from=$from1;
  $password=$pwd;
  $to=$to1;

 $mail=new PHPMailer;
 $mail->isSMTP();
 $mail->SMTPDebug=0;
 $mail->Host='smtp.gmail.com';
 // $mail->Port=587;
 // $mail->SMTPSecure='tls';
 $mail->Port=465;
$mail->SMTPSecure='ssl';
 $mail->SMTPAuth=true;
 $mail->Username=$from;
 $mail->Password=$password;
 $mail->setFrom($from,"OPD");
 $mail->addAddress($to,"client");
 $mail->Subject=$subject;
 $mail->msgHTML($body);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

 if(!$mail->send()){
     return "Mailer Error:".$mail->ErrorInfo;
// echo json_encode("Mailer Error");
 }else{
    //header('location:view_appointment?msg="Email Sent Sucessfully"');
   return "send";
     //echo json_encode("ok");
    // die();
 }



}

function sendmail1($to1,$subject1,$body1){
    $from = $GLOBALS['user_email'];
    // $password = $GLOBALS['user_password'];
   // die("ok");
    $to = $to1;
    $subject = $subject1;
    $body = $body1;
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
   //$mail->Port = 465;
   //$mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Username = $from;
    // $mail->Password = $password;
    $mail->setFrom($from,"Admin");
    $mail->addAddress($to,"client");
    $mail->Subject = $subject;
    $mail->msgHTML("<b> $body</b>");

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    if(!$mail->send()){
        return "Mailer Error:".$mail->ErrorInfo;
    }
    else{
        //header('location:view_appointment?msg="Email Sent Sucessfully"');
        return "send";
    }



}




// function sendfile($to1,$subject1,$body1,$file){
//     $filename = "../uploads/projects/".$file;
//     $from = $GLOBALS['user_email'];
//     $password = $GLOBALS['user_password'];
//     $to = $to1;
//     $subject = $subject1;
//     $body = $body1;
//     $mail = new PHPMailer;
//     $mail->isSMTP();
//     $mail->addAttachment($filename);
//     $mail->SMTPDebug = 0;
//     $mail->Host = 'smtp.gmail.com';
//     $mail->Port = 587;
//     $mail->SMTPSecure = 'tls';
//     $mail->SMTPAuth = true;
//     $mail->Username = $from;
//     $mail->Password = $password;
//     $mail->setFrom($from,"Admin");
//     $mail->addAddress($to,"client");
//     $mail->Subject = $subject;
//     $mail->msgHTML("<b> $body</b>");

//     $mail->SMTPOptions = array(
//         'ssl' => array(
//             'verify_peer' => false,
//             'verify_peer_name' => false,
//             'allow_self_signed' => true
//         )
//     );

//     if(!$mail->send()){
//         return "Mailer Error:".$mail->ErrorInfo;
//     }
//     else{
//         //header('location:view_appointment?msg="Email Sent Sucessfully"');
//         return "send";
//     }



// }





?>