<?php
if ($GLOBALS["loggedIn"] == FALSE) {
    header("Location: ./login.php");
}
?>

<!DOCTYPE html>
<head>
    <title>Αρχική σελίδα</title>
    <link rel="stylesheet" href="../css/index.css">
    <meta charset="UTF-8">
</head>
<body>
    <header>
        <h1>Αρχική σελίδα</h1>
    </header>
    <div id="content">
        <nav id="navigation_menu">
            <?php require 'menu.php'; ?>
        </nav>
        <main>
            Καλώς ήρθατε στον ιστόχωρο του διαδικτυακού μαθήματος
             <i>Διαδικτυακός Προγραμματισμός</i>, στόχος του οποίου είναι η εξοικείωση 
             με την έννοια του Διαδικτυακού Προγραμματισμού και η δημιουργία ενός στατικού
             ιστόχωρου με τη χρήση των γλωσσών HTML και CSS.<br>
            Στον ιστόχωρο αυτό θα βρείτε τις ενότητες:
            <ul>
                <li><i>Ανακοινώσεις</i>, που περιέχει τις ανακοινώσεις του μαθήματος</li>
                <li><i>Επικοινωνία</i>, όπου υπάρχει μια φόρμα επικοινωνίας με τον καθηγητή</li>
                <li><i>Έγγραφα μαθήματος</i>, που περιέχει τα έγγραφα του μαθήματος, και </li>
                <li><i>Εργασίες</i>, όπου υπάρχουν οι εργασίες του μαθήματος.</li>
            </ul>

            <div>
                <img src="book_pile.jpg" width="200px" alt="Pile of books image">
            </div>
        </main>
    </div>
    <footer>

    </footer>
</body>
</html>