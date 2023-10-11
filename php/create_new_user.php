<!DOCTYPE html>
<html>
    <head>
        <title>Νέος Χρήστης</title>
        <link rel="stylesheet" href="../css/create_new_user.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div id="user-form-container">
            <h2>Δημιουργία νέου χρήστη</h2>
            <br>
            <form method="post" action="" novalidate>
                <div class="form-item">
                    <label for="firstname">Όνομα:</label><br>
                    <input type="text" name="firstname" class="input"><br>
                </div>
                <div class="form-item">
                    <label for="lastname">Επώνυμο:</label><br>
                    <input type="text" name="lastname" class="input"><br>
                </div>
                <div class="form-item">
                    <label for="loginame">Loginame:</label><br>
                    <input type="text" name="loginame" class="input"><br>
                </div>
                <div class="form-item">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" class="input"><br>
                </div>
                <div class="form-item">
                    <label for="is-tutor">Tutor:</label><br>
                    <input type="checkbox" name="is-tutor" id="is-tutor-checkbox"><br>
                </div>
                <button id="submit-button" type="submit">Υποβολή</button><br>
            </form>
        </div>
    </body>
</html>