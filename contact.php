
<?php
if (isset($_POST['sendMailBtn'])) {
    $fromEmail = $_POST['fromEmail'];
    $toEmail = $_POST['toEmail'];
    $subjectName = $_POST['subject'];
    $message = $_POST['message'];
    $fromTwo = 'tshikovhiej@outlook.com';
    
    $toTwo = 'tshikovhi.elle466@gmail.com';
    $to = $toEmail;
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromTwo.'<'.$fromTwo.'>' . "\r\n".'Reply-To: '.$fromTwo."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"><br/> SUBJECT: '.$subject.'</span>
				<div class="container"> <br/>
                 MESSAGE: '.$message.'<br/><br/>
                    SENDER: '.$toEmail.'
                  
				</div>
			</body>
			</html>';
    $result = @mail($toTwo, $subject, $message, $headers);

    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="contact.html";</script>';
}


