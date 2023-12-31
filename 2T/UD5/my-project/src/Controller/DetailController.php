<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;
use App\Entity\Emp;

class DetailController extends AbstractController
{

    /**
     * Renders the template associated to show the detail of a specific client.
     *
     * @param  EntityManagerInterface $entityManager
     * @param  number $id
     * @return Response
     */
    #[Route('/detail/{id}', name: 'detail_client')]
    public function showDetail(EntityManagerInterface $entityManager, $id): Response
    {
        $clientRepository = $entityManager->getRepository(Client::class);
        $empRepository = $entityManager->getRepository(Emp::class);

        $clientSelected = $clientRepository->find($id);

        return $this->render("detail.html", [
            "client" => $clientSelected,
            "emp" => $empRepository->find($clientSelected->getREPR_COD())
        ]);
    }
}
