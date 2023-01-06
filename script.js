
    let check = false;

    let nom = document.querySelector('#name');
nom.addEventListener('keyup', ()=> {
    if (nom.value == '') {
        document.querySelector(".validName").innerHTML = '<img src="/formulaire/img/close.png" alt="">'
    } else {
        document.querySelector(".validName").innerHTML = '<img src="/formulaire/img/check.png" alt="">'
        check = true;
    }
    
})
let prenom = document.querySelector('#firstname');
prenom.addEventListener('keyup', ()=> {
    if (prenom.value == '') {
        document.querySelector(".validFirstName").innerHTML = '<img src="/formulaire/img/close.png" alt="">'
    } else {
        document.querySelector(".validFirstName").innerHTML = '<img src="/formulaire/img/check.png" alt="">'
        check = true;
    }
})
let mail = document.querySelector('#mail');
mail.addEventListener('keyup', ()=> {
    if (mail.value == '') {
        document.querySelector(".validMail").innerHTML = '<img src="/formulaire/img/close.png" alt="">'
    } else {
        document.querySelector(".validMail").innerHTML = '<img src="/formulaire/img/check.png" alt="">'
        check = true;
    }
})


