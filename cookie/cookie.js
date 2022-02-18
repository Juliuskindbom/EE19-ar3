let cookies = 0;
let amount = 1;
let hasJar = false;
let hasFactory = false;
let hasFlicker = false;
const clickerButton = document.querySelector(".clicker");
const textField = document.querySelector(".clickcount");
const cookieJar = document.querySelector(".upgrade1");
const cookieFactory = document.querySelector(".upgrade2");
const cookieFlicker = document.querySelector(".upgrade3");

clickerButton.addEventListener("click", ()=> {
    cookies = cookies + amount;
    textField.innerHTML = cookies;
});
cookieJar.addEventListener("click", () =>{
    if (cookies >= 10 && hasJar === false) {
        amount += 4;
        cookies -= 10;
        hasJar = true;
        textField.innerHTML = cookies;
    }
})
cookieFactory.addEventListener("click", () => {
    if (cookies >= 70 && hasFactory === false) {
        amount *=2;
        cookies -= 70;
        hasFactory = true;
        textField.innerHTML = cookies;
    }
})
cookieFlicker.addEventListener("click", () => {
    if (cookies >= 10 && hasFlicker === false) {
        cookies -= 10;
        hasFlicker = true;
        autoClick = amount / 10;
        setInterval(() => {
            autoIncrease();
        }, 3000);
    }
})
function autoIncrease () {
    cookies += autoClick;
    textField.innerHTML = amount;
    setInterval(autoIncrease, 3000);
}