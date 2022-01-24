
function llamada1() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".medio").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "datos.html", true);
    xhttp.send();
}
function llamada3() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".medio").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "menu.php", true);
    xhttp.send();
}
fu
function llamada4() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".medio").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "pregunta4.php", true);
    xhttp.send();
}
function llamada5() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".medio").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "pregunta5.html", true);
    xhttp.send();
}
function frente(){
    const frente = document.querySelector(".frente");
    var radio = document.getElementsByName("radio");
    if(radio[0].checked){
        frente.style.background = "red";
    }else if(radio[1].checked){
        frente.style.background = "yellow";
    }else if(radio[2].checked){
        frente.style.background = "green";
    }
    
}
function fondo(){
    const fondo = document.querySelector("#div");
    var radio = document.getElementsByName("radio");
    if(radio[0].checked){
        fondo.style.background = "red";
    }else if(radio[1].checked){
        fondo.style.background = "yellow";
    }else if(radio[2].checked){
        fondo.style.background = "green";
    }
    
}

function insertar() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".cont").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "insertar.html", true);
    xhttp.send();
}
function mostrar(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".cont").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "Usarmenu.php", true);
    xhttp.send();
}
function eliminar(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".cont").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "eliminar.php", true);
    xhttp.send();
}