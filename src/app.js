document.addEventListener("DOMContentLoaded", (event) => {
    const dropDwn = document.querySelector('.majors-cta');
    const options = document.querySelector('.majors-toggle');
    const dropDwnIcon = document.querySelector('.dropdown-icon');
    const hamburger = document.querySelector('.hamburger-icon');
    const sidebar = document.querySelector('.sidebar');
    
    dropDwn.addEventListener('click', () => {
        options.classList.toggle('show');
        dropDwnIcon.classList.toggle('rotate');
        console.log('clicked');
    })

    hamburger.addEventListener('click', () => {
        sidebar.classList.toggle('move');
    })
});