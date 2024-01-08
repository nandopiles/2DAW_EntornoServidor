<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CoinController
{
    #[Route('/side')]
    public function cara(): Response
    {
        $cara = random_int(0, 1);

        return new Response(
            '<html><body>Ha salido: ' . (($cara) ? "cara" : "cruz") . '</body></html>'
        );
    }
}
