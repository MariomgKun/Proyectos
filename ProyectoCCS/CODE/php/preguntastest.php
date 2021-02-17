<?php
use DistorsionesCognitivas;
use PHPUnit\Framework\TestCase;

final class DistorsionesCognitivasTest extends TestCase
{
    public function testConstructor_sesionNoIniciada() // si no hay sesion activa crea la sesion y da los valores predeterminados
    {
        $aux = new DistorsionesCognitivas();
        $this->assertTrue($aux->iniciar_variables()); 
    }

    public function testConstructor_sesionIniciada() // mantiene los valores de la session activas y no los sobreescribe
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->iniciar_variables());
    }

    public function testDistorsionesCognitivas_Nombre_valorNOAceptado_limitesuperiormas1() 
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->DistorsionesCognitivas_Nombre(11));
    }

    public function testDistorsionesCognitivas_Nombre_valorAceptado_limitesuperior()
    {
        $aux = new DistorsionesCognitivas();
        $this->assertSame('Responsabilidad_excesiva',$aux->DistorsionesCognitivas_Nombre(10));
    }

    public function testDistorsionesCognitivas_Nombre_valorAceptado_limiteinferior()
    {
        $aux = new DistorsionesCognitivas();
        $this->assertSame('Abstraccion_selectiva',$aux->DistorsionesCognitivas_Nombre(1));
    }

    public function testDistorsionesCognitivas_Nombre_valorNoAceptado_limiteinferiormenos1()
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->DistorsionesCognitivas_Nombre(0));
    }

    public function testDistorsionesCognitivas_Nombre_valorNoAceptado_tipostring()
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->DistorsionesCognitivas_Nombre('e'));
    }

    public function testDistorsionesCognitivas_Nombre_valorNoAceptado_tipobool()
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->DistorsionesCognitivas_Nombre(True));
    }

    public function testDistorsionesCognitivas_Nombre_valorNoAceptado_tipoFloat()
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->DistorsionesCognitivas_Nombre(1.1));
    }

    public function testIncremento_DistorsionesCognitivas_valorNoaceptado_limitesuperiormas1() // Incremento en la Distorsion Cognitiva Abstraccion Selectiva limite superior 2 
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->Incremento_DistorsionesCognitivas(5,1));
    }

    public function testIncremento_DistorsionesCognitivas_valoraceptado_limitesuperior() // Incremento en la Distorsion Cognitiva Abstraccion Selectiva limite superior 2 
    {
        $aux = new DistorsionesCognitivas();
        $this->assertSame(4,$aux->Incremento_DistorsionesCognitivas(4,$aux->DistorsionesCognitivas_Nombre(1)));
    }

    public function testIncremento_DistorsionesCognitivas_valoraceptado_limiteinferior() // Incremento en la Distorsion Cognitiva Abstraccion Selectiva limite inferior -2
    {
        $aux = new DistorsionesCognitivas();
        $this->assertSame(5,$aux->Incremento_DistorsionesCognitivas(1,$aux->DistorsionesCognitivas_Nombre(1)));
    }

    public function testIncremento_DistorsionesCognitivas_valoraceptado_limiteinferiormenos1() // Incremento en la Distorsion Cognitiva Abstraccion Selectiva limite inferior -2
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->Incremento_DistorsionesCognitivas(0,$aux->DistorsionesCognitivas_Nombre(1)));
    }

    public function testIncremento_DistorsionesCognitivas_valoraceptado_enmedio() // Incremento en la Distorsion Cognitiva Abstraccion Selectiva entre -2 y 2
    {
        $aux = new DistorsionesCognitivas();
        $this->assertSame(7,$aux->Incremento_DistorsionesCognitivas(2,$aux->DistorsionesCognitivas_Nombre(1)));
    }

    public function testIncremento_DistorsionesCognitivas_valornoaceptado_entero() // Incremento en la Distorsion Cognitiva Abstraccion Selectiva valor fuera de los limites entero
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->Incremento_DistorsionesCognitivas(10,$aux->DistorsionesCognitivas_Nombre(1)));
    }

    public function testIncremento_DistorsionesCognitivas_valornoaceptado_string() // Incremento en la Distorsion Cognitiva Abstraccion Selectiva tipo de dato string
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->Incremento_DistorsionesCognitivas('e',$aux->DistorsionesCognitivas_Nombre(1)));
    }

    public function testIncremento_DistorsionesCognitivas_valornoaceptado_boolean() // Incremento en la Distorsion Cognitiva Abstraccion Selectiva tipo de dato boolean
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->Incremento_DistorsionesCognitivas(false,$aux->DistorsionesCognitivas_Nombre(1)));
    }

    public function testIncremento_DistorsionesCognitivas_valornoaceptado_float() // Incremento en la Distorsion Cognitiva Abstraccion Selectiva tipo de dato boolean
    {
        $aux = new DistorsionesCognitivas();
        $this->assertFalse($aux->Incremento_DistorsionesCognitivas(1.5,$aux->DistorsionesCognitivas_Nombre(1)));
    }

    public function test_DistorsionesCognitivas_Valor() // Mantenere la Distorsion Cognitiva Abstraccion Selectiva con su valor previamente asignado
    {
        $aux = new DistorsionesCognitivas();
        $this->assertSame(7,$aux->DistorsionesCognitivas_Valor(1));
    }

    public function test_resultados()
    {
        $aux = new DistorsionesCognitivas();
        $respu = '{"1":{"nombre":"Abstraccion_selectiva","valor":7,"recomendacion":"Sientes que lo negativo es m\ufffds relevante que lo positivo"},"2":{"nombre":"Pensamiento_dicotomico","valor":0,"recomendacion":null},"3":{"nombre":"Inferencia_arbitraria","valor":0,"recomendacion":null},"4":{"nombre":"Sobregeneralizacion","valor":0,"recomendacion":null},"5":{"nombre":"Maximizaci\u00f3n_y_minimizaci\u00f3n","valor":0,"recomendacion":null},"6":{"nombre":"Personalizacion","valor":0,"recomendacion":null},"7":{"nombre":"Catastrofismo","valor":0,"recomendacion":null},"8":{"nombre":"Casualidad_temporal","valor":0,"recomendacion":null},"9":{"nombre":"Autoreferencias","valor":0,"recomendacion":"Te etiquetas a ti mismo."},"10":{"nombre":"Responsabilidad_excesiva","valor":0,"recomendacion":"Atribuyes la responsabilidad de los acontecimientos bien totalmente a uno mismo"}}';
        $this->assertSame($respu,$aux->resultados());
    }

    public function test_siguientepregunta()
    {
        $aux = new DistorsionesCognitivas();
        $this->assertSame('["No quieres realizar alg\ufffdn viaje porque crees que ocurrir\ufffd alg\ufffdn accidente.\n","Catastrofismo"]',$aux->pregunta());

    }

}   

?>
