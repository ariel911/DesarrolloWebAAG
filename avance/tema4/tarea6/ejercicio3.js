let texto = prompt('digite el texto')

let Espalindromo = text =>{
    
   var a = text.split('')
   for(var i = 0; i < a.length; i++){
       if(a[i] == " "){
           a.splice(i, 1)
       }
   }
   var b = a.slice()
    return b.join('') == a.reverse().join('') ? "El texto SI es polindromo":"El texto NO es polindromo"
   
}
alert(Espalindromo(texto))