<?php
namespace App\Controllers;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class TotoController extends Controller {
    public function show (): string
    {
        $person = array(
            "name" => "Toto",
            "age" => 12,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur ducimus hic necessitatibus vel. Explicabo fuga harum nam nostrum optio quo repellendus voluptas. Asperiores delectus doloremque modi numquam quidem, voluptatum."
        );

        $address = array(
            "number" => 34,
            "street" => "Rue des platanes",
            "city" => "Lyon"
        );

        return $this->renderTwig("person.twig", compact("person", "address"));
    }
}