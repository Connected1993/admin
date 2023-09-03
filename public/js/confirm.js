import sendRequest from "./request.js";

// форма регистрации
const FORM = document.getElementById('registration');
const BTN_REG = FORM.querySelector('input[data=reg]');
const BTN_AUTH = document.querySelector('#authorization input[data=auth]');

BTN_REG.addEventListener('click',confirm);
BTN_AUTH.addEventListener('click',confirm);


const test =  window.intlTelInput(FORM.querySelector('input[name=phone]'), {
        localizedCountries: {ru:"Russian"},
        initialCountry:'ru',
        customContainer:"col-12 mb-1",
        PreferredCountries:["ru","ru"],
        onlyCountries: ["ru","ua","by","kz"],
        nationalMode:false,
        utilsScript: "/public/library/intl-tel-input/build/js/utils.js"
  });



function confirm(Event)
{
    // получаем родительский элемент
    // нашу форму
    let FORM =  Event.target.closest('form');

    FORM.querySelectorAll('input').forEach(input => input.classList.remove('error_confirm'));
    
    // отключаем стандартную обработку кнопки
    Event.preventDefault();
    
    let form = new FormData(FORM)
    let cansel = false;


    for (let [k,v] of form ) {
        console.log(k,v);
        if (v === '') {
            cansel = true;
            // alert('заполните все поля!');
            FORM.querySelector(`input[name=${k}]`).classList.add('error_confirm');
        }
    }

    if (FORM.id === 'authorization' )
    {
        form.set('passwordConfirm',form.get('password'));
    }


    if ( form.get('password') === form.get('passwordConfirm') && form.get('password').length >=8 ) {
        FORM.querySelectorAll('input[type=password]').forEach(input => input.classList.add('success_confirm'));
    }
    else {
        // если пароли не совпадают
        FORM.querySelectorAll('input[type=password]').forEach(input => input.classList.add('error_confirm'));
        return false
    }

    if (cansel) {
        // завершаем работу функции регистрация
        return false;
    }

    // отправляем запрос на сервер
    sendRequest({
        method:'POST',
        body: form
    })
}



