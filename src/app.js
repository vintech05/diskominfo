document.addEventListener("DOMContentLoaded", (event) => {
    const dropDwn = document.querySelector('.majors-cta');
    const options = document.querySelector('.majors-toggle');
    const dropDwnIcon = document.querySelector('.dropdown-icon');
    const hamburger = document.querySelector('.hamburger-icon');
    const sidebar = document.querySelector('.sidebar');
    const addBtn = document.querySelector('.add-new-cta');
    const cancelBtn = document.querySelector('.cancel-btn');
    const form = document.querySelector('.form-wrapper');
    
    dropDwn.addEventListener('click', () => {
        options.classList.toggle('show');
        dropDwnIcon.classList.toggle('rotate');
        console.log('clicked');
    })

    hamburger.addEventListener('click', () => {
        sidebar.classList.toggle('move');
    })

    addBtn.addEventListener('click', () => {
        form.classList.add('active');
    })

    cancelBtn.addEventListener('click', ()=> {
        form.classList.remove('active');
    })

});