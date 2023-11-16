<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php'; // Include PHPMailer autoloader

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Validate inputs (you can add more validation if needed)

        if (empty($email) || empty($message)) {
            echo "Please fill in all fields.";
        } else {
            $to = "sylvestermsmithiii@gmail.com"; // Replace with your email address
            $subject = "New Contact Form Submission";

            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
                $mail->SMTPAuth = true;
                $mail->Username = 'sylvestermsmithiii@gmail.com'; // Replace with your SMTP username
                $mail->Password = 'sqev zayf waft sjcb'; // Replace with your SMTP password
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                //Sender
                $mail->setFrom($email);

                //Recipient
                $mail->addAddress($to);

                //Content
                $mail->isHTML(false); // Set to true if your message is HTML
                $mail->Subject = $subject;
                $mail->Body = "Email: $email\nMessage:\n$message";

                $mail->send();

                // Redirect to the root URL after successful email send
                header("Location: /"); // Replace "/" with your actual root URL
                exit(); // Make sure to exit after sending the header to prevent further execution

            } catch (Exception $e) {
                echo "Error sending email. Please try again later. Error: {$mail->ErrorInfo}";
            }
        }
    }
?>
