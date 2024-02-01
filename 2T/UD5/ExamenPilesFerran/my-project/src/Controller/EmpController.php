<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Entity\Emp;
use App\Form\ClienteType;
use App\Form\EmpType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmpController extends AbstractController
{
    protected $entityManager;
    protected $empRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->setEmpRepository($this->getEntityManager()->getRepository(Emp::class));
    }

    /**
     * Displays all the clients saved in the database.
     *
     * @param  EntityManagerInterface $entityManager
     * @return Response
     */
    #[Route('/emp/list', name: 'app_emps')]
    public function listEmps(): Response
    {
        $emps = $this->getEmpRepository()->findAll();

        return $this->render('emp/empList.html', [
            "emps" => $emps
        ]);
    }

    /**
     * Shows all the info related to the client selected.
     *
     * @param  EntityManagerInterface $entityManager
     * @param  integer $id
     * @return Response
     */
    #[Route('/emp/detail/{id}', name: 'app_detailEmp')] // Fetches via primary key because {id} is in the route
    public function showDetailClient(Emp $empSelected): Response
    {
        return $this->render('emp/detail.html', [
            "emp" => $empSelected,
        ]);
    }

    /**
     * Updates a client by its id.
     *
     * @param  integer $id
     * @return Response
     */
    #[Route('/emp/update/{id}', methods: ['GET'], name: 'update_form_emp')]
    public function displayUpdateForm(Emp $emp, Request $request): Response
    {
        $myForm = $this->createForm(EmpType::class, $emp);
        $myForm->handleRequest($request);

        return $this->render("/emp/update.html", [
            "emp" => $emp,
            'updateForm' => $myForm->createView()
        ]);
    }

    /**
     * Updates a client by its id.
     *
     * @param  integer $id
     * @return Response
     */
    #[Route('/emp/update/{id}', methods: ['POST'], name: 'update_emp')]
    public function update(Emp $emp, Request $request): Response
    {
        $myForm = $this->createForm(EmpType::class, $emp);
        $myForm->handleRequest($request);

        $data = $myForm->getData();
        $this->getEmpRepository()->updateEmp($emp, $data);

        return $this->render("/emp/update.html", [
            "client" => $emp,
            'updateForm' => $myForm->createView()
        ]);
    }

    /**
     * Displays the insert form to fill the info of the new Client to add.
     *
     * @param  mixed $request
     * @return Response
     */
    #[Route('/emp/insert', methods: ['GET'], name: 'insert_form_emp')]
    public function displayInsertForm(Request $request): Response
    {
        $myForm = $this->createForm(ClienteType::class);
        $myForm->handleRequest($request);

        // If it's GET it will display the "insert" template.
        $empRepository = $this->getEntityManager()->getRepository(Emp::class);

        return $this->render("insert.html", [
            "employees" => $empRepository->findAll(),
            'insertForm' => $myForm->createView()
        ]);
    }

    /**
     * Inserts a new client.
     *
     * @return Response
     */
    #[Route('/emp/insert', methods: ['POST'], name: 'insert_emp')]
    public function insert(Request $request): Response
    {
        $myForm = $this->createForm(ClienteType::class);
        $myForm->handleRequest($request);

        // If it's POST it will insert the new client.
        $data = $myForm->getData();
        $this->getEmpRepository()->insertClient($data);

        return $this->redirectToRoute('app_clients', [
            "clients" => $this->getEmpRepository()->findAll()
        ]);
    }

    /**
     * Deletes a client by its id.
     *
     * @param  number $id
     * @return void
     */
    #[Route('/emp/delete/{id}', name: 'delete_emp')]
    public function delete(Cliente $client): Response
    {
        if ($client) {
            $this->getEmpRepository()->deleteClient($client);
        }

        return $this->redirectToRoute('app_clients', [
            "clients" => $this->getEmpRepository()->findAll()
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
     * Get the value of empRepository
     */
    public function getEmpRepository()
    {
        return $this->empRepository;
    }

    /**
     * Set the value of empRepository
     *
     * @return  self
     */
    public function setEmpRepository($empRepository)
    {
        $this->empRepository = $empRepository;

        return $this;
    }
}
