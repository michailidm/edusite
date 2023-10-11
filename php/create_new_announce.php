<!DOCTYPE html>
<html>
    <head>
        <title>Νέα Ανακοίνωση</title>
        <link rel="stylesheet" href="../css/create_new_announce.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div id="doc-form-container">
            <h2>Δημιουργία νέας ανακοίνωσης</h2>
            <br>
            <form method="post" action="" novalidate>
               <div class="form-item">
                    <label for="subject">Θέμα:</label><br>
                    <input type="text" name="subject" id="subject-input"><br>
                </div>
                <div class="form-item">
                    <label for="content">Περιεχόμενο:</label><br>
                    <textarea name="content" rows="5" cols="50"></textarea><br>
                </div>
                <button id="submit-button" type="submit">Υποβολή</button><br>
            </form>
        </div>
    </body>
</html>