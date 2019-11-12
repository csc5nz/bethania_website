<?php



//session_start();

$secretErr = "";
$secret = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST["secret"])) {
        $secretErr = "Secret is required";
    } 
    else {
        $secret = test_input($_POST["secret"]);
        if (!file_exists("secret.txt")) {
            file_put_contents("secret.txt", $secret . "\n");
        }
        
    }
        
        //exit();
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!-- Footer -->
		<div id="footer" class="wrapper style2">
			<div class="container">
				<section>
					<header class="major">
						<h2 id="Contact Me">Admin</h2>
						<span class="byline">Enter secret: </span>
					</header>
					<form method="post" action="admin.php">
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="secret" id="secret" placeholder="Secret" /><?php echo $secretErr;?>
							</div>
						</div>
				
						<div class="row half">
							<div class="12u">
								<ul class="actions">
									<li>
										<input type="submit" value="Submit" class="button alt" />
									</li>
								</ul>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	<!-- /Footer -->
