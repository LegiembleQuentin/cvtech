const btnAddJob = document.querySelector('#add_job_button');
const expContainer = document.querySelector('#exp_container');
let j = 1;
let error

btnAddJob.addEventListener('click', function(){
    let newDiv = document.createElement('div');
    newDiv.classList.add('one_exp');
    
    let divJobName = document.createElement('div');
    divJobName.classList.add('cv_job_one_input');
    let jobNameLabel = createElement('label', '', '', '', '');
    jobNameLabel.htmlFor = 'job_name_' + j;
    jobNameLabel.innerText = ' Titre de l\'emploi ';
    divJobName.appendChild(jobNameLabel);
    let newJobNameInput = createElement('input', 'job_name_' + j, 'Développeur front', 'job_name_' + j, 'input_job_name');
    divJobName.appendChild(newJobNameInput);
    let newErrorJobNameSpan = createElement('span', '', '', 'error_job_name_' + j, 'error_job_name');
    newErrorJobNameSpan.classList.add('cv_error');
    divJobName.appendChild(newErrorJobNameSpan);
    newDiv.appendChild(divJobName);

    let divEmployer = document.createElement('div');
    divEmployer.classList.add('cv_job_one_input');
    let employerLabel = createElement('label', '', '', '', '');
    employerLabel.htmlFor = 'employer_' + j;
    employerLabel.innerText = ' Employeur ';
    divEmployer.appendChild(employerLabel);
    let newEmployerInput = createElement('input', 'employer_' + j, 'Développeur front', 'employer_' + j, 'input_employer');
    divEmployer.appendChild(newEmployerInput);
    let newErrorEmployerSpan = createElement('span', '', '', 'error_employer_' + j, 'error_employer');
    newErrorEmployerSpan.classList.add('cv_error');
    divEmployer.appendChild(newErrorEmployerSpan);
    newDiv.appendChild(divEmployer);

    let divJobSD = document.createElement('div');
    divJobSD.classList.add('cv_job_one_input');
    let startingDateLabel = createElement('label', '', '', '', '');
    startingDateLabel.htmlFor = 'starting_date_' + j;
    startingDateLabel.innerText = ' Date de début ';
    divJobSD.appendChild(startingDateLabel);
    let newStartingDateInput = createElement('input', 'starting_date_' + j, 'MM / YYYY', 'starting_date_' + j, 'input_starting_date', 'month');
    divJobSD.appendChild(newStartingDateInput);
    let newErrorStartingDateSpan = createElement('span', '', '', 'error_starting_date_' + j, 'error_starting_date');
    newErrorStartingDateSpan.classList.add('cv_error');
    divJobSD.appendChild(newErrorStartingDateSpan);
    newDiv.appendChild(divJobSD);

    let divJobED = document.createElement('div');
    divJobED.classList.add('cv_job_one_input');
    let endingDateLabel = createElement('label', '', '', '', '');
    endingDateLabel.htmlFor = 'ending_date_' + j;
    endingDateLabel.innerText = ' Date de fin ';
    divJobED.appendChild(endingDateLabel);
    let newEndingDateInput = createElement('input', 'ending_date_' + j, 'MM / YYYY', 'ending_date_' + j, 'input_ending_date', 'month');
    divJobED.appendChild(newEndingDateInput);
    let newErrorEndingDateSpan = createElement('span', '', '', 'error_ending_date_' + j, 'error_ending_date');
    newErrorEndingDateSpan.classList.add('cv_error');
    divJobED.appendChild(newErrorEndingDateSpan);
    newDiv.appendChild(divJobED);

    let divJobCity = document.createElement('div');
    divJobCity.classList.add('cv_job_one_input')
    let cityLabel = createElement('label', '', '', '', '');
    cityLabel.htmlFor = 'city_' + j;
    cityLabel.innerText = ' Lieu ';
    divJobCity.appendChild(cityLabel);
    let newCityInput = createElement('input', 'city_' + j, 'Rouen', 'city_' + j, 'input_city');
    divJobCity.appendChild(newCityInput);
    let newErrorCitySpan = createElement('span', '', '', 'error_city_' + j, 'error_city');
    newErrorCitySpan.classList.add('cv_error');
    divJobCity.appendChild(newErrorCitySpan);
    newDiv.appendChild(divJobCity);

    let divJobDesc = document.createElement('div');
    divJobDesc.classList.add('cv_job_textarea')
    let jobDescLabel = createElement('label', '', '', '', '');
    jobDescLabel.htmlFor = 'job_desc_' + j;
    jobDescLabel.innerText = ' Description du poste ';
    divJobDesc.appendChild(jobDescLabel);
    let newJobDescTextarea = createElement('textarea', 'job_desc' + j, '', 'job_desc' + j, 'textarea_job_desc');
    newJobDescTextarea.cols = '30';
    newJobDescTextarea.rows = '10';
    divJobDesc.appendChild(newJobDescTextarea);
    let newErrorJobDescSpan = createElement('span', '', '', 'error_job_desc_' + j, 'error_job_desc');
    newErrorJobDescSpan.classList.add('cv_error');
    divJobDesc.appendChild(newErrorJobDescSpan);
    newDiv.appendChild(divJobDesc);

    let separatorDiv = document.createElement('div');
    separatorDiv.classList.add('separator_div');
    expContainer.appendChild(separatorDiv);

    let xmark = document.createElement ('span');
    xmark.classList.add('cv_section_xmark');
    xmark.id = 'xmark_exp_' + j;
    xmark.innerText = ' X';
    xmark.style.cursor = 'pointer';
    newDiv.appendChild(xmark);

    xmark.addEventListener('click', function(){
        separatorDiv.remove();
        newDiv.remove();
    })


    expContainer.appendChild(newDiv);
    j++;
})