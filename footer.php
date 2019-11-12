<!-- Footer -->
<!--
<?php
include('mailer.php');


//session_start();

$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } 
    else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } 
    else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    $message = test_input($_POST["message"]);

    
    if($nameErr == "" && $emailErr == "" && $messageErr ==""){
        // Send confirmation email
        // To load mailer() function add this line to the top of script -> include('mailer.php');
        $toEmail = 'contact.mariabethania@gmail.com';
        $toName = 'Maria Bethania';
        $subject = 'Contact Me Message';
        $body = '<h1>Contact Me Message</h1><p><h3>Name: </h3>' . $name . '<p><h3>Email: </h3>' . $email . '<p><h3>Message:</h3>' . $message;
        mailer($toEmail, $toName, $subject, $body);  
        
        //exit();
    }
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
 -->

<!-- Footer -->
		<div id="footer" class="wrapper style2">
			<div class="container">
				<section>
					<header class="major">
						<h2 id="Contact Me">Contact Me</h2>
						<span class="byline">Let me know if you have any comments or questions</span>
					</header>
					<form method="post" action="index.php#footer">
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="name" id="name" placeholder="Name" /><?php echo $nameErr;?>
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="email" id="email" placeholder="Email" /><?php echo $emailErr;?>
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<textarea name="message" id="message" placeholder="Message"></textarea><?php echo $messageErr;?>
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<ul class="actions">
									<li>
										<input type="submit" value="Send Message" class="button alt" />
									</li>
								</ul>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	<!-- /Footer -->
