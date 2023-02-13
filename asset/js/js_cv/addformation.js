const btnAddFormation = document.querySelector('#add_formation_button');
const formationContainer = document.querySelector('#formation_container');
let k = 1;


btnAddFormation.addEventListener('click', function() {
    let newDiv = document.createElement('div');
    newDiv.classList.add('one_formation');

    let inputContainerDiv = document.createElement('div');
    inputContainerDiv.classList.add('cv_forma_one_input');
    let formationNameLabel = createElement('label', '', '', '', '');
    formationNameLabel.htmlFor = 'formation_name_' + k;
    formationNameLabel.innerText = ' Titre de la formation ';
    inputContainerDiv.appendChild(formationNameLabel);
    let newFormationNameInput = createElement('input', 'formation_name_' + k, 'Bachelor développement web', 'formation_name_' + k, 'input_formation_name');
    inputContainerDiv.appendChild(newFormationNameInput);
    let newErrorFormationNameSpan = createElement('span', '', '', 'error_formation_name_' + k, 'error_formation_name');
    newErrorFormationNameSpan.classList.add('cv_error');
    inputContainerDiv.appendChild(newErrorFormationNameSpan);
    newDiv.appendChild(inputContainerDiv);

    inputContainerDiv = document.createElement('div');
    inputContainerDiv.classList.add('cv_forma_one_input');
    let schoolLabel = createElement('label', '', '', '', '');
    schoolLabel.htmlFor = 'school_' + k;
    schoolLabel.innerText = ' Ecole ';
    inputContainerDiv.appendChild(schoolLabel);
    let newSchoolInput = createElement('input', 'school_' + k, 'Need for school', 'school_' + k, 'input_school');
    inputContainerDiv.appendChild(newSchoolInput);
    let newErrorSchoolSpan = createElement('span', '', '', 'error_school_' + k, 'error_school');
    newErrorSchoolSpan.classList.add('cv_error');
    inputContainerDiv.appendChild(newErrorSchoolSpan);
    newDiv.appendChild(inputContainerDiv);

    inputContainerDiv = document.createElement('div');
    inputContainerDiv.classList.add('cv_forma_one_input');
    let degreeLabel = createElement('label', '', '', '', '');
    degreeLabel.htmlFor = 'degree_' + k;
    degreeLabel.innerText = ' Diplôme ';
    inputContainerDiv.appendChild(degreeLabel);
    let newDegreeInput = createElement('input', 'degree_' + k, 'Bac +3', 'degree_' + k, 'input_degree');
    inputContainerDiv.appendChild(newDegreeInput);
    let newErrorDegreeSpan = createElement('span', '', '', 'error_degree_' + k, 'error_degree');
    newErrorDegreeSpan.classList.add('cv_error');
    inputContainerDiv.appendChild(newErrorDegreeSpan);
    newDiv.appendChild(inputContainerDiv);

    inputContainerDiv = document.createElement('div');
    inputContainerDiv.classList.add('cv_forma_one_input');
    let formaCityLabel = createElement('label', '', '', '', '');
    formaCityLabel.htmlFor = 'forma_city_' + k;
    formaCityLabel.innerText = ' Lieu ';
    inputContainerDiv.appendChild(formaCityLabel);
    let newFormaCityInput = createElement('input', 'forma_city_' + k, 'Rouen', 'forma_city_' + k, 'input_forma_city');
    inputContainerDiv.appendChild(newFormaCityInput);
    let newErrorFormaCitySpan = createElement('span', '', '', 'error_forma_city_' + k, 'error_forma_city');
    newErrorFormaCitySpan.classList.add('cv_error');
    inputContainerDiv.appendChild(newErrorFormaCitySpan);
    newDiv.appendChild(inputContainerDiv);

    inputContainerDiv = document.createElement('div');
    inputContainerDiv.classList.add('cv_forma_one_input');
    let formaStartingDateLabel = createElement('label', '', '', '', '');
    formaStartingDateLabel.htmlFor = 'forma_starting_date_' + k;
    formaStartingDateLabel.innerText = ' Date de début ';
    inputContainerDiv.appendChild(formaStartingDateLabel);
    let newFormaStartingDateInput = createElement('input', 'forma_starting_date_' + k, 'MM / YYYY', 'forma_starting_date_' + k, 'input_forma_starting_date', 'month');
    inputContainerDiv.appendChild(newFormaStartingDateInput);
    let newErrorFormaStartingDateSpan = createElement('span', '', '', 'error_forma_starting_date_' + k, 'error_forma_starting_date');
    newErrorFormaStartingDateSpan.classList.add('cv_error');
    inputContainerDiv.appendChild(newErrorFormaStartingDateSpan);
    newDiv.appendChild(inputContainerDiv);

    inputContainerDiv = document.createElement('div');
    inputContainerDiv.classList.add('cv_forma_one_input');
    let formaEndingDateLabel = createElement('label', '', '', '', '');
    formaEndingDateLabel.htmlFor = 'forma_ending_date_' + k;
    formaEndingDateLabel.innerText = ' Date de fin ';
    inputContainerDiv.appendChild(formaEndingDateLabel);
    let newFormaEndingDateInput = createElement('input', 'forma_ending_date_' + k, 'MM / YYYY', 'forma_ending_date_' + k, 'input_forma_ending_date', 'month');
    inputContainerDiv.appendChild(newFormaEndingDateInput);
    let newErrorFormaEndingDateSpan = createElement('span', '', '', 'error_forma_ending_date_' + k, 'error_forma_ending_date');
    newErrorFormaEndingDateSpan.classList.add('cv_error');
    inputContainerDiv.appendChild(newErrorFormaEndingDateSpan);
    newDiv.appendChild(inputContainerDiv);

    inputContainerDiv = document.createElement('div');
    inputContainerDiv.classList.add('cv_forma_textarea');
    let formaDescLabel = createElement('label', '', '', '', '');
    formaDescLabel.htmlFor = 'forma_desc_' + j;
    formaDescLabel.innerText = ' Description de la formation ';
    inputContainerDiv.appendChild(formaDescLabel);
    let newFormaDescTextarea = createElement('textarea', 'forma_desc' + k, '', 'forma_desc' + k, 'textarea_forma_desc');
    newFormaDescTextarea.cols = '30';
    newFormaDescTextarea.rows = '10';
    inputContainerDiv.appendChild(newFormaDescTextarea);
    let newErrorFormaDescSpan = createElement('span', '', '', 'error_forma_desc_' + k, 'error_forma_desc');
    newErrorFormaDescSpan.classList.add('cv_error');
    inputContainerDiv.appendChild(newErrorFormaDescSpan);
    newDiv.appendChild(inputContainerDiv);

    let separatorDiv = document.createElement('div');
    separatorDiv.classList.add('separator_div');

    let xmark = document.createElement ('span');
    xmark.classList.add('cv_section_xmark');
    xmark.id = 'xmark_exp_' + k;
    xmark.innerText = ' X';
    xmark.style.cursor = 'pointer';
    newDiv.appendChild(xmark);

    xmark.addEventListener('click', function(){
        newDiv.remove();
        separatorDiv.remove();
    })

    formationContainer.appendChild(newDiv);
    formationContainer.appendChild(separatorDiv);
    k++;
})
