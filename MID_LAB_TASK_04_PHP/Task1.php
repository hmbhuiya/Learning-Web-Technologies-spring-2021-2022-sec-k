<?php

function areaRectangle( $a, $b)
{
    $area = $a * $b;
    return $area;
}
 
function perimeterRectangle( $a, $b)
{
    $perimeter = 2 * ($a + $b);
    return $perimeter;
}

$a = 5;
$b = 6;
echo("Area of Rectangle is = " );
echo(areaRectangle($a, $b));
echo("<br/>");
echo("\n");
echo( "Perimeter of Rectangle is= ");
echo(perimeterRectangle($a, $b));

?>