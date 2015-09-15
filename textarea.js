    minimoLetras=3;//Cuantas letras tiene que tener como mínimo la palabra para ser contabilizada 
    function contar(esto){ 
    if(esto.value.charAt(esto.value.length-1)==" "){ 
    numeroDePalabras=0; 
    textos=esto.value; 
    palabras=textos.split(" "); 
    for(a=0;a<palabras.length;a++){ 
    if(palabras[a].length>=minimoLetras){ 
    numeroDePalabras+=1; 
    } 
    } 
    document.forms['pepe']['palabras'].value=numeroDePalabras; 
    } 
    } 