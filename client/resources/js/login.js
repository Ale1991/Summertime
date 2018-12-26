// Open
function openModal() {
    document.getElementById('mymodal').style.display = 'block';
}

// Close
function closeModal() {
    document.getElementById('mymodal').style.display = 'none';
}

$(document).ready(function () {
    $('#modal-btn').on('click', openModal);
    $('#closemodal').on('click', closeModal);
})