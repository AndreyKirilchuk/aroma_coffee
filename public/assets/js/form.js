// Обработка загрузки изображения
document.querySelector('.image-upload')?.addEventListener('click', function () {
    document.getElementById('productImage').click();
});

document.getElementById('productImage')?.addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.querySelector('.upload-placeholder').style.display = 'none';
            document.getElementById('imagePreview').innerHTML =
                `<img src="${e.target.result}" style="max-width: 200px; border-radius: 8px;">`;
        }
        reader.readAsDataURL(file);
    }
});
