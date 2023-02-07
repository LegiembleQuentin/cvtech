const btnAddFormation = document.querySelector('#add_formation_button');
const formationContainer = document.querySelector('#formation_container');
let k = 2;

btnAddFormation.addEventListener('click', function() {
    let newDiv = document.createElement('div');
    newDiv.classList.add('one_formation');

    let formationNameLabel = createElement('label', '', '', '', '');
    formationNameLabel.htmlFor = 'formation_name_' + k;
    formationNameLabel.innerText = ' Titre de la formation ';
    newDiv.appendChild(formationNameLabel);
    let newFormationNameInput = createElement('input', 'formation_name_' + k, 'Bachelor développement web', 'formation_name_' + k, 'input_formation_name');
    newDiv.appendChild(newFormationNameInput);
    let newErrorFormationNameSpan = createElement('span', '', '', 'error_formation_name_' + k, 'error_formation_name');
    newErrorFormationNameSpan.classList.add('cv_error');
    newDiv.appendChild(newErrorFormationNameSpan);

    let schoolLabel = createElement('label', '', '', '', '');
    schoolLabel.htmlFor = 'school_' + k;
    schoolLabel.innerText = ' Ecole ';
    newDiv.appendChild(schoolLabel);
    let newSchoolInput = createElement('input', 'school_' + k, 'Need for school', 'school_' + k, 'input_school');
    newDiv.appendChild(newSchoolInput);
    let newErrorSchoolSpan = createElement('span', '', '', 'error_school_' + k, 'error_school');
    newErrorSchoolSpan.classList.add('cv_error');
    newDiv.appendChild(newErrorSchoolSpan);

    let degreeLabel = createElement('label', '', '', '', '');
    degreeLabel.htmlFor = 'degree_' + k;
    degreeLabel.innerText = ' Diplôme ';
    newDiv.appendChild(degreeLabel);
    let newDegreeInput = createElement('input', 'degree_' + k, 'Bac +3', 'degree_' + k, 'input_degree');
    newDiv.appendChild(newDegreeInput);
    let newErrorDegreeSpan = createElement('span', '', '', 'error_degree_' + k, 'error_degree');
    newErrorDegreeSpan.classList.add('cv_error');
    newDiv.appendChild(newErrorDegreeSpan);

    let formaStartingDateLabel = createElement('label', '', '', '', '');
    formaStartingDateLabel.htmlFor = 'forma_starting_date_' + k;
    formaStartingDateLabel.innerText = ' Date de début ';
    newDiv.appendChild(formaStartingDateLabel);
    let newFormaStartingDateInput = createElement('input', 'forma_starting_date_' + k, 'MM / YYYY', 'forma_starting_date_' + k, 'input_forma_starting_date', 'month');
    newDiv.appendChild(newFormaStartingDateInput);
    let newErrorFormaStartingDateSpan = createElement('span', '', '', 'error_forma_starting_date_' + k, 'error_forma_starting_date');
    newErrorFormaStartingDateSpan.classList.add('cv_error');
    newDiv.appendChild(newErrorFormaStartingDateSpan);

    let formaEndingDateLabel = createElement('label', '', '', '', '');
    formaEndingDateLabel.htmlFor = 'forma_ending_date_' + k;
    formaEndingDateLabel.innerText = ' Date de fin ';
    newDiv.appendChild(formaEndingDateLabel);
    let newFormaEndingDateInput = createElement('input', 'forma_ending_date_' + k, 'MM / YYYY', 'forma_ending_date_' + k, 'input_forma_ending_date', 'month');
    newDiv.appendChild(newFormaEndingDateInput);
    let newErrorFormaEndingDateSpan = createElement('span', '', '', 'error_forma_ending_date_' + k, 'error_forma_ending_date');
    newErrorFormaEndingDateSpan.classList.add('cv_error');
    newDiv.appendChild(newErrorFormaEndingDateSpan);

    let formaDescLabel = createElement('label', '', '', '', '');
    formaDescLabel.htmlFor = 'forma_desc_' + j;
    formaDescLabel.innerText = ' Description de la formation ';
    newDiv.appendChild(formaDescLabel);
    let newFormaDescTextarea = createElement('textarea', 'forma_desc' + k, '', 'forma_desc' + k, 'textarea_forma_desc');
    newFormaDescTextarea.cols = '30';
    newFormaDescTextarea.rows = '10';
    newDiv.appendChild(newFormaDescTextarea);
    let newErrorFormaDescSpan = createElement('span', '', '', 'error_forma_desc_' + k, 'error_forma_desc');
    newErrorFormaDescSpan.classList.add('cv_error');
    newDiv.appendChild(newErrorFormaDescSpan);


    let xmark = document.createElement ('span');
    xmark.classList.add('cv_section_xmark');
    xmark.id = 'xmark_exp_' + k;
    xmark.innerText = ' X';
    xmark.style.cursor = 'pointer';
    newDiv.appendChild(xmark);

    xmark.addEventListener('click', function(){
        newDiv.remove();
    })

    formationContainer.appendChild(newDiv);
    k++;
})
