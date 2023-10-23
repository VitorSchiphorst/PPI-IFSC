let func1 = document.querySelector('#func1');
let func2 = document.querySelector('#func2');
let input = document.querySelector('#input');

function gerarFuncao() {
    let num = Number(input.value);
    let fibonacci = 1;
    
    func1.innerHTML = '';
    for (let i = 1; i <= num; i++) {
        func1.innerHTML += i + " + " + fibonacci + " = "+ fibonacci;
        fibonacci += i;
    }

    // for (let i = num; i >= 1; i--) {
    //     let fatorial = "!" + num + " = ";
    //     if (num == 1) {
    //         func2.innerHTML += fatorial;
    //     } else {
    //         func2.innerHTML += fatorial + " x " + i + " = "+ fatorial;
    //     }
    // }
}