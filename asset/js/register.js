
const form = document.querySelector('#form_register');
const btnSubmit = document.querySelector('#register_submit');

const inputName = document.querySelector('#name');
let errorName = document.querySelector('#error_name_register')

const inputFirstname = document.querySelector('#firstname');
let errorFirstname = document.querySelector('#error_firstname_register')

const inputIdentifiant = document.querySelector('#id');
let errorIdentifiant = document.querySelector('#error_id_register')

const inputEmail = document.querySelector('#email');
let errorEmail = document.querySelector('#error_email_register')

const inputPassword = document.querySelector('#password');
let errorPassword = document.querySelector('#error_password_register')

const inputPassword2 = document.querySelector('#password2');

const inputPhone = document.querySelector('#phone');
let errorPhone = document.querySelector('#error_phone_register')

const inputBirthdate = document.querySelector('#birthdate');
let errorBirthdate = document.querySelector('#error_birthdate_register')


let errors = {
    // 'name': 'Veuillez renseigner ce champ',
    // 'firstname': 'Veuillez renseigner ce champ',
    // 'identifiant': 'Veuillez renseigner ce champ',
    // 'email': 'Veuillez renseigner ce champ',
    // 'password': 'Veuillez renseigner ce champ',
    // 'phone': '',
    // 'birthdate': '',
};

inputName.addEventListener('change', function(e) {
    errors['name'] = validationForm(inputName, 2, 150);
    errorName.innerText = errors['name'];
})
inputFirstname.addEventListener('change', function(e) {
    errors['firstname'] = validationForm(inputFirstname, 2, 150);
    errorFirstname.innerText = errors['firstname'];
})
inputIdentifiant.addEventListener('change', function(e) {
    errors['identifiant'] = validationForm(inputIdentifiant, 4, 150);
    errorIdentifiant.innerText = errors['identifiant'];
})
inputEmail.addEventListener('change', function(e) {
    errors['email'] = validationEmail(inputEmail);
    errorEmail.innerText = errors['email'];
})
inputPassword.addEventListener('change', function(e) {
    errors['password'] = validationForm(inputPassword, 8, 20);
    errorPassword.innerText = errors['password'];
})
inputPassword2.addEventListener('change', function(e) {
    if (inputPassword2.value !== inputPassword.value && !errors['password']){
        errors['password'] = 'Les deux mots de passes doivent être identiques.';
    }else{
        errors['password'] = '';
    }
    errorPassword.innerText = errors['password'];
})
inputPhone.addEventListener('change', function(e) {
    errors['phone'] = validationOptionnalPhone(inputPhone);
    errorPhone.innerText = errors['phone'];
})

inputBirthdate.addEventListener('change', function(e) {
    errors['birthdate'] = validationOptionnalDate(inputBirthdate);
    errorBirthdate.innerText = errors['birthdate'];
})


form.addEventListener('submit', function (e) {
    e.preventDefault();

    if(isArrayEmpty(errors)) {
        btnSubmit.disabled = true;

        let params = new FormData();
        params.append('action', 'get_register');
        params.append('name', inputName.value);
        params.append('firstname', inputFirstname.value);
        params.append('identifiant', inputIdentifiant.value);
        params.append('email', inputEmail.value);
        params.append('password', inputPassword.value);
        if (inputPhone.value) {
            params.append('phone', inputPhone.value);
        }
        if (inputBirthdate.value) {
            params.append('birthdate', inputBirthdate.value);
        }

        fetch(MYSCRIPT.ajaxUrl, {
            method: 'post',
            body: params
        }).then(function(response) {
            return response.json()
        }).then(function(data) {
            btnSubmit.disabled = false;

            if (!isArrayEmpty(data)) {
                setErrorMessage(errorIdentifiant, data['identifiant']);
                setErrorMessage(errorEmail, data['email']);
                setErrorMessage(errorName, data['name']);
                setErrorMessage(errorFirstname, data['firstname']);
                setErrorMessage(errorPassword, data['password']);
                setErrorMessage(errorBirthdate, data['birthdate']);
                setErrorMessage(errorPhone, data['phone']);
            }else{
                window.location.href = MYSCRIPT.home;
            }
        });

    }else {
        errorIdentifiant.innerText = errors['identifiant'];
        errorEmail.innerText = errors['email'];
        errorName.innerText = errors['name'];
        errorFirstname.innerText = errors['firstname'];
        errorPassword.innerText = errors['password'];
        errorPhone.innerText = errors['phone'];
        errorBirthdate.innerText = errors['birthdate'];
        console.log(errors);
    }

})