<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
    <style>
        .dropzone {
            border: 2px dashed #ccc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }
        .dropzone.dragover {
            border-color: #000;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
<h1>Bedrijfsinformatie Formulier</h1>
<form action="/verzenden" method="post" enctype="multipart/form-data">
    <label for="naam">Naam:</label><br>
    <input type="text" id="naam" name="naam"><br><br>

    <label for="bedrijfsnaam">Bedrijfsnaam:</label><br>
    <input type="text" id="bedrijfsnaam" name="bedrijfsnaam"><br><br>

    <label for="plaats">Plaats:</label><br>
    <input type="text" id="plaats" name="plaats"><br><br>

    <label for="contactpersoon">Contactpersoon:</label><br>
    <input type="text" id="contactpersoon" name="contactpersoon"><br><br>

    <label for="functie">Functie:</label><br>
    <input type="text" id="functie" name="functie"><br><br>

    <label for="telefoonnummer">Telefoonnummer:</label><br>
    <input type="tel" id="telefoonnummer" name="telefoonnummer"><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email"><br><br>

    <label for="website">Website:</label><br>
    <input type="url" id="website" name="website"><br><br>

    <label for="bedrijfsactiviteit">Bedrijfsactiviteit / Core business:</label><br>
    <input type="text" id="bedrijfsactiviteit" name="bedrijfsactiviteit"><br><br>

    <label for="aantal_medewerkers">Aantal medewerkers:</label><br>
    <input type="number" id="aantal_medewerkers" name="aantal_medewerkers"><br><br>

    <label for="kvk_nummer">KVK Nummer:</label><br>
    <input type="text" id="kvk_nummer" name="kvk_nummer"><br><br>

    <div class="dropzone" id="dropzone">
        Sleep je bestanden hierheen of klik om te uploaden
        <input type="file" id="fileInput" name="files[]" multiple style="display: none;">
    </div>

    <input type="submit" value="Verzenden">
</form>

<script>
    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('fileInput');

    dropzone.addEventListener('click', () => fileInput.click());

    dropzone.addEventListener('dragover', (event) => {
        event.preventDefault();
        dropzone.classList.add('dragover');
    });

    dropzone.addEventListener('dragleave', () => dropzone.classList.remove('dragover'));

    dropzone.addEventListener('drop', (event) => {
        event.preventDefault();
        dropzone.classList.remove('dragover');
        fileInput.files = event.dataTransfer.files;
    });

    fileInput.addEventListener('change', () => {
        if (fileInput.files.length > 0) {
            dropzone.textContent = `${fileInput.files.length} bestand(en) geselecteerd`;
        } else {
            dropzone.textContent = 'Sleep je bestanden hierheen of klik om te uploaden';
        }
    });
</script>
</body>
</html>
