let altura = 0;
let largura = 0;

function ajustaPalco(){
    altura = window.innerHeight;
    largura = window.innerWidth;
    console.log (largura,altura);
}

ajustaPalco();

function posRandomica(){
let posx = Math.floor(Math.random() * largura)
let posy = Math.floor(Math.random() * altura)

let mosquito = document.createElement('img')
mosquito.src= 'imagens/mosquito.png'
mosquito.className = 'mosq01'
mosquito.style.left = posx + 'px'
mosquito.style.top = posy + 'px'
mosquito.style.position = 'absolute'

document.body.appendChild (mosquito)
}