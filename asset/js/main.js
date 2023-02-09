
$(window).on('load',function () {
    $('#diapoow3').flexslider({
        animation: "slide",
        controlNav: false,
        directionNav: true,
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 5
    });
});

const team = [
    {
        name: "Prince",
        firstName: "Ndiaye",
        age: 25,
        job: "Developpeur Fullstack",
        desc: "La collaboration est la clé pour faire un excellent travail."
    },
    {
        name: "Claude",
        firstName: "Niang",
        age: 27,
        job: "Developpeur Fullstack",
        desc: "Chacun de nous apporte ses propres compétences et expériences uniques pour former une équipe inarrêtable."
    },
    {
        name: "Lendoly",
        firstName: "Diop",
        age: 31,
        job: "Developpeur Fullstack",
        desc: "c'est en équipe que nous allons plus loin."
    },
    {
        name: "Mohamed",
        firstName: "Diouf",
        age: 28,
        job: "Developpeur Fullstack",
        desc: "L'union fait la force, et c'est en travaillant ensemble que nous atteindrons nos objectifs"
    }
];

const images2 = document.querySelectorAll('.img img');
const name = document.querySelector('.nom_prenom p:first-of-type');
const firstName = document.querySelector('.nom_prenom p:last-of-type');
const age = document.querySelector('.age_job p:first-of-type');
const job = document.querySelector('.age_job p:last-of-type');
const desc = document.querySelector('.desc p');
const profilImage = document.querySelector('.img_profil img');

images2.forEach((image, index) => {
    image.addEventListener('mouseover', () => {
        const member = team[index];
        name.textContent = "Nom :  " + member.name;
        firstName.textContent = "Prénom :  " + member.firstName;
        age.textContent = "Age :  " + member.age;
        job.textContent = member.job;
        desc.textContent = member.desc;
        profilImage.src = image.src;
    });
});

