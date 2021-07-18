<?php
$submit = isset($_POST['submit']);

echo $submit;

if(isset($_POST['submit']))
{
	
	$fname = $_POST['fullname'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	
	date_default_timezone_set('Asia/Manila');
	$todays_date = date("y-m-d h:i:sa");
	
	require 'SendEmail/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->SMTPDebug = 0;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.stronglinkservices.net';  // Specify main and backup SMTP serverswell
	$mail->SMTPAuth = false;                               // Enable SMTP authentication
	$mail->Username = 'noreply@stronglinkservices.net';                 // SMTP username
	$mail->Password = 'nOKZQKTi7bBW';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                             // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to

	$mail->setFrom('noreply@stronglinkservices.net', 'Stronglink Services Mailer');
	$mail->addAddress('hr_admin@stronglinkservices.net', 'Human Resource / Administrator');     // Add a recipient
	
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('ceo.cdinc@gmail.com');
	$mail->addCC('i.asuncion@stronglinkservices.net');

	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
	
	$uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['uploaded_file']['name']));
	if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $uploadfile))
		 $mail->addAttachment($uploadfile,$_FILES['uploaded_file']['name']); 
	
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Stronglink Services - Application Form';
	$mail->Body    = '
	
<!DOCTYPE html>
<html lang="en">
		<head>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		</head>
	<body>
		<div class="row">
				
			<div class="col-md-6">
				<div class="container footer">
				<h1>Stronglink Services Application | <span>'. $todays_date . '</span></h1>
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
								<td>' . $fname . '</td>
							</tr>
							<tr>
								<td>Age</td>
								<td>' . $age . '</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>' . $email . '</td>
							</tr>
						  
							<tr>
								<td>Date</td>
								<td>' . date("m.d.Y") . '</td>
							</tr>
						  </tbody>
						</table>
		
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
';
	$mail->AltBody = 'Name: ';

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		//echo 'Message has been sent';
		echo "<script>window.location.assign('joinourteam.php?n=" . $name . "')</script>";
		
	}


}

?>
