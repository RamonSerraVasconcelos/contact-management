var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

function mensagem(mensagem) {
    modal.style.display = "block";
    document.getElementById('info_mensagem').innerHTML = mensagem
}

function closeModal() {
    document.getElementsByClassName("close")[0].click()
}

span.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


