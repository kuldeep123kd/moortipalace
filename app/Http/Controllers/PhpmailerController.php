<?php

namespace App\Http\Controllers;

use Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PhpmailerController extends Controller {

	public function sendEmail (Request $request) {
  	if(Request::isMethod('post')) {
			require '../vendor/autoload.php';													
            $USER = env("USER", "somedefaultvalue");
            $SECRET = env("SECRET", "somedefaultvalue");
			$mail = new PHPMailer(true);                            

			try {
	    	    // $mail->SMTPDebug = 0;                                	
				$mail->isSMTP();                                     	
				$mail->Host = 'smtp.hostinger.in';
				$mail->SMTPAuth = true;                              	
				$mail->Username = $USER;             
				$mail->Password = $SECRET;              
				$mail->SMTPSecure = 'tls';                           
				$mail->Port = 587;
				$mail->setFrom($USER, 'Moorti Palace');
				$mail->addAddress('kuldeep.shakya.kd@gmail.com');
				$mail->isHTML(true);
				$mail->Subject = 'Product Enquiry';
				$mail->Body    = '<h1 align=center>Name: '.Request::input('name').'<br>Mobile: '.Request::input('phone').'<br>Email: '.Request::input('email').'<br>Enquiry: '.Request::input('enquiry').'</h1>';

				$mail->send();
				return back()->with('success','Message has been sent!');
			} catch (Exception $e) {
				return back()->with('error','Message could not be sent.');
			}
		}
    	return view('phpmailer');
  }
} 