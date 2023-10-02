let inputRed = document.getElementById("inputRed");
let inputGreen = document.getElementById("inputGreen");
let inputBlue = document.getElementById("inputBlue");
let body = document.getElementById('body');

function btnSetColor() {  
    let R = inputRed.value;
    let G = inputGreen.value;
    let B = inputBlue.value;

    body.style.backgroundColor = "rgb("+R+","+G+","+B+")";
}