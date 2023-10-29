const dialog = document.getElementById('detailsDialog');
const span = document.querySelector('.span-dialog');
const closeBtn = document.getElementById('closeBtn');

span.addEventListener('click', () => {
    dialog.showModal();
});

closeBtn.addEventListener('click', () => {
    dialog.close();
});
