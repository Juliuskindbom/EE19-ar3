const btn = document.querySelectorAll("button");
const word = document.querySelector("#secretWord");
let counter = 0;

let secret = ["E", "F", "F", "E", "C", "T", "I", "V", "E"];
let guessed = [0, 0, 0, 0, 0, 0, 0, 0, 0];

btn.forEach((button) => {
    button.addEventListener("click", handleClick);
});

function handleClick (event) {
    let button = event.target;
    let guess = event.target.innerHTML;
    console.log (guess);

    button.disabled = true;

    let wasCorrect = false;

    secret.forEach((letter, index) => {
        if (letter === guess) {
            guessed[index] = 1;
            wasCorrect = true;
        }
    });
    
    if (!wasCorrect) {
        Guesses();
        console.log("Guess was incorrect");
    }
    else{
        console.log("Guess was correct!");
    }
    
    printWord();
}

function printWord() {
    word.innerHTML = ""
    guessed.forEach((guess, index) => {
        if (guess === 1) {
            //visa bokstav
            word.innerHTML += secret[index];
        } else {
            //visa  '?'
            word.innerHTML += "?";
        }
    })
}

printWord();

function Guesses(){
    counter++;
    console.log("Death counter = " + counter + "/5");
    if (counter === 5) {
        console.log("Död");
    }
    
}