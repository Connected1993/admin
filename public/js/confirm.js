import sendRequest from "./request.js";

// форма регистрации
const FORM = document.getElementById('registration');
const BTN_REG = FORM.querySelector('input[data=reg]');

BTN_REG.addEventListener('click',registration);


    window.intlTelInput(FORM.querySelector('input[name=phone]'), {
        localizedCountries: {ru:"Russian"},
        onlyCountries: ["ru","ua","by","kz"],
        utilsScript: "/public/library/intl-tel-input/build/js/utils.js"
  });



function registration(Event)
{
    let btn =  Event.target;

    FORM.querySelectorAll('input').forEach(input => input.classList.remove('error_confirm'));
    
    // отключаем стандартную обработку кнопки
    Event.preventDefault();
    
    let form = new FormData(FORM)
    let cansel = false;
    for (let [k,v] of form ) {
        if (v === '') {
            cansel = true;
            // alert('заполните все поля!');
            FORM.querySelector(`input[name=${k}]`).classList.add('error_confirm');
        }
    }

    if (cansel) {
        // завершаем работу функции регистрация
        return false;
    }

    if ( form.get('password') === form.get('passwordConfirm') ) {
        FORM.querySelectorAll('input[type=password]').forEach(input => input.classList.add('success_confirm'));
    }
    else {
        // если пароли не совпадают
        FORM.querySelectorAll('input[type=password]').forEach(input => input.classList.add('error_confirm'));
        // FORM.querySelectorAll('input[type=password]')[0].classList.add('error_confirm')
        // FORM.querySelectorAll('input[type=password]')[1].classList.add('error_confirm')
        return false
    }
   
    return false;
    sendRequest({
        method:'POST',
        body: new FormData(FORM)
    })
}



export default FORM;

