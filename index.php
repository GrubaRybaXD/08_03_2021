<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System SELECT, UPDATE, INSERT, DELETE</title>
</head>
<body>

    <fieldset>
        <legend>
            Dodawanie do bazy danych
        </legend>
        <form action="dodaj.php" method="post">
            nazwa: <input type="text" name="nazwa"/>
            <input type="submit" name="submit" value="Dodaj" />
        </form>
    </fieldset>
    <div style="text-align:centre;">
        <a href="pobierz.php">Pobieranie Danych z Bazy Danych</a> <br>
        <a href="aktualizuj.php">Aktualizacja Danych z Bazy Danych</a>
    </div>
    
</body>
</html>