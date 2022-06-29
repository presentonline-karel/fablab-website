const formValidation = () => {
    const form = document.getElementById("form");
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");

    const inputs = document.querySelectorAll('.contactform__field__input');



    form.addEventListener('submit', (e) => {
        e.preventDefault();
        //checkInputs();
        dynamicCheckInputs();
    });

    
    
    function dynamicCheckInputs() {
        //get the values of the inputs without any spaces etc.
        const nameValue = name.value.trim();
        const emailValue = email.value.trim();
        const messageValue = message.value.trim();

        if(nameValue !== '') {
            setSuccesFor(name);
        } else {
            setErrorFor(name, 'Naam mag niet leeg zijn');
        }

        if(emailValue !== '') {
            if(!isEmail(emailValue)) {
                setErrorFor(email, 'Dit is geen geldig emailadres');
            }
            else {
                setSuccesFor(email);
            }
        } else {
            setErrorFor(email, 'Email mag niet leeg zijn');
        }

        if(messageValue !== '') {
            setSuccesFor(message);
        } else {
            setErrorFor(message, 'Bericht mag niet leeg zijn');
        }

        name.addEventListener('input', dynamicCheckInputs);
        email.addEventListener('input', dynamicCheckInputs);
        message.addEventListener('input', dynamicCheckInputs);
    }

    
    
    /* function checkInputs() {
        //get the values of the inputs without any spaces etc.
        const nameValue = name.value.trim();
        const emailValue = email.value.trim();
        const messageValue = message.value.trim();

        if(nameValue === '') {
            setErrorFor(name, 'Naam mag niet leeg zijn');
        } else {
            setSuccesFor(name);
        }

        if(emailValue === '') {
            setErrorFor(email, 'Email mag niet leeg zijn');
        } else if(!isEmail(emailValue)) {
            setErrorFor(email, 'Dit is geen geldig emailadres');
        } else {
            setSuccesFor(email);
        }

        if(messageValue === '') {
            setErrorFor(message, 'Bericht mag niet leeg zijn');
        } else {
            setSuccesFor(message);
        }
    } */



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