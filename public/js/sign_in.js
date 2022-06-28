function validazione(event){

    if(form.email.value.length == 0 ||
        form.password.value.length == 0){

            alert('Compilare tutti i campi. ');
            event.preventDefault();
        }
}

const form = document.forms['log_in'];
form.addEventListener('submit', validazione);
