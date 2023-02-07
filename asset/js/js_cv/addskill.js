const btnAddSkill =  document.querySelector('#add_skill_button');
const skillContainer = document.querySelector('#skill_container');
let i = 2;


btnAddSkill.addEventListener('click', function(){
    let newDiv = document.createElement('div');
    newDiv.classList.add('one_skill');
    newDiv.id = 'skill_'+i+'_container';

    let newInput = document.createElement('input');
    newInput.type = 'text';
    newInput.name = 'skill_'+i;
    newInput.id = 'skill_'+i;
    newInput.classList.add ('input_skill');
    newInput.placeholder = 'HTML5';
    newDiv.appendChild(newInput);

    let newErrorSpan = document.createElement('span');
    newErrorSpan.classList.add('error_skill');
    newErrorSpan.id = 'error_skill_'+i;
    newDiv.appendChild(newErrorSpan);

    let xmark = document.createElement ('span');
    xmark.classList.add('cv_section_xmark');
    xmark.id = 'xmark_skill_' + i;
    xmark.innerText = ' X';
    xmark.style.cursor = 'pointer';

    xmark.addEventListener('click', function(){
        newDiv.remove();
    })

    newDiv.appendChild(xmark);

    skillContainer.appendChild(newDiv);


    i++;
});