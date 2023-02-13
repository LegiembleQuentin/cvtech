const cvForm = document.querySelector('#cv_form');
const btnSubmit = document.querySelector('#cv_submit');


cvForm.addEventListener('submit', function(e){
    e.preventDefault();
    // btnSubmit.disabled = true;

    let lookedJob = document.querySelector('#job').value;
    let name = document.querySelector('#name').value;
    let firstname = document.querySelector('#firstname').value;
    let email = document.querySelector('#email').value;
    let phone = document.querySelector('#phone').value;
    let age = document.querySelector('#age').value;
    let mainDesc = document.querySelector('#main_desc').value;


    let infos = [];
    //AJOUT DES SKILLS
    let allSkills = document.querySelectorAll('.input_skill')
    let skillList = [];
    allSkills.forEach(function(skill){
        skillList.push(skill.value);
    })
    infos.push(skillList);

    
    //AJOUT DES EXPERIENCES PRO
    let jobInfos = [];
    updateCVArray('.input_job_name', jobInfos);
    updateCVArray('.input_employer', jobInfos);
    updateCVArray('.input_starting_date', jobInfos);
    updateCVArray('.input_ending_date', jobInfos);
    updateCVArray('.input_city', jobInfos);
    updateCVArray('.textarea_job_desc', jobInfos);

    infos.push(jobInfos);


    //AJOUT DES FORMATIONS
    let formaInfos = [];
    updateCVArray('.input_formation_name', formaInfos);
    updateCVArray('.input_school', formaInfos);
    updateCVArray('.input_degree', formaInfos);
    updateCVArray('.input_forma_city', formaInfos);
    updateCVArray('.input_forma_starting_date', formaInfos);
    updateCVArray('.input_forma_ending_date', formaInfos);
    updateCVArray('.textarea_forma_desc', formaInfos);
    infos.push(formaInfos);

    let allHobbies = document.querySelectorAll('.input_hobbie')
    let hobbieList = [];
    allHobbies.forEach(function(hobbie){
        hobbieList.push(hobbie.value);
    })
    infos.push(hobbieList);

    console.log(infos);

    infos = JSON.stringify(infos);

    let params = new FormData();
    params.append('action', 'add_cv');
    params.append('infos', infos);
    params.append('lookedJob', lookedJob);
    params.append('name', name);
    params.append('firstname', firstname);
    params.append('email', email);
    params.append('phone', phone);
    params.append('age', age);
    params.append('mainDesc', mainDesc);

    fetch(MYSCRIPT.ajaxUrl, {
        method: 'post',
        body: params
    }).then(function(response) {
        return response.json()
    }).then(function(data) {
        // btnSubmit.disabled = false;
        let errors = data;
        console.log(errors);

        if (!isObjectEmpty(errors)) {
            console.log('ya des erreurs')

            //main
            let spanErrorJob = document.querySelector('#error_job_cv');
            setErrorMessage(spanErrorJob, errors['job']);

            let spanErrorName = document.querySelector('#error_name_cv');
            setErrorMessage(spanErrorName, errors['name']);

            let spanErrorFirstname = document.querySelector('#error_firstname_cv');
            setErrorMessage(spanErrorFirstname, errors['firstname']);

            let spanErrorEmail = document.querySelector('#error_email_cv');
            setErrorMessage(spanErrorEmail, errors['email']);

            let spanErrorPhone = document.querySelector('#error_phone_cv');
            setErrorMessage(spanErrorPhone, errors['phone']);

            let spanErrorAge = document.querySelector('#error_age_cv');
            setErrorMessage(spanErrorAge, errors['age']);

            let spanErrorDesc = document.querySelector('#error_main_desc_cv');
            setErrorMessage(spanErrorDesc, errors['main desc']);



            //skill
            setErrorMessageForArray('.error_skill', errors['skills']);

            //jobs
            setErrorMessageWithArrayKey('.error_job_name', errors['jobs'], 'name');
            setErrorMessageWithArrayKey('.error_employer', errors['jobs'], 'employer');
            setErrorMessageWithArrayKey('.error_starting_date', errors['jobs'], 'starting date');
            setErrorMessageWithArrayKey('.error_ending_date', errors['jobs'], 'ending date');
            setErrorMessageWithArrayKey('.error_city', errors['jobs'], 'city');
            setErrorMessageWithArrayKey('.error_job_desc', errors['jobs'], 'desc');

            //formations
            setErrorMessageWithArrayKey('.error_formation_name', errors['formations'], 'name');
            setErrorMessageWithArrayKey('.error_school', errors['formations'], 'school');
            setErrorMessageWithArrayKey('.error_degree', errors['formations'], 'degree');
            setErrorMessageWithArrayKey('.error_forma_city', errors['formations'], 'city');
            setErrorMessageWithArrayKey('.error_forma_starting_date', errors['formations'], 'starting date');
            setErrorMessageWithArrayKey('.error_forma_ending_date', errors['formations'], 'ending date');
            setErrorMessageWithArrayKey('.error_forma_desc', errors['formations'], 'desc');

            //hobbies
            setErrorMessageForArray('.error_hobbie', errors['hobbies']);

        }else{
            console.log('pas derreur');
        }

    });

})