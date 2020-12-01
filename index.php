<?php
use efimova\EfimovaException;
use efimova\Sqrt;
use efimova\MyLog;

include "core/EquationInterface.php";
include "core/LogInterface.php";
include "core/LogAbstract.php";
include "efimova/MyLog.php";
include "efimova/Line.php";
include "efimova/Sqrt.php";
include "efimova/EfimovaException.php";

ini_set("display_errors", 1);
error_reporting(-1);

$a = new Sqrt();
try {
    echo "Введите 3 аргумента-" . "\n";
    $valuesa = readline();
    $valuesb = readline();
    $valuesc = readline();

    MyLog::log("Введено урвнение" . $valuesa . "x^2+" . $valuesb . "x+ " . $valuesc);
    $x = $a->solve($valuesa, $valuesb, $valuesc);
    $str = implode(",", $x);
    MyLog::log("Корни урвнения" . $str);
} catch (EfimovaException $e) {
    MyLog::log($e->getMessage());
}
MyLog::write();
?>