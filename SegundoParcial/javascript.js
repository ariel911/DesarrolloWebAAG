function crearcajas() {
    var n = document.getElementById("numero").value;
    var res = document.querySelector(".inpus");

    for (var i = 1; i <= n; i++) {
        var input = document.createElement("input");
        input.classList.add("input");
        res.appendChild(input);
    }

}

function multiplicar() {
    var n = document.getElementById("numero").value;
    var res = document.querySelector(".resmul");
    var acumulador = 1;
    for (var i = 0; i < n; i++) {

        acumulador *= parseInt(document.getElementsByClassName("input")[i].value);

    }
    res.innerHTML = acumulador;


}

function llamada1() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "multiplicaciones.html", true);
    xhttp.send();
}

function llamada2() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "tabla.html", true);
    xhttp.send();
}
function llamada3() {
    var xhttp = new XMLHttpRequest();
    var titulo = document.querySelector(".title");
    titulo.innerHTML="Pregunta 3 Series en Ajax";
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "tabla.html", true);
    xhttp.send();
}


function calcula() {
    var radio = document.getElementsByName("radio");
    var n = document.querySelector(".input2").value;
    var res = document.querySelector("#msg");
    var eliminar = document.querySelector(".title2");
    

    var acumulador = 1;
    if (radio[0].checked) {
        for (var i = 1; i <= n; i++) {
            acumulador = acumulador * i;
            res.innerHTML += i + " = " + (acumulador) + "</br>";
        }
        eliminar.remove();

     }else if(radio[1].checked){
         var r=0;
         var n2=1;
         var aux=0;
            for (var i = 0; i <= n; i++) {
                res.innerHTML += i + " = " + (r) + "</br>";
                r=aux+n2;
                n2=aux;
                aux=r;
            }
            eliminar.remove();
        
        }
}
function llamada4() {
    var xhttp = new XMLHttpRequest();
    var titulo = document.querySelector(".title");
    titulo.innerHTML="pregunta 4 listado de libros";
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "listar.php", true);
    xhttp.send();
}