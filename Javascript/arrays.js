// Obtém os elementos do DOM
const modal = document.getElementById("modal");
const btn = document.getElementById("openModal");
const span = document.getElementById("closeModal");

// Quando o botão é clicado, abre o modal
btn.onclick = function() {
    modal.style.display = "block";
}

// Quando o usuário clica no "x" (fechar), fecha o modal
span.onclick = function() {
    modal.style.display = "none";
}

// Quando o usuário clica fora do modal, fecha o modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
