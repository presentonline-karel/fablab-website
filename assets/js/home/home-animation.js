const homeAnimation = () => {
    const texts = ["learn", "make", "share"];

    // count how many words = index from texts
    let count = 0;

    // count characters from each word = index from a word character
    let index = 0;
    let currentText = '';
    let letter = '';
    let wait = 0;

    (function type() {

        if(count === texts.length){
            //setTimeout(function(){ console.log("delay"); count = 0}, 3000);
            count = 0;
        }
        currentText = texts[count];
        letter = currentText.slice(0, ++index);

        document.querySelector('.typing').textContent = letter;
        if(letter.length === currentText.length){

            if(wait < 13) {
                wait += 1;
            } else {
                count++;
                index = 0;
                wait = 0;
            }
        }

        setTimeout(type, 180);
    }());
}

homeAnimation();