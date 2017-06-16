<?php
namespace modules;
include "..\packages\Analize.php";
include "..\packages\Procastinate.php";
include "..\packages\Program.php";
include "..\Facade.php";

use Analize;
use Procastinate;
use Program;
use Facade;

$analize = new Analize();
$procastinate = new Procastinate();
$program = new Program();

$devObj = new Facade($analize, $procastinate, $program);
$devObj->developSomething('Bob', 'Watching cute cat videos', 'Smashing CTRL + C | CTRL + V');