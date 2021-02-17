<?php
session_start(); // Inicio o activo la sesion

class DistorsionCognitiva
{
    public $nombre;
    public $valor;
    public $recomendacion;
}

class DistorsionesCognitivas{
    public $variablesinicializadas;
    function __construct() //Constructor
    {                   
        if(!isset($_SESSION['status'])) // Si las variable de  no session esta activas
        {
            $this->variablesinicializadas = false; // Pongo la bandera en falso para que la funcion iniciar_variables pueda inicilizar las variables de sesion
        }
        else
        {
            $this->variablesinicializadas = true; // Pongo la bariable en verdadero para que la funcion iniciar_variables no puede reiniciar las variables de sesion y pierda la informacion
        }
    }

    function iniciar_variables() // Funcion para iniciar las variables de sesion si es necesario 
    {   
        if($this->variablesinicializadas == false) // Si las variables no estas inicializadas
        { // Inicializo las variables con los nombres de las distorciones cognitivas
            $_SESSION['status'] = "activa";
            $distorsiones;
            for($i = 1 ; $i <= 10; $i++)
            {
                $_SESSION[$this->DistorsionesCognitivas_Nombre($i)] = 0; // Creo una variable de sesion para cada uno de las distorsiones cognitivas
                $distorsiones[$i] = $this->DistorsionesCognitivas_Nombre($i); // Creo una arreglo de los nombres de las distorsiones cognitivas que servira para identificar  las preguntas que se le mostraran al usuario
            }
            $_SESSION['index'] = 1; // indice para saber que distorsion cognitiva  es la siguiente
            $_SESSION['Pregunta'] = 0; // indice para saber que pregunta es la siguiente
            $_SESSION['distorsiones'] = $distorsiones; 
            $this->variablesinicializadas = true; // Pongo la bandera en verdadero para no reinciar las variables de sesion y perder informacion
            return True; // Regreso un verdadero si se iniciaron las variables
        }
        else // Si ya estan creadas
        {  // No  hago nada
             return false;  // Regreso un falso para identificar que no se reinicializaron las variables
        }
    }
    function DistorsionesCognitivas_Nombre($indice) // Funcion que devuelve el nombre de la distorsion cognitiva con un indice
    {
        if(is_numeric($indice) && !is_float($indice) ) // Verifico que ese indice sea un numero entero
        { 
            switch($indice)
            {
                case 1:
                    return 'Abstraccion_selectiva';
                break;
                case 2:
                    return 'Pensamiento_dicotomico';
                break;
                case 3:
                    return 'Inferencia_arbitraria';
                break;
                case 4:
                    return 'Sobregeneralizacion';
                break;
                case 5:
                    return 'Maximización_y_minimización';
                break;
                case 6:
                    return 'Personalizacion';
                break;
                case 7:
                    return 'Catastrofismo';
                break;
                case 8:
                    return 'Casualidad_temporal';
                break;
                case 9:
                    return 'Autoreferencias';
                break;
                case 10: 
                    return 'Responsabilidad_excesiva';
                break;
                default: // Si no esta dentro de los limites entonces regreso un falso
                    return FALSE;
            }
        }
        else
        {
            return FALSE; // Si no es un numero entero entonces regroso un falso
        }
    }

    function Incremento_DistorsionesCognitivas($incremento,$distorsion) // Funcion que incrementa el valor de la distorsion cognitiva 
    {
        if(is_numeric($incremento) && !is_float($incremento)) // Verifico que el incremento sea un numero entero
        {
            if($incremento >= 0 && $incremento <= 4) // el incremento solo puede tener los valores entre 0 y 4
            {
                if(isset($_SESSION[$distorsion])) // Si la variable de sesion corespondiente a la variable distorsion existe
                {
                    $_SESSION[$distorsion] = $_SESSION[$distorsion] + $incremento;
                    return $_SESSION[$distorsion];
                }
                else // Si no existe la variable de sesion corespondiente regreso falso
                {
                    return false;
                }
            }
            else // Si el incremento no esta dentro de los limites regreso falso
            {
                return false;
            }
        }
        else // Si el incremento no es un numero entero regreso falso
        {
            return false;
        }
        
    } 

    function DistorsionesCognitivas_Valor($indice) // Funcion que regresa el valor de la distorsion cognitiva mediante su indice 
    {
        $distorsion = $this->DistorsionesCognitivas_Nombre($indice); // Obtengo el nombre de la distorsion cognitiva
        if($distorsion != false) // Si el indice corresponde a una distorsion cognitiva
        {
            return $_SESSION[$distorsion]; // Regreso el valor de la distorsion cognitiva
        }
        else
        {
            return false; // Si no regreso falso
        }
    } 
    
    function resultados() // Funcion que regresa los resultados en json
    {
        $distorsiones;
        for($i = 1 ; $i <= 10; $i++) // Obtengo los valores de las distorsiones cognitivas 
        {
            $aux = new DistorsionCognitiva(); 
            $aux->nombre = $this->DistorsionesCognitivas_Nombre($i); // Obtengo el nombre de la distorsion cognitiva 
            $aux->valor = $this->DistorsionesCognitivas_Valor($i); // Obtengo el valor de la distrosion cognitiva
            $distorsiones[$i] = $aux;  
        }
        $this->ordenarMenorMayor();
        $distor = $_SESSION['distorsiones'];
        for($i = 8; $i <= 10; $i++)
        {
            for($e = 1; $e <= 10; $e++ )
            {
                if($distor[$i] == $distorsiones[$e]->nombre)
                {
                    $distorsiones[$e]->recomendacion = $this-> recomendaciones($distor[$i]);
                }
            }
        }
        return json_encode($distorsiones); // Regreso el json con las distorsiones cognitivas y sus valores
    }

    function ordenarMenorMayor() // Funcion que ordena de menor a mayor las distorsiones cognitivas respecto su valor
    {
        $distorsiones;
        for($i = 1 ; $i <= 10; $i++) // Obtengo los valores de las distorsiones cognitivas 
        {   
            $distorsiones[$i][0] = $this->DistorsionesCognitivas_Nombre($i); // Obtengo el nombre de la distorsion cognitiva
            $distorsiones[$i][1] = $this->DistorsionesCognitivas_Valor($i); // Obtengo el valor de las distrosion cognitiva
        }
        for($i = 1; $i <= 10; $i++) // Ordeno el arreglo de menor a mayor
        {
            for($e = 1 ; $e <= 10; $e++)
            {
                if($distorsiones[$i][1] < $distorsiones[$e][1])
                {
                    $aux =  $distorsiones[$i];
                    $distorsiones[$i] = $distorsiones[$e];
                    $distorsiones[$e] = $aux;
                }
            }
        }
        $distor = $_SESSION['distorsiones']; // la variable disto nos sirve para saber cual es la distorsion que se le mostrara al usuario
        for($i = 1 ; $i <= 10 ; $i++)
        {
            $distor[$i] = $distorsiones[$i][0]; // La ordeno
        }
        $_SESSION['distorsiones'] =  $distor;
        $_SESSION['index'] = 6 + $_SESSION['Pregunta']; // regreso al indice para mostrar la siguiente distorsion cognitiva
        $_SESSION['Pregunta'] = $_SESSION['Pregunta'] + 1; // incremento la variable pregunta para mostrarle al usuario la siguiente pregunta y no repetirlas
    }

    function siguientepregunta() // Funcion que regresa el nombre de la distorsion cognitiva y la pregunta que se le realizara al usuario
    {
        if($_SESSION['index'] <= 10) // Si el indice es menor a 10 (cuando la funcion  iniciar_variables() fue llamada, el indice inicia en 1 ya que buscamos por lo menos mostrarle al usuario una vez cada distorsion cognitiva)
        {
            $aux = $_SESSION['index']; // Obtengo 
            $_SESSION['index'] = $_SESSION['index'] + 1; // Incremento el indice para que la siguiente ves que se utilice esta funcion se muestre la siguiente pregunta
            $pregunta = array($_SESSION['distorsiones'][$aux] , $_SESSION['Pregunta']); //hago un arreglo con el nombre y el numero de pregunta que se le mostrara al usuario
            return  $pregunta; // regreso la distorsion y la pregunta
        }
        else // si el indice es mayor a 10 
        {
            $this->ordenarMenorMayor(); // ordenamos las distorsiones cognitivas para reafirmar las distorsiones que tuvieron un valor mas alto  
            return $this->siguientepregunta(); // hago una llamada recursiva para la siguiente pregunta
        }
    }

    function pregunta() // Funcion que regresala la pregunta y la distorsion que esta representa
    {
        $pregunta = $this->siguientepregunta(); // Obtengo la informacion de la pregunta 
        $file = '../Afirmaciones/'.$pregunta[0].'.txt'; // Creo la ruta con el nombre de la distorsion
        $myfile = fopen($file, "r") or die("Unable to open file!"); // La abro en forma de lectura 
        // Output one line until end-of-file
        for($i = 0; $i <= $pregunta[1]; $i++ ) // Recorro las preguntas dentro del fichero y me quedo con la ultima
        {
            $pregu[0] = fgets($myfile); 
        }
        $pregu[1] = $pregunta[0]; // agrego al arreglo el nombre de la distorsion cognitiva 
        fclose($myfile); // cierro el archivo
        return json_encode($pregu); // regreso la pregunta y el nombre de la distorsion en formato json
    }

    function recomendaciones($distorsion)
    {
        $file = '../Resultados/'.$distorsion.'.txt'; // Creo la ruta con el nombre de la distorsion
        $myfile = fopen($file, "r") or die("Unable to open file!"); // La abro en forma de lectura 
        // Output one line until end-of-file
        $recomendacion= fgets($myfile); 
        fclose($myfile); // cierro el archivo
        return $recomendacion; // regreso la pregunta y el nombre de la distorsion en formato json
    }
}

?>