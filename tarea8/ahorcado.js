//ahorcado
const palabras = ["casa","hotel","perro","gato","platano","naranja","pala","sol","laptop","celular"];

const inputs = document.querySelector('.inputs');
const palabra = palabras[Math.floor(Math.random()*(10 - 0))];
const imagenes = document.querySelector('#imagenes');


for (let i = 0; i < palabra.length; i++){
    const letra = document.createElement('input');
    inputs.appendChild(letra);
   
    letra.classList.add('letra');
}
var contador2=1;
var auxi=0

document.querySelector('.btn-letra').addEventListener('click', function(){
    let letraBuscar = document.querySelector('#letra-buscar').value;
    const h1= document.querySelector('.h1');
    const section = document.querySelector('.section');
    
    var contador=0;

    for(const i in palabra){
        if(palabra[i] == letraBuscar){
            document.querySelectorAll('.letra')[i].value = letraBuscar;
            auxi++;

        }
        else
        {
            contador++;  
        }
    }

    if(contador == palabra.length){
        const elemento = document.createElement('img');
        const contenedor = document.createElement('div');
        section.appendChild(contenedor);
        contenedor.appendChild(elemento);
        elemento.classList.add('img1');
        elemento.src = 'img/' + contador2 + '.jpg';
        contador2++;
        
    }
   
    if(contador2 == 9){
        h1.style.visibility = 'visible';
    }
    if(auxi ==  palabra.length){
        h1.innerHTML = 'Ganaste';
        h1.style.visibility = 'visible';
    }
});
