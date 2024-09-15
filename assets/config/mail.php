<!-----Mailing System----->
<?php 
require_once('smtp/PHPMailerAutoload.php');

//Database connect..........
require_once('database.php');

 if (isset($_POST['submit'])) {
  $fullname = mysqli_real_escape_string($db_conn,$_POST['fullname']);
  $email =mysqli_real_escape_string($db_conn,$_POST['email']);
  $phone = mysqli_real_escape_string($db_conn,$_POST['phone']);
  $website = mysqli_real_escape_string($db_conn,$_POST['website']);
  $subject = mysqli_real_escape_string($db_conn,$_POST['subject']);
  $message = mysqli_real_escape_string($db_conn,$_POST['message']);

  $add = "INSERT INTO `contact`(`fullname`, `email`, `phone`, `website`, `subject`, `message`) VALUES ('$fullname','$email','$phone','$website','$subject','$message')"; 
  $result = mysqli_query($db_conn,$add);   

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

try {
    $mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "rfospl24@gmail.com";
	$mail->Password = "vhfukzyeelbdajdr";
	

    //Recipients
    $mail->setFrom('rfospl24@gmail.com', 'Contact from');
    $mail->addAddress('subhranilmajumder.etce.3009@gmail.com
', 'Client');     //Add a recipient
    $mail->addAddress('subhranilmajumder.etce.3009@gmail.com
', 'Client');     //Add a recipient
    $mail->addAddress('subhranilmajumder.etce.3009@gmail.com
', 'Client');     //Add a recipient
    
    //Attachments
   /* $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
*/
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Us';
    $mail->Body    = "Sender name = $fullname <br> Sender email = $email <br> Sender phone number = $phone <br> Sender Website Name =  $website <br> Subject = $subject <br> Sender message = $message";
   
    $mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
         ));

    $mail->send();
    echo '<script>alert("Your message has been sent, our representative will reply to you very soon.Thank you for your message.") </script>';
    header("refresh:0; url=index.php");
} catch (Exception $e) {
    echo '<script>alert("Message could not be sent!") </script>';
  //  echo "<div class='alert'>Message could not be sent! Mailer Error: {$mail->ErrorInfo}</div>";
}
   
 }

?>