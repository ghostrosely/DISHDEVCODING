<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Homepage voor Vegan food">
    <meta name="keywords" content="Restaurant : Vegan Food, Food, Vegan">
    <meta name="author" content="Yoana Madzhovska">
    <title>Reserveren - Vegan Restaurant</title>
    <link rel="stylesheet" href="Css/style.css">
</head>

<header>
    <?php include "PHP/header.php" ?>
</header>

<section class="banner">

    </section>

<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $message = $_POST["message"];

    if (empty($name) || empty($email) || empty($phone) || empty($date) || empty($time)) {
        $error_message = "Please fill in all the required fields.";
    } else {

        $success_message = "Your reservation has been submitted successfully.";
    }
}
?>

    <main>
        <div class="content">
        <div class="reservation-page content">
        <div class="reservation-form">
                <h2>Make a Reservation</h2>
                <?php
                if (isset($error_message)) {
                    echo "<p class='error'>" . $error_message . "</p>";
                } elseif (isset($success_message)) {
                    echo "<p class='success'>" . $success_message . "</p>";
                }
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="phone" placeholder="Phone" required>
                    <input type="date" name="date" placeholder="Date" required>
                    <input type="time" name="time" placeholder="Time" required>
                    <textarea name="message" rows="5" placeholder="Special requests or notes"></textarea>
                    <button type="submit">Submit Reservation</button>
                </form>
            </div>

            <div class="image-section">
                <img src="IMG/jason-leung-poI7DelFiVA-unsplash.jpg" alt="Reservation Image">
                <p>Reserve your table now to enjoy our delicious cuisine and cozy atmosphere.</p>
            </div>
        </div>
    </main>

    <footer>
        <?php include "PHP/footer.php"?>
    </footer>
</body>
</html>
