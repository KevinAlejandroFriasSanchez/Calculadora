<?php
class Calculadora
{

    public $resultado = 0;

    function sumar ( $x, $y)
    {
        $this->resultado = $x + $y;
    }
    function restar ( $x, $y)
    {
        $this->resultado = $x - $y;
    }
    function multiplicar ( $x, $y)
    {
        $this->resultado = $x * $y;
    }
    function dividir ( $x, $y)
    {
        $this->resultado = $x / $y;
    }
}

class CCientifica extends Calculadora
{
    function raiz($x)
    {
        $this->resultado = sqrt($x);
    }

}

$operando1 = intval( $_REQUEST["ope1"]);
$operando2 = intval($_REQUEST["ope2"]);

$operacion = $_REQUEST["operacion"];

$micalc = new CCientifica;

switch ($operacion)
{
    case "Sumar":
        echo $micalc->sumar ($operando1, $operando2);
        echo $micalc->resultado;
        break;
    case "Restar":
        echo $micalc->restar ($operando1, $operando2);
        echo $micalc->resultado;
        break;
    case "Multiplicar":
        echo $micalc->multiplicar ($operando1, $operando2);
        echo $micalc->resultado;
        break;
    case "Dividir":
        echo $micalc->dividir($operando1,$operando2);
        echo $micalc->resultado;
        break;
    case "Raiz":
        echo $micalc->raiz ($operando1);
        echo $micalc->resultado;
        break;
}

?>
<br><br>
<a href="index.html">Regresar</a>