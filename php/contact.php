<?php



    // Only process POST reqeusts.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get the form fields and remove whitespace.

        $name = strip_tags(trim($_POST["name"]));
        $page = strip_tags(trim($_POST["page"]));

				$name = str_replace(array("\r","\n"),array(" "," "),$name);

        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

        $phone = strip_tags(trim($_POST["phone"]));
        $date = strip_tags(trim($_POST["date"]));

        $message = trim($_POST["message"]);



        // Check that data was sent to the mailer.

        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Set a 400 (bad request) response code and exit.

            header("HTTP/1.0 400 Bad Request");

            echo "Oops! There was a problem with your submission. Please complete the form and try again.";

            exit;

        }



        // Set the recipient email address.

        // FIXME: Update this to your desired email address.

        //$recipient = "alexrojocomunicacion@gmail.com,saboramexicony@gmail.com,alexrojo90210@hotmail.com";
		$recipient = "contacto@acrimexico.com";

        // Set the email subject.

        $subject = "Nuevo correo enviado desde el sitio web de ACRI México";



        // Build the email content.

        $email_content = "Nombre: $name\n";

        $email_content .= "Email: $email\n";

        $email_content .= "Teléfono: $phone\n\n";

        $email_content .= "Fecha solicitada por cliente: $date\n\n";

        $email_content .= "Mensaje:\n$message\n";



        // Build the email headers.

        $email_headers = "From: $name <$email>";



        // Send the email.

        if (mail($recipient, $subject, $email_content, $email_headers)) {

            // Set a 200 (okay) response code.

            header("HTTP/1.0 200 OK");

            echo "Thank You! Your message has been sent.";

            header("Location: $page?mailSend=success", true, 200);
            exit();

        } else {

            // Set a 500 (internal server error) response code.

            header("HTTP/1.0 500 Internal Server Error");

            header("Location: $page?mailSend=failure", true, 500);
            exit();

        }



    } else {

        // Not a POST request, set a 403 (forbidden) response code.

        header("HTTP/1.0 403 Forbidden");

        echo "There was a problem with your submission, please try again.";

    }



?>