<?php
$tab=array();
function chaine($x)
{
        return (is_string($x));
}
function entier($x)
{
    return (is_int($x));
}
function floats($x)
{
    return (is_float($x));
}
function tableau($x)
{
    return (is_array($x));
}


function extractTabByType($tab, $type)
{
switch ($type) {
    case is_string($type):
        echo"Tableau de chaine:"."<br>";
        var_dump( array_filter($tab, "chaine"));
        echo "<br>";
        break;
    case is_array($type):
        echo"Tableau de array:"."<br>";
        print_r(array_filter($tab, "tableau"));
        echo "<br>";
        break;
    case is_float($type):
        echo"Tableau de floats:"."<br>";
        var_dump( array_filter($tab, "floats"));
        echo "<br>";
        break;
    case is_int($type):
        echo"Tableau des entiers:"."<br>";
        print_r(array_filter($tab, "entier"));
        echo "<br>";
    }
}
$type="Sting";
$tab=array("ahlem",1,2.5,"holma",[1,2,3],-2.1);
extractTabByType($tab, $type);
extractTabByType($tab, 3);
extractTabByType($tab, 5.3);
extractTabByType($tab, [1,2]);
?>

