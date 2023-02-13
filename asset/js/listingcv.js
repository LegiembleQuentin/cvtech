let currentPage = 1;
let itemsPerPage = 5;

const prevButton = document.createElement('button');
prevButton.innerText = 'Précédent';
prevButton.classList.add('prev-button');

const nextButton = document.createElement('button');
nextButton.innerText = 'Suivant';
nextButton.classList.add('next-button');

prevButton.addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        renderData();
    }
});

nextButton.addEventListener('click', () => {
    if (currentPage < totalPages) {
        currentPage++;
        renderData();
    }
});

const totalPages = Math.ceil(data.length / itemsPerPage);
const dataForCurrentPage = data.slice((currentPage - 1) * itemsPerPage, currentPage * itemsPerPage);
const recruteur = document.querySelector('#recruteur');
const divModal = document.querySelector('.content_txt');
const div_Modal = document.querySelector('#modal1')
const modalClose = document.querySelector('.modal-close');

const dropdownToggle = document.querySelector('.nav-link.dropdown-toggle');
const dropdownMenu = document.querySelector('.dropdown-menu');

let params = new FormData();
params.append('action', 'get_Cv_data');

fetch(MYSCRIPT.ajaxUrl, {
    method: 'post',
    body: params
})
    .then(response => response.json())
    .then(data => {
        let cvInfos = data;
        data = data['main'];
        console.log(cvInfos);
        data.forEach(donnee => {
            // cvInfos['formations'].forEach(formation => {
            //     if (formation['id_CV'] == donnee['id']){
            //         AFFICHER LES INFOS DE LA FORMATION DANS LA MODAL (ex: innerText = formation['name'])
            //     }
            // })

            const container = document.createElement('div');
            container.classList.add('person-box');
            const divImg = document.createElement('div');
            divImg.classList.add('div-bonhome-cv');
            const img = document.createElement('img');
            img.src = MYSCRIPT.logo_inscription;
            divImg.appendChild(img);
            container.appendChild(divImg);

            const link = document.createElement('a');
            link.href = "#";
            link.innerText = 'Voir plus';
            link.classList.add('link_modal');

            const details = [
                {text: 'Nom : ', property: 'name'},
                {text: 'Prenom : ', property: 'firstname'},
                {text: 'Job recherché : ', property: 'job'},
                {text: 'Téléphone : ', property: 'phone'},
                {text: 'Email : ', property: 'mail'},
                {text: 'Age : ', property: 'age'},
                {text: 'Permis : ', property: 'permis'}
            ];

            const detailsDiv = document.createElement('div');

            details.forEach(({text, property}) => {
                const p = document.createElement('p');
                p.innerText = text;
                const span = document.createElement('span');
                span.classList.add(`${property}_listingcv`);
                span.innerText = donnee[property] || 'pas renseigné';
                p.appendChild(span);
                detailsDiv.appendChild(p);
            });

            container.appendChild(detailsDiv);
            container.appendChild(link);
            div_Modal.style.display = "none";

            detailsDiv.addEventListener('click', () => {
                div_Modal.style.display = "block";
                divModal.style.display = "block";
                divModal.innerHTML = '';
                div_Modal.style.display = '';
                divModal.appendChild(detailsDiv.cloneNode(true));
            });

            link.addEventListener('click', () => {
                div_Modal.style.display = "block";
                divModal.style.display = "block";
                divModal.innerHTML = '';
                div_Modal.style.display = '';
                divModal.appendChild(detailsDiv.cloneNode(true));
            });

            recruteur.appendChild(container);
        });

        modalClose.addEventListener('click', () => {
            div_Modal.style.display = "none";
            dropdownMenu.style.display = "none";
        });
    });


dropdownToggle.addEventListener('click', function() {
    if (dropdownMenu.style.display === "block") {
        dropdownMenu.style.display = "none";
        dropdownMenu.style.opacity = 0;
        dropdownMenu.style.transform = "translateY(-20px)";

    } else {
        dropdownMenu.style.display = "block";
        dropdownMenu.style.opacity = 1;
        dropdownMenu.style.transform = "translateY(0px)";
    }
});

