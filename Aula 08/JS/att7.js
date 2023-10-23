let input = document.querySelector('#input');
let labelList = document.querySelector('#lista');
let lista = [];

function addLista() {
    let digitado = Number(input.value);

    lista.push(digitado);
    labelList.innerHTML = '';
    for (let i = 0; i < lista.length; i++) {
        labelList.innerHTML += "Nota: " + lista[i] + "\n";
    }
}