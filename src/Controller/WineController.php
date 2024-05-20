<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WineController extends AbstractController
{
    #[Route("/wine")]
    public function showWine()
    {
        $wine = [
            "id" => "F1234",
            "name" => "Pinot Noir Esprit Libre",
            "apellation" => "Alsace AOC",
            "winery" => "Terres d´Étoiles, Christophe Mittnacht",
            "vintage" => "2022",
            "price" => "21€",
            "grape" => "Pinot Noir",
            "image" => "https://www.terresdetoiles.com/wp-content/uploads/2021/06/Bouteille-Pinot-Noir-Esprit-Libre-e1632831138375.png"
        ];
        return $this->render("wines/showWine.html.twig", ["wine" => $wine]);
    }
}
