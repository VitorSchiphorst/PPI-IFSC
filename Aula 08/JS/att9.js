let result = document.querySelector('#result');

function inserir(num) {
    var addNum = result.innerHTML;
    
    if (result === 0) {
        result.innerHTML = addNum;
    } else {
        result.innerHTML = addNum + num;
    }
    
}

function limpar() {
    result.innerHTML = "";
}

function calcular() {
    var resultado = result.innerHTML;

    if(resultado) {

        resultado = resultado.replace(/÷/g, '/');
        resultado = resultado.replace(/x/g, '*');
        
        result.innerHTML = eval(resultado);
    } else {
        result.innerHTML = "0";
    }
}
