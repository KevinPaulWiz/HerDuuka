<!DOCTYPE html>
<html>
<head>
	<title>Email subscription </title>
</head>
<body>
	<?php 
	include 'config/connection.php';
	if (isset($_POST['subscribeButton'])) {
		// declaring variable
		 $name = $_POST['name']; 
        $email = $_POST['email']; 
        $token = md5(uniqid(mt_rand()));

        try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `subscription`(`email`, `verify_token`) VALUES ('$email','$token')";
    // use exec() because no results are returned
    $conn->exec($sql);
    // echo "New record created successfully";
    			$siteName = 'Email verification Testing'; 
				$siteEmail = 'abc@testing.com'; 
				 
				$siteURL = ($_SERVER["HTTPS"] == "on")?'https://':'http://'; 
				$siteURL = $siteURL.$_SERVER["SERVER_NAME"].dirname($_SERVER['REQUEST_URI']).'/';
			
                $verifyLink = $siteURL.'adverify_email?ALeKk01Aq9LKlrq4_B0fiQ=uHSZ06KXuAE&verify_email='.$token; 
                $subject = 'Confirm Subscription'; 
     
                $message = '<h1 style="font-size:22px;margin:18px 0 0;
				padding:0;text-align:left;color:#3c7bb6">Email Confirmation</h1> 
                <p style="color:#616471;text-align:left;padding-top:15px;
				padding-right:40px;padding-bottom:30px;padding-left:40px;font-size:15px">
				Thank you for signing up 
				with '.$siteName.'! Please confirm your email address 
				by clicking the link below.</p> 
                <p style="text-align:center;"> 
                    <a href="'.$verifyLink.'" style="border-radius:.25em;
					background-color:#4582e8;
					font-weight:400;min-width:180px;font-size:16px;
					line-height:100%;padding-top:18px;
					padding-right:30px;padding-bottom:18px;padding-left:30px;
					color:#fffffftext-decoration:none">Confirm Email</a> 
                </p> 
                <br><p><
				strong>'.$siteName.' Team</strong></p>'; 
                 
                $headers = "MIME-Version: 1.0" . "\r\n";  
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";  
                $headers .= "From: $siteName"." <".$siteEmail.">"; 
                 
                $mail = mail($email, $subject, $message, $headers); 
                if($mail){ 
      //               $response = array( 
      //                   'status' => 'ok', 
      //                   'msg' => 'A verification link has been 
						// sent to your email address, please check your email and verify.' 
      //               ); 
                	    echo "New record created successfully";
                } 
              
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

	}
	 ?>
<div class="row">
	<div class="col-lg-12">
		<div class="main-content">
			<div class="susbcribe-container">
				<div class="top">
					<h2>Subscribe Now</h2>													
				</div>
				<div class="bottom">							
					<div class="status"></div>						
					<form action="#" id="subscribeForm" method="post">							
						<!-- <input type="text" class="form-control" id="name" placeholder="Full Name" required="">	 -->
						<span class="text-danger hidden" id="nameError"></span>
						<input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required="">
						<span class="text-danger hidden" id="emailError"></span>
						<input type="submit" id="subscribeButton" name="subscribeButton" value="Subscribe Now">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>