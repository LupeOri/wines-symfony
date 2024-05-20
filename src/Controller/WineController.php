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

    #[Route("/wines")]
    public function showWines()
    {
        $wines = [
            [
                "id" => "F1234",
                "name" => "Pinot Noir Esprit Libre",
                "apellation" => "Alsace AOC",
                "winery" => "Terres d´Étoiles, Christophe Mittnacht",
                "vintage" => "2022",
                "price" => "21€",
                "grape" => "Pinot Noir",
                "image" => "https://www.terresdetoiles.com/wp-content/uploads/2021/06/Bouteille-Pinot-Noir-Esprit-Libre-e1632831138375.png"
            ],
            [
                "id" => "AR1234567850",
                "name" => "Catena",
                "apellation" => "Mendoza",
                "winery" => "Bodega Catena Zapata",
                "vintage" => "2020",
                "price" => "18€",
                "grape" => "Malbec",
                "image" => "https://www.luekensliquors.com/wp-content/uploads/2018/07/CATENA-MALBEC-15.png"
            ],
            [
                "id" => "ES1234567890",
                "name" => "Villota",
                "apellation" => "DOCa Rioja",
                "winery" => "Villota",
                "vintage" => "2021",
                "price" => "20€",
                "grape" => "Tempranillo, Graciano",
                "image" => "https://www.decantalo.com/es/62961-large_default/villota-tinto.jpg"
            ],
            [
                "id" => "FR1234564529",
                "name" => "Château La Tour Blanche",
                "apellation" => "Sauternes AOC",
                "winery" => "Château La Tour Blanche",
                "vintage" => "2016",
                "price" => "60€",
                "grape" => "Sauvignon, Sémillon, Muscadelle",
                "image" => "https://cdn.vinissimus.com/img/unsafe/p385x/plain/local:///prfmtgrande/vi/cltbl16_anv800.png"
            ],
        ];
        return $this->render("wines/showWines.html.twig", ["wines" => $wines]);
    }
}
