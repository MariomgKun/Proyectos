window.addEventListener("load", cargaPagina);
function cargaPagina() {
    //Emociones
    var btn = document.getElementById("em").addEventListener("click", cambiaValoresEm);
    var btnv = document.getElementById("em").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });
    var btn1 = document.getElementById("em1").addEventListener("click", cambiaValoresEm1);
    var btn1v = document.getElementById("em1").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });
    var btn2 = document.getElementById("em2").addEventListener("click", cambiaValoresEm2);
    var btn2v = document.getElementById("em2").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });

    //Numeros
    var btn = document.getElementById("num").addEventListener("click", cambiaValoresNum);
    var btnv = document.getElementById("num").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });
    var btn1 = document.getElementById("num1").addEventListener("click", cambiaValoresNum1);
    var btn1v = document.getElementById("num1").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });
    var btn2 = document.getElementById("num2").addEventListener("click", cambiaValoresNum2);
    var btn2v = document.getElementById("num2").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });

    //Letras
    var btn = document.getElementById("let").addEventListener("click", cambiaValoresLet);
    var btnv = document.getElementById("let").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });
    var btn1 = document.getElementById("let1").addEventListener("click", cambiaValoresLet1);
    var btn1v = document.getElementById("let1").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });
    var btn2 = document.getElementById("let2").addEventListener("click", cambiaValoresLet2);
    var btn2v = document.getElementById("let2").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });

    //Animales
    var btn = document.getElementById("ani").addEventListener("click", cambiaValoresAni);
    var btnv = document.getElementById("ani").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });
    var btn1 = document.getElementById("ani1").addEventListener("click", cambiaValoresAni1);
    var btn1v = document.getElementById("ani1").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });
    var btn2 = document.getElementById("ani2").addEventListener("click", cambiaValoresAni2);
    var btn2v = document.getElementById("ani2").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });

    //Transporte
    var btn = document.getElementById("tra").addEventListener("click", cambiaValoresTra);
    var btnv = document.getElementById("tra").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });
    var btn1 = document.getElementById("tra1").addEventListener("click", cambiaValoresTra1);
    var btn1v = document.getElementById("tra1").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });
    var btn2 = document.getElementById("tra2").addEventListener("click", cambiaValoresTra2);
    var btn2v = document.getElementById("tra2").addEventListener("click",()=>{
        decir(document.getElementById("nombre").value);
    });
}

//Emociones
function cambiaValoresEm() {
    var inputNombreEm = document.getElementById("nombre");
    inputNombreEm.value = "feliz";
}
function cambiaValoresEm1() {
    var inputNombreEm1 = document.getElementById("nombre");
    inputNombreEm1.value = "triste";
}
function cambiaValoresEm2() {
    var inputNombreEm2 = document.getElementById("nombre");
    inputNombreEm2.value = "sorpendido";
}

//Numeros
function cambiaValoresNum() {
    var inputNombreNum = document.getElementById("nombre");
    inputNombreNum.value = "1";
}
function cambiaValoresNum1() {
    var inputNombreNum1 = document.getElementById("nombre");
    inputNombreNum1.value = "2";
}
function cambiaValoresNum2() {
    var inputNombreNum2 = document.getElementById("nombre");
    inputNombreNum2.value = "3";
}

//Letras
function cambiaValoresLet() {
    var inputNombreLet = document.getElementById("nombre");
    inputNombreLet.value = "aa";
}
function cambiaValoresLet1() {
    var inputNombreLet1 = document.getElementById("nombre");
    inputNombreLet1.value = "b";
}
function cambiaValoresLet2() {
    var inputNombreLet2 = document.getElementById("nombre");
    inputNombreLet2.value = "c";
}

//Animales
function cambiaValoresAni() {
    var inputNombreAni = document.getElementById("nombre");
    inputNombreAni.value = "perro";
}
function cambiaValoresAni1() {
    var inputNombreAni1 = document.getElementById("nombre");
    inputNombreAni1.value = "pato";
}
function cambiaValoresAni2() {
    var inputNombreAni2 = document.getElementById("nombre");
    inputNombreAni2.value = "tigre";
}

//Transporte
function cambiaValoresTra() {
    var inputNombreTra = document.getElementById("nombre");
    inputNombreTra.value = "avion";
}
function cambiaValoresTra1() {
    var inputNombreTra1 = document.getElementById("nombre");
    inputNombreTra1.value = "automovil";
}
function cambiaValoresTra2() {
    var inputNombreTra2 = document.getElementById("nombre");
    inputNombreTra2.value = "bicicleta";
}

function decir(texto){
    speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
}