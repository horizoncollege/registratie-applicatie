<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
</head>

<body>
<h1>Bedrijfsinformatie Formulier</h1>
<form action="/form.store" method="post" enctype="multipart/form-data">
    <label for="naam">Naam:</label><br>
    <input type="text" id="name" name="naam" required><br><br>

    <label for="bedrijfsnaam">Bedrijfsnaam:</label><br>
    <input type="text" id="company" name="bedrijfsnaam" required><br><br>

    <label for="plaats">Plaats:</label><br>
    <input type="text" id="place" name="plaats" required><br><br>

    <label for="contactpersoon">Contactpersoon:</label><br>
    <input type="text" id="contactperson" name="contactpersoon" required><br><br>

    <label for="functie">Functie:</label><br>
    <input type="text" id="function" name="functie" required><br><br>

    <label for="telefoonnummer">Telefoonnummer:</label><br>
    <input type="tel" id="phone" name="telefoonnummer" required pattern="[0-9]{10}"><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="website">Website:</label><br>
    <input type="url" id="website" name="website"><br><br>

    <label for="bedrijfsactiviteit">Bedrijfsactiviteit / Core business:</label><br>
    <input type="text" id="activity" name="bedrijfsactiviteit" required><br><br>

    <label for="aantal_medewerkers">Aantal medewerkers:</label><br>
    <input type="number" id="workers" name="aantal_medewerkers" required><br><br>

    <label for="kvk_nummer">KVK Nummer:</label><br>
    <input type="text" id="kvk_number" name="kvk_nummer" required><br><br>

    <label for="fileInput" class="dropzone" id="dropzone">
        Sleep je bestanden hierheen of klik om te uploaden
        <input type="file" id="fileInput" name="files[]" multiple style="display: none;">
    </label><br><br>

    <input type="submit" value="Verzenden">
</form>
</body>
</html>
