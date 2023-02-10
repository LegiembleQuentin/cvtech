const cvForm = document.querySelector('#cv_form');
const btnSubmit = document.querySelector('#cv_submit');


cvForm.addEventListener('submit', function(e){
    e.preventDefault();
    // btnSubmit.disabled = true;

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

    console.log(infos);

    infos = JSON.stringify(infos);

    let params = new FormData();
    params.append('action', 'add_cv');
    params.append('infos', infos);

    fetch(MYSCRIPT.ajaxUrl, {
        method: 'post',
        body: params
    }).then(function(response) {
        return response.json()
    }).then(function(data) {
        // btnSubmit.disabled = false;
        let errors = data;
        console.log(errors);

        if (!isArrayEmpty(errors)) {
            console.log('ya des erreurs')
            //skill
            setErrorMessageForArray('.error_skill', errors['skills']);

            //jobs
            setErrorMessageWithArrayKey('.error_job_name', errors['jobs'], 'name');
            setErrorMessageWithArrayKey('.error_employer', errors['jobs'], 'employer');
            setErrorMessageWithArrayKey('.error_starting_date', errors['jobs'], 'starting date');
            setErrorMessageWithArrayKey('.error_ending_date', errors['jobs'], 'ending date');
            setErrorMessageWithArrayKey('.error_city', errors['jobs'], 'city');
            setErrorMessageWithArrayKey('.error_job_desc', errors['jobs'], 'desc');



        }else{
            console.log('pas derreur');
        }

    });

})