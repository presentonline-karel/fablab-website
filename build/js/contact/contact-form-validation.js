const formValidation = () => {
    const form = document.getElementById("form");
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");

    const inputs = document.querySelectorAll('.contactform__field__input');

    var canSubmit = true;



    form.addEventListener('submit', (e) => {
        canSubmit = true;

        //checkInputs();
        dynamicCheckInputs();

        if(canSubmit === false){
            e.preventDefault();
            //console.log(canSubmit);
            return canSubmit;
        }
    });

    
    
    function dynamicCheckInputs() {
        //get the values of the inputs without any spaces etc.
        const nameValue = name.value.trim();
        const emailValue = email.value.trim();
        const messageValue = message.value.trim();

        canSubmit = true;

        if(nameValue !== '') {
            setSuccesFor(name);
        } else {
            setErrorFor(name, 'Naam mag niet leeg zijn');
            canSubmit = false;
        }

        if(emailValue !== '') {
            if(!isEmail(emailValue)) {
                setErrorFor(email, 'Dit is geen geldig emailadres');
                canSubmit = false;
            }
            else {
                setSuccesFor(email);
            }
        } else {
            setErrorFor(email, 'Email mag niet leeg zijn');
            canSubmit = false;
        }

        if(messageValue !== '') {
            setSuccesFor(message);
        } else {
            setErrorFor(message, 'Bericht mag niet leeg zijn');
            canSubmit = false;
        }

        name.addEventListener('input', dynamicCheckInputs);
        email.addEventListener('input', dynamicCheckInputs);
        message.addEventListener('input', dynamicCheckInputs);
    }



    function setErrorFor(input, message) {
        const formControl = input.parentElement; //.form-control
        const small = formControl.querySelector('small');

        small.innerText = message;
        formControl.classList.add("error");
    }

    function setSuccesFor(input) {
        const formControl = input.parentElement;
        formControl.classList.add("succes");
        formControl.classList.remove("error");
    }

    function isEmail(email) {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }
}

formValidation();