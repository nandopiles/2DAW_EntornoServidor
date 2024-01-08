<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Core\Interface\IHeader;
use App\Entity\Client;
use App\Entity\Emp;

class CrudController extends AbstractController implements IHeader
{
    protected $entityManager;
    protected $clientRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->setClientRepository($this->getEntityManager()->getRepository(Client::class));
    }

    /**
     * Deletes a client by its id.
     *
     * @param  number $id
     * @return Response
     */
    #[Route('/client/delete/{id}', name: 'delete_client')]
    public function delete($id): Response
    {
        $this->getClientRepository()->deleteClient($id);
        return $this->redirectToList();
    }

    /**
     * Updates a client by its id.
     *
     * @param  number $id
     * @return Response
     */
    #[Route('/client/update/{id}', name: 'update_client')]
    public function update($id): Response
    {
        $empRepository = $this->getEntityManager()->getRepository(Emp::class);

        $this->getClientRepository()->updateClient($id);

        return $this->render("update.html", [
            "client" => $this->getClientRepository()->find($id),
            "employees" => $empRepository->findAll()
        ]);
    }

    /**
     * Inserts a new client.
     *
     * @return Response
     */
    #[Route('/client/insert', methods: ['GET'], name: 'insert_client')]
    public function insert(Request $request): Response
    {
        $empRepository = $this->getEntityManager()->getRepository(Emp::class);

        $this->getClientRepository()->insertClient();

        if ($request->isMethod('GET')) {
            return $this->render("insert.html", [
                "employees" => $empRepository->findAll()
            ]);
        } else
            return $this->redirectToList();
    }

    /**
     * Redirects to the clients list page.
     *
     * @return Response
     */
    public function redirectToList(): Response
    {
        return new RedirectResponse('/client/list');
    }

    /**
     * Get the value of clientRepository
     */
    public function getClientRepository()
    {
        return $this->clientRepository;
    }

    /**
     * Set the value of clientRepository
     *
     * @return  self
     */
    public function setClientRepository($clientRepository)
    {
        $this->clientRepository = $clientRepository;

        return $this;
    }

    /**
     * Get the value of entityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     * Set the value of entityManager
     *
     * @return  self
     */
    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;

        return $this;
    }
}
