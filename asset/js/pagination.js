let currentPage = 1;
let itemsPerPage = 5;
let pageNumbers = [];

const list = document.getElementsByClassName("person-box");
const pagination = document.getElementById("pagination");

for (let i = 1; i <= list.length; i++) {
    pageNumbers.push(i);
}

const showPage = (list, page) => {
    for (let i = 0; i < list.length; i++) {
        list[i].style.display = "none";
    }

    let startIndex = (page - 1) * itemsPerPage;
    let endIndex = Math.min(startIndex + itemsPerPage - 1, list.length - 1);
    console.log("Nombre d'éléments affichés : ", document.querySelectorAll(".person-box[style='display: block;']").length);
    console.log("endIndex:", endIndex);
    console.log("startIndex:", startIndex);
    for (let i = startIndex; i <= endIndex; i++) {
        list[i].style.display = "block";
    }
};
const appendPageLinks = (list) => {
    if (pagination) {
        pagination.innerHTML = "";
        let pages = Math.ceil(list.length / itemsPerPage);

        for (let i = 1; i <= pages; i++) {
            let button = document.createElement("button");
            button.innerText = i;
            if (currentPage === i) {
                button.classList.add("active");
            }

            button.addEventListener("click", (event) => {
                currentPage = event.target.innerText;
                showPage(list, currentPage);
                let active = document.querySelector(".active");
                active.classList.remove("active");
                event.target.classList.add("active");
            });
            pagination.appendChild(button);
        }
    }
};

showPage(list, currentPage);
appendPageLinks(list);