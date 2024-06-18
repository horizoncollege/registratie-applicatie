<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Bedrijfsinformatie Formulier</h1>
@if (session('success'))
    <div>{{ session('success') }}</div>
@endif
<form id="companyForm" enctype="multipart/form-data">
    @csrf
    <label for="name">Naam:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="company">Bedrijfsnaam:</label><br>
    <input type="text" id="company" name="company" required><br><br>

    <label for="place">Plaats:</label><br>
    <input type="text" id="place" name="place" required><br><br>

    <label for="contactperson">Contactpersoon:</label><br>
    <input type="text" id="contactperson" name="contactperson" required><br><br>

    <label for="function">Functie:</label><br>
    <input type="text" id="function" name="function" required><br><br>

    <label for="phone">Telefoonnummer:</label><br>
    <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}"><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="website">Website:</label><br>
    <input type="url" id="website" name="website"><br><br>

    <label for="activity">Bedrijfsactiviteit / Core business:</label><br>
    <input type="text" id="activity" name="activity" required><br><br>

    <label for="workers">Aantal medewerkers:</label><br>
    <input type="number" id="workers" name="workers" required><br><br>

    <label for="kvk_number">KVK Nummer:</label><br>
    <input type="text" id="kvk_number" name="kvk_number" required><br><br>

    <label for="fileInput" class="dropzone" id="dropzone">
        Sleep je bestanden hierheen of klik om te uploaden
        <input type="file" id="fileInput" name="fileInput" style="display: none;">
    </label><br><br>

    <input type="submit" value="Verzenden">
</form>

<script>
$(document).ready(function() {
    $('#companyForm').on('submit', function(e) {
        e.preventDefault();
        
        var formData = new FormData(this);

        $.ajax({
            url: "{{ route('form.store') }}",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Form successfully submitted');
                console.log(response);
                alert('Form successfully submitted');
            },
            error: function(response) {
                console.log('Form submission failed');
                console.log(response);
                alert('Form submission failed');
            }
        });
    });
});
</script>

</body>
</html>
