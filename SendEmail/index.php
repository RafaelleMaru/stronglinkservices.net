<?php
require 'PHPMailerAutoload.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");

$message_final = '<!DOCTYPE html>
<html lang="en">
		<head>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		</head>
	<body>
		
		
		
		<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    			
			<div class="col-md-12">
			
				<div class="container footer">
				<h1>Stronglink Services Inc. Inquiry | <span>'. $todays_date . '</span></h1>
					<div class="d-flex justify-content-between">
						<table class="table table-sm">
						  <thead>
							<tr>
							  <th scope="col"></th>
							  <th scope="col"></th>
							</tr>
						  </thead>
						  <tbody class="table-striped">
						  
							<tr>
								<td>Name</td>
								<td>'.$name.'</td>
							</tr>
							<tr>
								<td>Phone</td>
								<td>'.$phone.'</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>'.$email.'</td>
							</tr>
							<tr>
								<td>Message</td>
								<td>'.$message.'</td>
							</tr>
						  
							
						  </tbody>
						</table>
		
					</div>
				</div>
			</div>
	   
  </div>
</div>
	</body>
</html>';



$message_client = '<!DOCTYPE html>
<html lang="en">
		<head>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		</head>
	<body>
		
		
		
		<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    			
			<div class="col-md-12">
			
				<div class="container footer">
				<h1>Stronglink Services Inc. Inquiry | <span>'. $todays_date . '</span></h1>
					<div class="d-flex justify-content-between">
						<table class="table table-sm">
						  <thead>
							<tr>
							  <th scope="col"></th>
							  <th scope="col"></th>
							</tr>
						  </thead>
						  <tbody class="table-striped">
							<tr>
								<td colspan="2">Thank you for sending us your inquiry!</td>
							</tr>
							<tr>
								<td>Name</td>
								<td>'.$name.'</td>
							</tr>
							<tr>
								<td>Phone</td>
								<td>'.$phone.'</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>'.$email.'</td>
							</tr>
							<tr>
								<td>Message</td>
								<td>'.$message.'</td>
							</tr>
						  
							
						  </tbody>
						</table>
		
					</div>
				</div>
			</div>
	   
  </div>
</div>
	</body>
</html>';


$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail..net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'noreply@stronglinkservices.net';                 // SMTP username
$mail->Password = 'GR3=Gp@8Ow*P';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('noreply@stronglinkservices.net', 'Stronglink Services Inc. Mailer');
//$mail->addAddress('noreply@stronglinkservices.net', 'Stronglink Services Inc. Mailer');     // Add a recipient
//$mail->addAddress('ceo.cdinc@gmail.com', 'Ilare Esquivias');     // Add a recipient
$mail->addAddress('villegasrafaelle@gmail.com', 'Rafaelle Villegas');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Inquiry | ' . $name;
$mail->Body    = $message_final;
$mail->AltBody = 'Stronglink Services Inc. Inquiry | '. $todays_date . 'Name: ' . $name . 'Phone: ' . $phone . 'EmailAddress: ' . $email . 'Message: ' . $message;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    //echo 'Message has been sent';
	
	
				
			$mail = new PHPMailer;

			$mail->SMTPDebug = 0;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'mail.stronglinkservices.net';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'noreply@stronglinkservices.net';                 // SMTP username
			$mail->Password = 'h},ICGDN4VpQhf6lN#';                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                    // TCP port to connect to

			$mail->setFrom('noreply@.net', 'Stronglink Services Inc. Mailer');
			$mail->addAddress($email, $name);     // Add a recipient
			//$mail->addAddress('ellen@example.com');               // Name is optional
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Inquiry | ' . $name;
			$mail->Body    = $message_client;
			$mail->AltBody = 'Thank you for sending us your inquiry! | '. $todays_date . 'Name: ' . $name . 'Phone: ' . $phone . 'EmailAddress: ' . $email . 'Message: ' . $message;

			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} 
			//else {
				//echo 'Message has been sent';
			//	header("Location: ../?n=" . $name);
			//}
	
	
	
	
	header("Location: ../index.php?n=" . $name);
}

?>

