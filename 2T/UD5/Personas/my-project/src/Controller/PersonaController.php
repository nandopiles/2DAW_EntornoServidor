<?php

namespace App\Controller;

use App\Entity\Persona;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonaController extends AbstractController
{
    public $entityManager;
    public $personaReposiory;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->setEntityManager($entityManager);
        $this->setPersonasRepository($this->getEntityManager()->getRepository(Persona::class));
    }

    #[Route('/', name: 'app_persona')]
    public function listPersonas(): Response
    {
        $personas = $this->getPersonaRepository()->findAll();

        return $this->render('persona/index.html.twig', [
            "personas" => $personas
        ]);
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

    /**
     * Get the value of personaRepository
     */
    public function getPersonaRepository()
    {
        return $this->personaReposiory;
    }

    /**
     * Set the value of personaRepository
     *
     * @return  self
     */
    public function setPersonasRepository($personaRepository)
    {
        $this->personaReposiory = $personaRepository;

        return $this;
    }
}
