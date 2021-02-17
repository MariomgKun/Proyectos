function load() {
  console.log("load");
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var datos = JSON.parse(this.responseText);
    document.getElementById("pregunta").innerHTML = datos[0];
    document.getElementById("tipo_de_distorsion").innerHTML = datos[1];
    document.getElementById('numero_pregunta').innerText = 1;
  }
};
xhttp.open("GET", "php/load.php", true);
xhttp.send();
}

function respuesta(valor)
{
  var contador = document.getElementById('numero_pregunta').innerText;
  contador = parseInt(contador);
  if(contador == 20)
  {
      document.getElementById("pregunta").innerHTML = "Haz completado el test de manera satisfactoria, para ver tus resultados da click en el boton 'resultados'";
      document.getElementById("botones").innerHTML = '<p class=""><a  href="resultados.html" class="btn  btn-block btn-warning font-weight-bold" >Resultados</a></p>';
  }
  else
  {
      siguientePregunta(valor)
  }     
}

function siguientePregunta(valor) {
var distorsion = document.getElementById("tipo_de_distorsion").innerHTML;
$("#pregunta").hide();
var xhttp = new XMLHttpRequest();
xhttp.timeout = 1500; // Si el servidor tarda mas de 1 segundo
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200)
  {
    var respuesta = this.responseText;
    console.log(respuesta);
    var datos = JSON.parse(respuesta);
    document.getElementById("pregunta").innerHTML = datos[0];
    document.getElementById("tipo_de_distorsion").innerHTML = datos[1];
    var contador = document.getElementById('numero_pregunta').innerText;
    document.getElementById('numero_pregunta').innerText =  parseInt(contador) + 1;
    $("#pregunta").show(1500);
  }
};
xhttp.ontimeout = function() // Si el servidor no responde
{
  if(window.confirm("Upppss :c El servidor tardo en responder. Quiere volver a internarlo?"))
  {
    siguientePregunta(valor);
  } // alerto al usuario 
  else
  {
    window.location.href = 'index.html';
  }
}
xhttp.open("GET", "php/repuestas.php?v="+valor+"&d="+distorsion, true);
xhttp.send();
}

function resultados()
{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200)
  {
    var datos = JSON.parse(this.responseText);
    console.log(datos);
    var contador = 1;
    for(var i = 1; i <= 10; i++)
    {
      var valor = datos[i].valor  * 100 / 20 
      document.getElementById(datos[i].nombre).setAttribute("aria-valuenow",valor);
      document.getElementById(datos[i].nombre).style.width = valor + '%';
      document.getElementById(datos[i].nombre).innerHTML = valor + '%'; 
      if(datos[i].recomendacion != null)
      {
        var nombre =  datos[i].nombre.split('_').join(' ');
        document.getElementById("Distorsion"+contador).innerHTML = nombre; 
        document.getElementById("Significado"+contador).innerHTML = datos[i].recomendacion;
        contador++;
      }
    }
  }
};
xhttp.open("GET", "php/resultados.php", true);
xhttp.send();
}