<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $situation = htmlspecialchars($_POST['situation']);

    if (!$email) {
        die("Invalid email address.");
    }

    $keywords = [
        "job" => ["A great opportunity may come soon. Stay prepared!", "Focus on improving your skills and the right opportunity will appear."],
        "love" => ["Someone special is thinking of you.", "Keep your heart open; love may surprise you soon."],
        "study" => ["Your hard work will pay off. Keep studying!", "Focus and consistency will lead to success."],
        "health" => ["Take care of your body; small steps can lead to big improvements.", "A healthier lifestyle is coming your way."],
        "money" => ["A financial opportunity might come unexpectedly.", "Be cautious with spending, but rewards are ahead."]
    ];

    $prediction = "Your future is bright! Keep going with positivity.";

    foreach ($keywords as $key => $messages) {
        if (stripos($situation, $key) !== false) {
            $prediction = $messages[array_rand($messages)];
            break;
        }
    }


    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;
        $mail->Username = 'naman.ng2003@gmail.com'; // Your email id
        $mail->Password = '***************';    // Your app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('your_email@gmail.com', 'Future Predictor');
        $mail->addAddress($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Your Future Prediction';
        $mail->Body    = "<h3>Hello $name,</h3><p>Based on your situation: <em>$situation</em></p><p><strong>Prediction:</strong> $prediction</p>";

        $mail->send();
        echo "<h2>Prediction sent to your email!</h2><p>$prediction</p>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header("Location: index.php");
    exit();
}
