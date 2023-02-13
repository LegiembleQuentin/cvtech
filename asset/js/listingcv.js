/*
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
*/

/*const totalPages = Math.ceil(data.length / itemsPerPage);
const dataForCurrentPage = data.slice((currentPage - 1) * itemsPerPage, currentPage * itemsPerPage);*/
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
        data1 = data['main'];
        console.log(cvInfos);
        data1.forEach(donnee => {

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
                cvInfos['formations'].forEach(formation => {
                    if (formation['id_CV'] == donnee['id']) {
                        const formationDiv = document.createElement('div');
                        const formationName = document.createElement('p');
                        if (formation['name'] !== null) {
                            formationName.innerText = `Nom de la formation: ${formation['name']}`;
                        }
                        const formationDegree = document.createElement('p');
                        if (formation['degree'] !== null) {
                            formationDegree.innerText = `Diplôme : ${formation['degree']}`;
                        }
                        const formationDesc = document.createElement('p');
                        if (formation['desc'] !== null) {
                            formationDesc.innerText = `Description : ${formation['desc']}`;
                        }
                        const formationStartingDate = document.createElement('p');
                        if (formation['starting_date'] !== null) {
                            formationStartingDate.innerText = `Date de début : ${formation['starting_date']}`;
                        }
                        const formationEndingDate = document.createElement('p');
                        if (formation['ending_date'] !== null) {
                            formationEndingDate.innerText = `Date de fin : ${formation['ending_date']}`;
                        }

                        formationDiv.appendChild(formationName);
                        formationDiv.appendChild(formationDegree);
                        formationDiv.appendChild(formationDesc);
                        formationDiv.appendChild(formationStartingDate);
                        formationDiv.appendChild(formationEndingDate);
                        divModal.appendChild(formationDiv);
                    }
                });
                cvInfos['exp'].forEach(experience => {
                    if (experience['id_CV'] === donnee['id']) {
                        const experienceDiv = document.createElement('div');
                        const experienceName = document.createElement('p');
                        if (experience['name'] !== null) {
                            experienceName.innerText = `Nom de l'expérience: ${experience['name']}`;
                            experienceDiv.appendChild(experienceName);
                        }
                        const experienceEmployer = document.createElement('p');
                        if (experience['employer'] !== null) {
                            experienceEmployer.innerText = `Employeur : ${experience['employer']}`;
                            experienceDiv.appendChild(experienceEmployer);
                        }
                        const experienceDesc = document.createElement('p');
                        if (experience['description'] !== null) {
                            experienceDesc.innerText = `Description : ${experience['description']}`;
                            experienceDiv.appendChild(experienceDesc);
                        }
                        const experienceStartingDate = document.createElement('p');
                        if (experience['starting_date'] !== null) {
                            experienceStartingDate.innerText = `Date de début : ${experience['starting_date']}`;
                            experienceDiv.appendChild(experienceStartingDate);
                        }
                        const experienceCity = document.createElement('p');
                        if (experience['city'] !== null) {
                            experienceCity.innerText = `Ville : ${experience['city']}`;
                            experienceDiv.appendChild(experienceCity);
                        }
                        const experienceEndingDate = document.createElement('p');
                        if (experience['ending_date'] !== null) {
                            experienceEndingDate.innerText = `Date de fin : ${experience['ending_date']}`;
                            experienceDiv.appendChild(experienceEndingDate);
                        }
                        divModal.appendChild(experienceDiv);
                    }
                });
                cvInfos['skills'].forEach(skill => {
                    if (skill['id_CV'] === donnee['id']) {
                        const skillDiv = document.createElement('div');
                        const skillName = document.createElement('p');
                        if (skill['name'] !== null) {
                            skillName.innerText = `Nom de la compétence: ${skill['name']}`;
                        }
                        const skillDesc = document.createElement('p');
                        if (skill['desc'] !== null) {
                            skillDesc.innerText = `Description : ${skill['desc']}`;
                        }
                        skillDiv.appendChild(skillName);
                        skillDiv.appendChild(skillDesc);
                        divModal.appendChild(skillDiv);
                    }
                });

                cvInfos['hobbies'].forEach(hobby => {
                    if (hobby['id_CV'] === donnee['id']) {
                        if (hobby['name'] != null) {
                            const hobbyDiv = document.createElement('div');
                            const hobbyName = document.createElement('p');
                            hobbyName.innerText = `Nom : ${hobby['name']}`;
                            hobbyDiv.appendChild(hobbyName);
                            divModal.appendChild(hobbyDiv);
                        }
                    }
                });

            });

            link.addEventListener('click', () => {
                div_Modal.style.display = "block";
                divModal.style.display = "block";
                divModal.innerHTML = '';
                div_Modal.style.display = '';
                divModal.appendChild(detailsDiv.cloneNode(true));
                cvInfos['formations'].forEach(formation => {
                    if (formation['id_CV'] == donnee['id']) {
                        const formationDiv = document.createElement('div');
                        const formationName = document.createElement('p');
                        if (formation['name'] !== null) {
                            formationName.innerText = `Nom de la formation: ${formation['name']}`;
                        }
                        const formationDegree = document.createElement('p');
                        if (formation['degree'] !== null) {
                            formationDegree.innerText = `Diplôme : ${formation['degree']}`;
                        }
                        const formationDesc = document.createElement('p');
                        if (formation['desc'] !== null) {
                            formationDesc.innerText = `Description : ${formation['desc']}`;
                        }
                        const formationStartingDate = document.createElement('p');
                        if (formation['starting_date'] !== null) {
                            formationStartingDate.innerText = `Date de début : ${formation['starting_date']}`;
                        }
                        const formationEndingDate = document.createElement('p');
                        if (formation['ending_date'] !== null) {
                            formationEndingDate.innerText = `Date de fin : ${formation['ending_date']}`;
                        }

                        formationDiv.appendChild(formationName);
                        formationDiv.appendChild(formationDegree);
                        formationDiv.appendChild(formationDesc);
                        formationDiv.appendChild(formationStartingDate);
                        formationDiv.appendChild(formationEndingDate);
                        divModal.appendChild(formationDiv);
                    }
                });
                cvInfos['exp'].forEach(experience => {
                    if (experience['id_CV'] === donnee['id']) {
                        const experienceDiv = document.createElement('div');
                        const experienceName = document.createElement('p');
                        if (experience['name'] !== null) {
                            experienceName.innerText = `Nom de l'expérience: ${experience['name']}`;
                            experienceDiv.appendChild(experienceName);
                        }
                        const experienceEmployer = document.createElement('p');
                        if (experience['employer'] !== null) {
                            experienceEmployer.innerText = `Employeur : ${experience['employer']}`;
                            experienceDiv.appendChild(experienceEmployer);
                        }
                        const experienceDesc = document.createElement('p');
                        if (experience['description'] !== null) {
                            experienceDesc.innerText = `Description : ${experience['description']}`;
                            experienceDiv.appendChild(experienceDesc);
                        }
                        const experienceStartingDate = document.createElement('p');
                        if (experience['starting_date'] !== null) {
                            experienceStartingDate.innerText = `Date de début : ${experience['starting_date']}`;
                            experienceDiv.appendChild(experienceStartingDate);
                        }
                        const experienceCity = document.createElement('p');
                        if (experience['city'] !== null) {
                            experienceCity.innerText = `Ville : ${experience['city']}`;
                            experienceDiv.appendChild(experienceCity);
                        }
                        const experienceEndingDate = document.createElement('p');
                        if (experience['ending_date'] !== null) {
                            experienceEndingDate.innerText = `Date de fin : ${experience['ending_date']}`;
                            experienceDiv.appendChild(experienceEndingDate);
                        }
                        divModal.appendChild(experienceDiv);
                    }
                });
                cvInfos['skills'].forEach(skill => {
                    if (skill['id_CV'] === donnee['id']) {
                        const skillDiv = document.createElement('div');
                        const skillName = document.createElement('p');
                        if (skill['name'] !== null) {
                            skillName.innerText = `Nom de la compétence: ${skill['name']}`;
                        }
                        const skillDesc = document.createElement('p');
                        if (skill['desc'] !== null) {
                            skillDesc.innerText = `Description : ${skill['desc']}`;
                        }
                        skillDiv.appendChild(skillName);
                        skillDiv.appendChild(skillDesc);
                        divModal.appendChild(skillDiv);
                    }
                });

                cvInfos['hobbies'].forEach(hobby => {
                    if (hobby['id_CV'] === donnee['id']) {
                        if (hobby['name'] != null) {
                            const hobbyDiv = document.createElement('div');
                            const hobbyName = document.createElement('p');
                            hobbyName.innerText = `Nom : ${hobby['name']}`;
                            hobbyDiv.appendChild(hobbyName);
                            divModal.appendChild(hobbyDiv);
                        }
                    }
                });
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

