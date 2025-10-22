<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Predictor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Future Predictor</h1>
        <form action="predict.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Your Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="situation">Describe your current situation:</label>
            <textarea name="situation" id="situation" rows="5" required></textarea>

            <button type="submit">Predict My Future</button>
        </form>
    </div>
</body>
</html>
