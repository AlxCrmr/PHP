<?php
    require_once("functions.php");
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Form</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container">
            <form class="" action="index.php" method="post">
                <h1>Contact us</h1>
                <?php
                        if( isset($_POST['contact_submit']) ) {
                            $name = trim($_POST['first_name']);
                            $lastname = trim($_POST['last_name']);
                            $email = trim($_POST['email']);
                            $msg = $_POST['message'];

                ?>

            <?php
                            // Check to see if $name or $email have header injections
                            if (has_header_injection($name) ||has_header_injection($lastname) || has_header_injection($email)) {
                                die(); // If true, kill the script
                            }

                            if ( !$name || !$lastname || !$email || !$msg) {
                                echo '<h4 class="error">**All fields required**</h4><a href="index.php" class="button">&laquo; Go back and try again</a>';
                                exit;
                            } else { ?>
                                <div class="show-sent-message">
                                    <h3>Thank you, <?php echo $name . " " . $lastname; ?> for your message.</h3>
                                    Your message is : <?php echo $msg; ?> <br>
                                    From: <?php echo $email; ?>
                                </div>
            <?php     }

                            // Add the recipient email to a variable
                            $to = "alexwashere@live.ca";
                            // Create subject
                            $subject = "$name sent you a message via your contact form";
                            // Construct the message
                            $message = "Name: $name\r\n";
                            $message .= "Email: $email\r\n";
                            $message .= "Message:\r\n$msg";

                            // Set the mail headers into a variable
                			$headers = "MIME-Version: 1.0\r\n";
                			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
                			$headers .= "From: " . $name . " <" . $email . ">\r\n";
                			$headers .= "X-Priority: 1\r\n";
                			$headers .= "X-MSMail-Priority: High\r\n\r\n";

                			// Send the email!
                			mail($to, $subject, $message, $headers);
            ?>

                            <!-- Show success message after email has sent -->
                    		<div class="show-sent-message">
                                <h5>Thanks for taking the time to contact us!</h5>
                        		<p>Please allow 24 hours for a response.</p>
                    		</div>
                    		<p><a href="index.php" class="button block">&laquo; Go to Home Page</a></p>
            <?php
                         } else {

            ?>
                    <div class="name-row row">
                        <label for="first_name">First Name:</label>
                        <input type="text" name="first_name" onfocus="this.placeholder=''" placeholder="First Name">

                        <label for="last_name">Last Name:</label>
                        <input type="text" name="last_name" onfocus="this.placeholder=''" placeholder="Last name">
                    </div>

                    <div class="row">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" onfocus="this.placeholder=''" placeholder="E-mail">
                    </div>

                    <div class="row">
                        <label for="message">Your Message:</label>
                        <textarea name="message" rows="8" cols="80" onfocus="this.placeholder=''" placeholder="Type your message here"></textarea>
                    </div>

                    <input type="submit"  name="contact_submit" value="Submit">
                    <br>
                    <br>

                        <?php } ?>

            </form>
        </div>

    </body>
</html>
