let boxCor = document.querySelector('#boxCor');
let labelCor = document.querySelector('#labelCor');

function gerarCor() {
    const numsLetts = '0123456789ABCDEF';
    let corGerada = '#';
    
    for (let i = 0; i < 6; i++) {
        corGerada += numsLetts[Math.floor(Math.random() * 16)];
    }

    boxCor.style.backgroundColor = corGerada;
    labelCor.innerHTML = corGerada;
}