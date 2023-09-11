const modalBox = document.querySelector('.modal-box');
const infoToggle = document.querySelector('.info-cta');
const closeBtn = document.querySelector('.close-btn');
const infoBtn = document.querySelector('.modal-button')

infoToggle.addEventListener('click', () => {
    modalBox.showModal();
})

closeBtn.addEventListener('click', () => {
    modalBox.close();
})

infoBtn.addEventListener('click', () => {
    modalBox.close();
})

modalBox.addEventListener('click', e => {
    const modalWindow = modalBox.getBoundingClientRect();
    if (
        e.clientX < modalWindow.left ||
        e.clientX > modalWindow.right ||
        e.clientY < modalWindow.top ||
        e.clientY > modalWindow.bottom
    ) {
        modalBox.close();
    }
})