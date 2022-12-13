<?php
namespace App\Controllers;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class TitiController extends Controller {
    public function show (): string
    {
        $person = array(
            "name" => "Titi",
            "age" => 8,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur ducimus hic necessitatibus vel. Explicabo fuga harum nam nostrum optio quo repellendus voluptas. Asperiores delectus doloremque modi numquam quidem, voluptatum."
        );

        $address = array(
            "number" => 14,
            "street" => "Rue des peupliers",
            "city" => "Villeurbanne"
        );

        return $this->renderTwig('person.twig', compact("person", "address"));
    }
}