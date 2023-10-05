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

    function searchTable() {
        var input, filter, table, tr, td, i, j;
        input = document.getElementById("search-bar");
        filter = input.value.toUpperCase();
        table = document.querySelector(".interns-table");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    } 

    document.querySelector('#search-bar').addEventListener('keyup', searchTable);

});