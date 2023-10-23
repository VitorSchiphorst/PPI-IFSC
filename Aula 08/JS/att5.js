let valorA = document.querySelector('#valorA');
let valorB = document.querySelector('#valorB');
let result = document.querySelector('#result');

function soma() {
    let numA = Number(valorA.value);
    let numB = Number(valorB.value);
    let soma = Number(numA + numB)
    result.innerHTML = soma;
}