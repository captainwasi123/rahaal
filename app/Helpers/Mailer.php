<?php 

namespace App\Helpers;

use Mail;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\View;

class Mailer
{
    public static function sendMail($subject, $receiver_email, $receiver_name, $template, $data)
    {
        $htmlContent = View::make($template, $data)->render();

        $mail = new PHPMailer();
        $mail->Encoding = "base64";
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.zeptomail.com";
        $mail->Port = 587;
        $mail->Username = "emailapikey";
        $mail->Password = 'wSsVR61yqxChBq8omWH8dew6mw9cUViiFRgr3FKo4yOvTfuW8sc/wkyYU1WlGfkcFjFpEDJDobsqmRZW0TJdiNx8z1BRWiiF9mqRe1U4J3x17qnvhDzPXm9VkhOBLIsJzg1vkmdoEclu';
        $mail->SMTPSecure = 'TLS';
        $mail->isSMTP();
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8";
        $mail->setFrom("noreply@mail.datamysite.com", "DataMySite Marketing");
        foreach ($receiver_email as $key => $value) {
            $mail->addAddress($value);
        }
        $mail->Body=$htmlContent;
        $mail->Subject= $subject;
        $mail->SMTPDebug = 0;
        /*$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str"; echo "<br>";};*/
        if(!$mail->Send()) {
            
        } else {
            return true;
        }





/*

        Mail::send($template, $data, function($message) use ($receiver_email, $receiver_name, $subject) {
             $message->to($receiver_email, $receiver_name)->subject
                ($subject);
             $message->from('contact@datamysite.com','DataMySite Marketing');
          });*/

        /*return true;*/
    }
}