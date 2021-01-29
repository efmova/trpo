<?php
use efimova\EfimovaException;
use efimova\Sqrt;
use efimova\MyLog;

require __DIR__ . '/vendor/autoload.php';

ini_set("display_errors", 1);
error_reporting(-1);

MyLog::log("Версия программы ".file_get_contents("./version"));
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