<!DOCTYPE html>
<head>
    <title>Επικοινωνία</title>
    <link rel="stylesheet" href="../css/communication.css">
    <meta charset="UTF-8">
</head>
<body>
    <header>
        <h1>Επικοινωνία</h1>
    </header>
    <div id="content">
        <nav>
            <?php require 'menu.php'; ?>
        </nav>
        <main>
            Η συγκεκριμένη ιστοσελίδα θα περιέχει δύο 
            δυνατότητες για την αποστολή e-mail στον καθηγητή: <br>
            •	Μέσω web φόρμας<br>
            •	Με χρήση e-mail διεύθυνσης<br>
            
            <h2>Αποστολή e-mail μέσω web φόρμας</h2>

            <?php
            $email = $subject = $message = "";
            $emailErr = $subjectErr = $messageErr = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["email"])) {
                    $emailErr = 'Απαιτείται email αποστολέα';
                } else {
                    $email = test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Παρακαλώ δώστε ένα έγκυρο email.";
                    }
                }

                if (empty($_POST["subject"])) {
                    $subjectErr = 'Απαιτείται θέμα';
                } else {
                    $subject = test_input($_POST["subject"]);
                    // subject must be an alphanumeric
                }

                if (empty($_POST["message"])) {
                    $messageErr = 'Απαιτείται κείμενο';
                } else {
                    $message = test_input($_POST["message"]);
                    // message must be an alphanumeric
                }

                // send the email to all tutors

                if (mail('tutor@csd.auth.gr',
                $_POST["subject"],
                $_POST["message"],
                'From: ' . $_POST["email"])) {
                    echo 
                    '<div id="email-sent-successfully-message" style="background-color:green;padding:2rem;">
                        Το μήνυμα στάλθηκε επιτυχώς.<br><br>
                        Έχετε αποστείλει τα παρακάτω στοιχεία:<br> 
                        Email αποστολέα: ' . $_POST["email"] . '<br>
                        Θέμα: ' . $_POST["subject"] . '<br>
                        Κείμενο: ' . $_POST["message"] . '<br>
                    </div>';
                } else {
                    echo '<div style="background-color:red;padding:2rem;">
                        Αποτυχία αποστολής email.
                    </div>';
                }
                
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div>
                    <label for="email">Email Αποστολέα:</label><br>
                    <input type="text" name="email" value="<?php echo $email; ?>" required><br>
                </div>
                <div>
                    <label for="subject">Θέμα:</label><br>
                    <input type="text" name="subject" value="<?php echo $subject; ?>" required><br>
                </div>
                <div>
                    <label for="message">Κείμενο:</label><br>
                    <textarea rows="5" cols="50" name="message" required><?php echo $message; ?></textarea><br>
                </div>
                <div>
                    <input type="submit" name="submit" value="Αποστολή"><br>
                </div>
            </form>

            <hr>

            <h2>Αποστολή e-mail με χρήση e-mail διεύθυνσης</h2>
            Εναλλακτικά μπορείτε να αποστείλετε e-mail στην 
            παρακάτω διεύθυνση ηλεκτρονικού ταχυδρομείου:
            <a href="mailto:tutor@csd.auth.test.gr">tutor@csd.auth.test.gr</a>

        </main>
    </div>
    <footer>

    </footer>
</body>
</html>