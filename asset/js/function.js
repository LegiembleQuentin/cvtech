function validationForm(input, min, max){
    // const input = document.querySelector('#'+name);
    const longueur = input.value.length;

    if (!longueur) {
        errorTxt = 'Veuillez renseigner ce champ';
    } else if (longueur < min) {
        errorTxt = 'Ce champ doit contenir au minimum ' + min + ' caractères';
    } else if (longueur > max) {
        errorTxt = 'Ce champ doit contenir au maximum ' + max + ' caractères';
    } else {
        errorTxt = '';
    }
    return errorTxt
}

function validationOptionnalForm(input, min, max){
    const longueur = input.value.length;

    if (!longueur) {
        errorTxt = '';
    } else if (longueur < min) {
        errorTxt = 'Ce champ doit contenir au minimum ' + min + ' caractères';
    } else if (longueur > max) {
        errorTxt = 'Ce champ doit contenir au maximum ' + max + ' caractères';
    } else {
        errorTxt = '';
    }
    return errorTxt
}

function validationEmail(input) {
    let inputText = input.value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!inputText.length) {
        errorTxt = 'Veuillez renseigner ce champ';
    } else if (!inputText.match(mailformat)) {
        errorTxt = 'Merci de renseigner une email valide';
    } else {
        errorTxt = '';
    }
    return errorTxt;
}

function validationOptionnalDate(input) {
    let inputValue = input.value;
    let date = new Date(inputValue);
    let errorTxt = '';
    if (!inputValue.length) {
        errorTxt = '';
    } else if (isNaN(date.getTime())) {
        errorTxt = 'Merci de renseigner une date valide';
    } else {
        errorTxt = '';
    }
    return errorTxt;
}

function validationOptionnalPhone(input) {
    let inputValue = input.value;
    let phoneNumberFormat = /^\d{10}$/;
    let errorTxt = '';
    if (!inputValue.length) {
        errorTxt = '';
    } else if (!inputValue.match(phoneNumberFormat)) {
        errorTxt = 'Merci de renseigner un numéro de téléphone valide (10 chiffres)';
    } else {
        errorTxt = '';
    }
    return errorTxt;
}

function isArrayEmpty(obj) {
    for (let key in obj) {
        if (obj[key]) return false;
    }
    return true;
}

function setErrorMessage(spanError, msgError) {
    if (msgError) {
        spanError.innerText = msgError;
    }
}