<?php

    if (isset($_POST['submit']))
    {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $hairgrade = $_POST['hairtype'];
  

    
  
  $to ="webcream01@gmail.com, ads@maximise.co.in";
    $subject = "Landing Page Leads : Ak Clinic";
   
    $message = "
<html>
    <head>
    </head>
    <body>
    <table>
    <tr>
    <th>Name</th>
    <td>$name</td>
    </tr>
    <tr>
    <th>Mobile Number</th>
    <td>$phone</td>
    </tr>
    <tr>
    <th>Type Of Hairgrade</th>
    <td>$hairgrade</td>
    </tr>
  
    </table>
    </body>
    </html>
";
   $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8". "\r\n";
    $headers .= 'From: <noreply@akclinics.org>' . "\r\n";
    $mail = mail($to,$subject,$message,$headers);
    $to1 = $email;
	$subject1 = "Welcome to AkClinic.";
	$message1 = '<table width="700" cellpadding="0" cellspacing="0" align="left" style="background:#ffffff; border:solid 1px #ccc; border-top:1px solid #ccc; font:normal 15px arial; text-align:justify; color:#333333;">
	
	<tr>
		<td align="center">
			<table width="690" border="0" hspace="0" vspace="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" border="1px solid #ccc">
				<tr>
					<td align="center">
						<table width="650" border="0" hspace="0" vspace="0" cellpadding="0" cellspacing="0">
							<tr>
						<td height="30"></td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td height="45"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>';
	// Always set content-type when sending HTML email
	$headers1 = "MIME-Version: 1.0" . "\r\n";
	$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	$headers1 .= 'From: <noreply@akclinics.org>' . "\r\n";
	$mail1 = mail($to1,$subject1,$message1,$headers1);
if ($mail) {
    header("Location: thankyou.html");
    exit();
} else {
    $msg = "Email not sent. Error: " . error_get_last();
    echo $msg;
}
}
?>
