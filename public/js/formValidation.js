
(function(){
function checkForm(e) {
    var y = document.forms["form"]["e-mail"].value;
    var $$ = function(selector) {
        return [].slice.call(document.querySelectorAll(selector));
    }
    var username = document.querySelector('#username');
    var err_name = document.querySelector('#err_name');
    if (username.value == "") {
        err_name.innerHTML = '&times; Name should be provided.';
        username.classList.add('error');
        err_name.classList.add('errors', 'errors-position--right');
        return false;
    } else {
        err_name.innerHTML = "";
        username.classList.remove('error');
        err_name.classList.remove('errors', 'errors-position--right');
    };
    var email = document.querySelector('#email');
    var err_email = document.querySelector('#err_email')
    if (email.value == "") {
        err_email.innerHTML = '&times; E-mail should be provided.';
        email.classList.add('error');
        err_email.classList.add('errors', 'errors-position--right');
        return false;
    }
    at = y.indexOf("@");
    dot = y.indexOf(".");
    if (at < 1 || dot < 1) {
        err_email.innerHTML = '* Your email is invalid./*@/';
        email.classList.add('error');
        err_email.classList.add('errors', 'errors-position--right');
        return false;
    } else {
        err_email.innerHTML = "";
        email.classList.remove('error');
        err_email.classList.remove('errors', 'errors-position--right');
    };
    var message = document.querySelector('#message');
    var err_message = document.querySelector('#err_message')
    if (message.value == "") {
        err_message.innerHTML = '&times;  Notice should be provided. ';
        message.classList.add('error');
        err_message.classList.add('errors', 'errors-position--right');
        return false;
    } else {
        err_message.innerHTML = "";
        message.classList.remove('error');
        err_message.classList.remove('errors', 'errors-position--right');

    };

    return true;
};
var myForm = document.querySelector('#my-form');
myForm.onsubmit = checkForm.bind(myForm);
})()
