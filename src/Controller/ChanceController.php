<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChanceController
{
    // La route vers ce contrôleur est définie dans config/routes.yaml
    public function getNumber()
    {
        $number = rand(0, 100);
        return new Response("<html><body>
            <p>Le numéro de la chance est $number</p>
            </body></html>");
    }

    /**
     * @Route(path="/chance/analyse", name="chance_analyse")
     */
    public function analyseRequete(Request $requete)
    {
        dump($requete);
        return new Response("
        <html>
        <body>
            <p>Contenu de la requête dans le dump</p>
            <form method=\"POST\" action=\"/requete-post\">
                <input type=\"text\" value=\"Justine\" name=\"prenom\">
                <input type=\"submit\">
            </form>
        </body>
        </html>");
    }

} // fin de : class ChanceController