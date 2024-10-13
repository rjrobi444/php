const uploadForm = document.getElementById('upload-form');
const uploadBtn = document.getElementById('upload-btn');
const uploadStatus = document.getElementById('upload-status');

uploadBtn.addEventListener('click', (e) => {
    e.preventDefault();
    const formData = new FormData(uploadForm);
    fetch('/upload', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        uploadStatus.textContent = `Product uploaded successfully! ID: ${data.id}`;
    })
    .catch(error => {
        uploadStatus.textContent = `Error uploading product: ${error.message}`;
    });
});