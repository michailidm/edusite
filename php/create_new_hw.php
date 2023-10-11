<!DOCTYPE html>
<html>
    <head>
        <title>Νέα Εργασία</title>
        <link rel="stylesheet" href="../css/create_new_hw.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div id="doc-form-container">
            <h2>Δημιουργία νέας εργασίας</h2>
            <br>
            <form method="post" action="" novalidate>
                <div class="form-item">
                    <label for="goals">Στόχοι:</label><br>
                    <textarea name="goals" rows="5" cols="50"></textarea><br>
                </div>
                <div class="form-item">
                    <label for="deliverables">Παραδοτέα:</label><br>
                    <textarea name="deliverables" rows="5" cols="50"></textarea><br>
                </div>
                <div class="form-item">
                    <label for="file">Αρχείο εκφώνησης:</label><br>
                    <input type="file" name="file"><br>
                </div>
                <div class="form-item">
                    <label for="deadline">Ημερομηνία παράδοσης:</label><br>
                    <input type="text" name="deadline" id="deadline-input"><br>
                </div>
                <button id="submit-button" type="submit">Υποβολή</button><br>
            </form>
        </div>
    </body>
</html>