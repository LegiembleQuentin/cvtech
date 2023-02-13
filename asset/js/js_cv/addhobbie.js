const btnAddHobbie =  document.querySelector('#add_hobbie_button');
const hobbiesContainer = document.querySelector('#hobbies_container');
let l = 1;

btnAddHobbie.addEventListener('click', function() {
    let newDiv = document.createElement('div');
    newDiv.classList.add('one_hobbie');
    newDiv.id = 'hobbie' + l + '_container';

    let newInput = document.createElement('input');
    newInput.type = 'text';
    newInput.name = 'hobbie_'+l;
    newInput.id = 'hobbie_'+l;
    newInput.classList.add ('input_hobbie');
    newInput.placeholder = 'Basketball';
    newDiv.appendChild(newInput);

    let newErrorSpan = document.createElement('span');
    newErrorSpan.classList.add('error_hobbie');
    newErrorSpan.id = 'error_hobbie_'+l;
    newDiv.appendChild(newErrorSpan);

    let xmark = document.createElement ('span');
    xmark.classList.add('cv_section_xmark');
    xmark.id = 'xmark_hobbie_' + l;
    xmark.innerText = ' X';
    xmark.style.cursor = 'pointer';

    xmark.addEventListener('click', function(){
        newDiv.remove();
    })

    newDiv.appendChild(xmark);

    hobbiesContainer.appendChild(newDiv);

    l++;
})