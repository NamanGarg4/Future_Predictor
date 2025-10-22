# Future_Predictor
This is a simple PHP-based simulation project that predicts a person’s future based on the situation they describe. Once the situation is submitted, it automatically sends an email with the prediction to the user.

Features
1. Users can register their name and email.
2. Users can describe their current situation.
3. Generates a prediction based on keywords in the situation.
4. Sends the prediction via email using PHPMailer.

How It Works
1. Open `index.php` and fill in your name, email, and current situation.
2. When submitted, `predict.php` analyzes the situation for keywords like `job`, `love`, `study`, `health`, or `money`.
3. A relevant prediction message is generated.
4. The prediction is sent to the user’s email using PHPMailer.

Setup Steps
1. Copy the project folder inside your XAMPP/htdocs directory.
2. Open XAMPP Control Panel and start Apache.
3. Install PHPMailer using (in bash): composer require phpmailer/phpmailer
4. Open `predict.php` and edit your email settings:
$mail->Host = 'smtp.gmail.com'; 
$mail->Username = 'name@gmail.com'; // Your email id
$mail->Password = 'app_password';   // Your app password
5. Open your browser and go to:
http://localhost/future_predictor/index.php

Note
1. Make sure `php_openssl.dll` is enabled in your `php.ini`.
2. Use an App Password if using Gmail for SMTP.

Author
Naman Garg
