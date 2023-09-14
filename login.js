document.addEventListener("DOMContentLoaded", (event) => {
    const modalBox = document.querySelector('.modal-box');
    const infoToggle = document.querySelector('.info-cta');
    const closeBtn = document.querySelector('.close-btn');
    const infoBtn = document.querySelector('.modal-button')
    const dropDwn = document.querySelector('.majors-cta');
    const options = document.querySelector('.majors-toggle');
  
    infoToggle.addEventListener('click', () => {
        modalBox.showModal();
    })
  
    closeBtn.addEventListener('click', () => {
        modalBox.close();
    })
  
    infoBtn.addEventListener('click', () => {
        modalBox.close();
    })
  
    dropDwn.addEventListener('click', () => {
        options.classList.toggle('show');
        console.log('clicked');
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
});
