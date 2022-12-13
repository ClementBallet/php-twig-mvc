<?php
namespace App;

use App\Controllers\TitiController;
use App\Controllers\TotoController;

require "vendor/autoload.php";

if ($_GET["person"] == "toto") {
    $toto = new TotoController();
    echo $toto->show();
}
elseif ($_GET["person"] == "titi") {
    $titi = new TitiController();
    echo $titi->show();
}