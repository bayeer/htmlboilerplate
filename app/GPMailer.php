<?php

namespace App;

class GPMailer {
    /**
     * Указывает для нелатинских символов метку Юникода (используется в полях, типа Subject, Address, ReplyTo) 
     */
    public static function encode2utf8($var) {
        return '=?UTF-8?B?'.base64_encode($var) . '?=';
    }

    /**
     * Отправка писем через стандартный sendmail
     */
    public static function sendMail($from_email, $from_name, $to_email, $cc_email, $subject, $message)
    {
        $bname = ($from_name) ? '=?UTF-8?B?' . base64_encode($from_name) . '?=' : '';
        $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
        $headers = "Content-Type: text/html; charset=UTF-8\r\n" .
            "From: $bname <{$from_email}>\r\n" .
            "Reply-To: {$from_email}\r\n" .
            'Cc: ' . $cc_email . "\r\n" .
            "MIME-Version: 1.0\r\n";

        return mail($to_email, $subject, $message, $headers);
    }

    /**
     * Отправка писем через SMTP
     */
    public static function sendSmtp($from_email, $from_name, $to_email, $cc_email, $subject, $message, $host, $port, $username, $password) 
    {
        //SMTP needs accurate times, and the PHP time zone MUST be set
        //This should be done in your php.ini, but this is how to do it if you don't have access to that
        date_default_timezone_set('Asia/Irkutsk');

        //Create a new PHPMailer instance
        $mail = new \PHPMailer;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;

        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';

        //Set the hostname of the mail server
        $mail->Host = $host;

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = $port;

        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = $username;

        //Password to use for SMTP authentication
        $mail->Password = base64_decode($password);

        $mail->CharSet = 'UTF-8';

        //Set who the message is to be sent from
        $mail->setFrom($username, self::encode2utf8($from_name));

        //Set an alternative reply-to address
        $mail->addReplyTo($from_email, self::encode2utf8($from_name));

        //Set who the message is to be sent to
        $mail->addAddress($to_email, self::encode2utf8($from_name));

        // Set CC address
        if (trim($cc_email)) {
            $mail->addCC($cc_email);
        }

        //Set the subject line
        $mail->Subject = self::encode2utf8($subject);

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body

        $mail->msgHTML($message);
        //$mail->msgHTML(file_get_contents('offer.html'), dirname(__FILE__));

        //Replace the plain text body with one created manually
        //$mail->AltBody = 'This is a plain-text message body';

        //Attach an image file
        //$mail->addAttachment('cifra-new-year-offer.pdf');

        //send the message, check for errors
        try {
            return $mail->send();
        }
        catch (Exception $ex) {
            throw new Exception($ex->getMessage(), $ex->getCode());
        }
    }
}