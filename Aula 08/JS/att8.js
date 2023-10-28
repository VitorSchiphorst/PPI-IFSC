function calcularFatorial(numero) {
    if (numero === 0) {
      return 1;
    } else if (numero < 0) {
      return "Não é possível calcular o fatorial de um número negativo";
    } else {
      let resultado = 1;
      for (let i = 1; i <= numero; i++) {
        resultado *= i;
      }
      return resultado;
    }
  }
  
  function calcularFibonacci(quantidadeTermos) {
    if (quantidadeTermos <= 0) {
      return [];
    } else if (quantidadeTermos === 1) {
      return [0];
    } else if (quantidadeTermos === 2) {
      return [0, 1];
    } else {
      const fibonacci = [0, 1];
      for (let i = 2; i < quantidadeTermos; i++) {
        const proximoNumero = fibonacci[i - 1] + fibonacci[i - 2];
        fibonacci.push(proximoNumero);
      }
      return fibonacci;
    }
  }

  function gerarFuncao() {
    let num = Number(document.querySelector("#input").value);
    let func1 = document.querySelector("#func1");
    let func2 = document.querySelector("#func2");

    func1.innerHTML = "";
    func2.innerHTML = "";

    const fatorial = calcularFatorial(num);
    const sequenciaFibonacci = calcularFibonacci(num);

    if (typeof fatorial === "number") {
      func1.textContent = `O fatorial de ${num} é ${fatorial}`;
    } else {
      func1.textContent = fatorial;
    }

    func2.textContent = "Sequência de Fibonacci: " + sequenciaFibonacci.join(", ");
  }
