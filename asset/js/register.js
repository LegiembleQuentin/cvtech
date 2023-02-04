const form = document.querySelector('#form_register');
const btnSubmit = document.querySelector('#register_submit');

const inputName = document.querySelector('#name');
const inputFirstname = document.querySelector('#firstname');
const inputIdentifiant = document.querySelector('#id');
const inputEmail = document.querySelector('#email');
const inputPassword = document.querySelector('#password');
const inputPassword2 = document.querySelector('#password2');
const inputPhone = document.querySelector('#phone');
const inputBirthdate = document.querySelector('#birthdate');

form.addEventListener('submit', function (e) {
    e.preventDefault();
    btnSubmit.disabled = true;
    console.log('ok');


})