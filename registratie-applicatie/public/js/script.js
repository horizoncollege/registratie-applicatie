// script for importing files
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
