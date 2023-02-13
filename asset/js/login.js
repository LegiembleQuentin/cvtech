const loginNav = document.querySelector('#login_nav')
const loginBurger = document.querySelector('#login_burger')
const btnConnexion = document.querySelector('#login form input[type=submit]')
const modalLogin = document.querySelector('#login')
const xmark = document.querySelector('#login div.xmark')

loginNav.addEventListener('click', toggleModal(modalLogin));
loginBurger.addEventListener('click', toggleModal(modalLogin));
xmark.addEventListener('click', toggleModal(modalLogin));

btnConnexion.addEventListener('click', function (e) {
    e.preventDefault();
    btnConnexion.disabled = true;
    let inputEmail = document.querySelector('#login form input[type=text]');
    let inputPassword = document.querySelector('#login form input[type=password]');


    let params = new FormData();
    params.append('action', 'get_login');
    params.append('log', inputEmail.value);
    params.append('pwd', inputPassword.value);

    fetch(MYSCRIPT.ajaxUrl, {
        method: 'post',
        body: params
    }).then(function (response) {
        return response.json()
    }).then(function (data) {
        if (data != '') {
            btnConnexion.disabled=false;
            const error = document.querySelector('#login .loginform .error')
            error.innerText = data;
        } else {
            window.location.href = MYSCRIPT.home;
        }
    });
})