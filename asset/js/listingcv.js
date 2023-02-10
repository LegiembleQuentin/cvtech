
const recruteur = document.querySelector('#recruteur');


let params = new FormData();
params.append('action', 'get_Cv_data')

fetch(MYSCRIPT.ajaxUrl, {
    method: 'post',
    body: params
}).then(function(response) {
    return response.json()
}).then(function(data) {
    console.log(data);
    data.forEach(function(donnee) {
        const container = document.createElement('div');
        container.classList.add('person-box')
        const nom = document.createElement('p');
        nom.innerText = 'Nom : ';
        const span_nom = document.createElement('span');
        span_nom.classList.add('name_listingcv');
        nom.appendChild(span_nom);

        const div_img = document.createElement('div')
        div_img.classList.add('div-bonhome-cv')
        const img = document.createElement('img');
        img.src = MYSCRIPT.logo_inscription;
        div_img.appendChild(img);


        const a = document.createElement('a');
        a.href = "#";
        a.innerText = 'Voir plus';

        container.appendChild(div_img);
        container.append(nom);

        const prenom = document.createElement('p');
        prenom.innerText = 'Prenom : ';
        const span_prenom = document.createElement('span');
        span_prenom.classList.add('firstname_listingcv');
        prenom.appendChild(span_prenom);
        container.append(prenom);

        const job = document.createElement('p');
        job.innerText = 'Job recherché : ';
        const span_job = document.createElement('span');
        span_job.classList.add('job_listingcv');
        job.appendChild(span_job);
        container.append(job);

        const phone = document.createElement('p');
        phone.innerText = 'Téléphone : ';
        const span_phone = document.createElement('span');
        span_phone.classList.add('phone_listingcv');
        phone.appendChild(span_phone);
        container.append(phone);


        const mail = document.createElement('p');
        mail.innerText = 'Email : ';
        const span_mail = document.createElement('span');
        span_mail.classList.add('mail_listingcv');
        mail.appendChild(span_mail);
        container.append(mail);


        const age = document.createElement('p');
        age.innerText = 'age : ';
        const span_age = document.createElement('span');
        span_age.classList.add('age_listingcv');
        age.appendChild(span_age);
        container.append(age);


        const permis = document.createElement('p');
        permis.innerText = 'Permis : ';
        const span_permis = document.createElement('span');
        span_permis.classList.add('permis_listingcv');
        permis.appendChild(span_permis);
        container.append(permis);

        a.classList.add('.modal')
        container.appendChild(a)
        recruteur.appendChild(container);

        if (donnee.name!= ''){
            span_nom.innerText = donnee.name;

        }
        else {
            span_nom.innerText = 'pas renseigné';
        }
        if (donnee.firstname!= ''){
            span_prenom.innerText = donnee.firstname;
        }
        else{
            span_prenom.innerText = 'pas renseigné';
        }
        if(donnee.job!= ''){
            span_job.innerText = donnee.job;
        }
        else{
            span_job.innerText = 'pas renseigné';
        }
        if(donnee.phone!= ''){
            span_phone.innerText = donnee.phone;
        }
        else {
            span_phone.innerText = 'pas renseigné';
        }
        if (donnee.email!= '') {
            span_mail.innerText = donnee.email;
        }else {
            span_mail.innerText = 'pas renseigné';
        }

        if (donnee.age!== null && donnee.permis!== null){
            span_age.innerText = donnee.age;
            span_permis.innerText = donnee.permis;
        }else {
            span_age.innerText = 'pas renseigné';
            span_permis.innerText = 'pas renseigné';
        }
    });

});


document.querySelectorAll('.modal').forEach(function(modal) {
    modal.addEventListener('click', function(e) {
        let currentModal = document.querySelector('.modal[style="display: block;"]');
        if (currentModal && !currentModal.contains(e.target)) {
            currentModal.style.display = "none";
        }
        let modalId = this.parentNode.getAttribute('href');
        document.querySelector(modalId).style.display = "block";
    });
});

document.querySelectorAll('.close').forEach(function(close) {
    close.addEventListener('click', function() {
        let modal = close.closest('.modal');
        modal.style.display = "none";
    });
});

