let altura, largura = 0;
let vidas = 1;

function ajustaTela() {
    altura = window.innerHeight
    largura = window.innerWidth
    console.log(largura, altura)
}

ajustaTela()

function posRandomica(){

     if(document.getElementById('tempoMosquito')){
        document.getElementById('tempoMosquito'). remove ()
       
     if(vidas >3){
        window.location.href = "finaljogo.html"
         }
     else{
         document.getElementById('v' + vidas).src="imagens/coracao_vazio.png"
         vidas++
         }   
     }



let posx = Math.floor(Math.random() * largura) -90;
let posy = Math.floor(Math.random() * altura) -90;

posx = posx < 0 ? 0: posx;
posy = posy < 0 ? 0: posy;

console.log (posx,posy);

let mosquito = document.createElement('img')
mosquito.src= 'imagens/mosquito.png'
mosquito.className = tamanhoMosquito() + ' ' + ladoAleatorio()
mosquito.style.left = posx + 'px'
mosquito.style.top = posy + 'px'
mosquito.style.position = 'absolute'
mosquito.id = 'tempoMosquito'

mosquito.onclick= function(){
    this.remove()
}

document.body.appendChild (mosquito)

tamanhoMosquito()
}

function tamanhoMosquito(){
    let classe = Math.floor (Math.random()* 3);
   
    switch (classe){
        case 0:
            return 'mosq01'
        case 1:
            return 'mosq02'
        case 2:
            return 'mosq03'
    }
}

function ladoAleatorio (){
    let classe = Math.floor (Math.random()* 2);
   
    switch (classe){
        case 0:
            return 'ladoA'
        case 1:
            return 'ladoB'
    }
}