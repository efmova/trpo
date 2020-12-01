<?php
use efimova\Sqrt;
use efimova\MyLog;

include "core/EquationInterface.php";
include "core/LogInterface.php";
include "core/LogAbstract.php";
include "efimova/MyLog.php";
include "efimova/Line.php";
include "efimova/Sqrt.php";

ini_set("display_errors", 1);
error_reporting(-1);

MyLog::log("log 1");
MyLog::log("log 2");
MyLog::write();
?>