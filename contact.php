<!DOCTYPE html>

<?php
session_start();
?>

<!--
	Jack Lavallee
	3/8/2016
	lab5
-->

<html>
		<head>
        <?php include "styling.php"; ?>
    </head>

    <body>

			<header>

				<nav>
					<?php include "header.php"; ?>
				</nav>

			</header>

			<?php
				include_once "authenticate.php";

				if(isLoggedIn()) { ?>

				<div class="page_title">
					<h2>Send me a message!</h2>
					<blockquote>Let me know where you agree, or disagree with any of my thoughts!</blockquote>
				</div>

				<div class="skinny_wrapper wrapper_padding">

				<form action="contact.php" method="post" id="form">

					<div id="input">

					<?php


						if (isset ($_POST['submit']))  {
							$to="myemailisjack@gmail.com";
							$subject= $_POST["subject"];
							$email=   $_POST["email"];
							$message= $_POST["message"];
							$headers="From: $email";

						if ($_SESSION['6_letters_code'] == $_POST['captcha']) {
							$sent = mail($to, $subject, $message, $headers);

							if($sent) {
								print "<label>Your mail was sent successfully</label>";
							}
							else {
								print "<label>We encountered an error sending your mail</label>";
							}
						}
						else {
							print "<label>Captcha Incorrect. Please try again</label>";
						}
					}
					?>
						<br /><br />
						<label>Name</label><br />
						<input name="name" type="text" value="<?php echo isset($_POST['name']) ?$_POST['name']: "";?>"/><br />

						<label>Email</label><br />
						<input name="email" type="text" value="<?php echo isset($_POST['email']) ?$_POST['email']: "";?>"/><br />

						<label>Subject</label><br />
						<input name="subject" type="text" value="<?php echo isset($_POST['subject']) ?$_POST['subject']: "";?>"/><br />

						<label>Message</label><br />
						<textarea name="message" value="<?php echo isset($_POST['message']) ?$_POST['message']: "";?>"/></textarea><br />

						<label>Captcha</label><br /><br />
						<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" ><br /><br />

						<label>Enter Captcha Code</label><br /><br />
						<input name="captcha" type="text"><br /><br />

						<input type="submit" value="Send Message" class="button" name="submit"/>
						<input type="submit" value="Try Another Captcha" class="button" name="recaptcha"/>


					</div>

				</form>

				<?php }
				else { ?>

					<p><blockquote id='logQuote'>To view this page you must Log In. <a href="log_in.php">Click Here</a> to log in.</blockquote></p>
					<p><blockquote id='logQuote'>If you haven't Signed Up. <a href="sign_up.php">Click Here</a> to sign up.</blockquote></p>

				<?php }
			?>

			</div>


			<footer>
				<?php include "footer.php"; ?>
			</footer>

		</body>

</html>
