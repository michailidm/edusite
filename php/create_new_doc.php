<!DOCTYPE html>
<html>
    <head>
        <title>Νέο Έγγραφο</title>
        <link rel="stylesheet" href="../css/create_new_doc.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div id="doc-form-container">
            <h2>Δημιουργία νέου εγγράφου</h2>
            <br>
            <form method="post" action="" novalidate>
                <div class="form-item">
                    <label for="title">Τίτλος:</label><br>
                    <input type="text" name="title" id="title-input"><br>
                </div>
                <div class="form-item">
                    <label for="description">Περιγραφή:</label><br>
                    <textarea name="description" rows="5" cols="50"></textarea><br>
                </div>
                <div class="form-item">
                    <label for="file">Αρχείο:</label><br>
                    <input type="file" name="file"><br>
                </div>
                <button id="submit-button" type="submit">Υποβολή</button><br>
            </form>
        </div>
    </body>
</html>