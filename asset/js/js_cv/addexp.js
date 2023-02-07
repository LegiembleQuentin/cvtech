const btnAddJob = document.querySelector('#add_job_button');
const expContainer = document.querySelector('#exp_container');
let j = 2;

btnAddJob.addEventListener('click', function(){
    let newDiv = document.createElement('div');
    newDiv.classList.add('one_exp');

    let jobNameLabel = createElement('label', '', '', '', '');
    jobNameLabel.htmlFor = 'job_name_' + j;
    jobNameLabel.innerText = ' Titre de l\'emploi ';
    newDiv.appendChild(jobNameLabel);
    let newJobNameInput = createElement('input', 'job_name_' + j, 'Développeur front', 'job_name_' + j, 'input_job_name');
    newDiv.appendChild(newJobNameInput);
    let newErrorJobNameSpan = createElement('span', '', '', 'error_job_name_' + j, 'error_job_name');
    newErrorJobNameSpan.classList.add('cv_error');
    newDiv.appendChild(newErrorJobNameSpan);

    let employerLabel = createElement('label', '', '', '', '');
    employerLabel.htmlFor = 'employer_' + j;
    employerLabel.innerText = ' Employeur ';
    newDiv.appendChild(employerLabel);
    let newEmployerInput = createElement('input', 'employer_' + j, 'Développeur front', 'employer_' + j, 'input_employer');
    newDiv.appendChild(newEmployerInput);
    let newErrorEmployerSpan = createElement('span', '', '', 'error_employer_' + j, 'error_employer');
    newErrorEmployerSpan.classList.add('cv_error');
    newDiv.appendChild(newErrorEmployerSpan);

    let startingDateLabel = createElement('label', '', '', '', '');
    startingDateLabel.htmlFor = 'starting_date_' + j;
    startingDateLabel.innerText = ' Date de début ';
    newDiv.appendChild(startingDateLabel);
    let newStartingDateInput = createElement('input', 'starting_date_' + j, 'MM / YYYY', 'starting_date_' + j, 'input_starting_date', 'month');
    newDiv.appendChild(newStartingDateInput);
    let newErrorStartingDateSpan = createElement('span', '', '', 'error_starting_date_' + j, 'error_starting_date');
    newErrorStartingDateSpan.classList.add('cv_error');
    newDiv.appendChild(newErrorStartingDateSpan);

    let endingDateLabel = createElement('label', '', '', '', '');
    endingDateLabel.htmlFor = 'ending_date_' + j;
    endingDateLabel.innerText = ' Date de fin ';
    newDiv.appendChild(endingDateLabel);
    let newEndingDateInput = createElement('input', 'ending_date_' + j, 'MM / YYYY', 'ending_date_' + j, 'input_ending_date', 'month');
    newDiv.appendChild(newEndingDateInput);
    let newErrorEndingDateSpan = createElement('span', '', '', 'error_ending_date_' + j, 'error_ending_date');
    newErrorEndingDateSpan.classList.add('cv_error');
    newDiv.appendChild(newErrorEndingDateSpan);

    let cityLabel = createElement('label', '', '', '', '');
    cityLabel.htmlFor = 'city_' + j;
    cityLabel.innerText = ' Lieu ';
    newDiv.appendChild(cityLabel);
    let newCityInput = createElement('input', 'city_' + j, 'Rouen', 'city_' + j, 'input_city');
    newDiv.appendChild(newCityInput);
    let newErrorCitySpan = createElement('span', '', '', 'error_city_' + j, 'error_city');
    newErrorCitySpan.classList.add('cv_error');
    newDiv.appendChild(newErrorCitySpan);

    let jobDescLabel = createElement('label', '', '', '', '');
    jobDescLabel.htmlFor = 'job_desc_' + j;
    jobDescLabel.innerText = ' Description du poste ';
    newDiv.appendChild(jobDescLabel);
    let newJobDescTextarea = createElement('textarea', 'job_desc' + j, '', 'job_desc' + j, 'textarea_job_desc');
    newJobDescTextarea.cols = '30';
    newJobDescTextarea.rows = '10';
    newDiv.appendChild(newJobDescTextarea);
    let newErrorJobDescSpan = createElement('span', '', '', 'error_job_desc_' + j, 'error_job_desc');
    newErrorJobDescSpan.classList.add('cv_error');
    newDiv.appendChild(newErrorJobDescSpan);

    let xmark = document.createElement ('span');
    xmark.classList.add('cv_section_xmark');
    xmark.id = 'xmark_exp_' + j;
    xmark.innerText = ' X';
    xmark.style.cursor = 'pointer';
    newDiv.appendChild(xmark);

    xmark.addEventListener('click', function(){
        newDiv.remove();
    })

    expContainer.appendChild(newDiv);
    j++;
})