<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;

class AddController extends AbstractController
{
   public function add()
   {
      $em = (new EntityManager())->get();
      $nuevo = new Users();
      $nuevo->setUserName("nuevoUser");
      $nuevo->setUserBirthDate(new \DateTime('2021-10-24'));
      $em->persist($nuevo);
      $em->flush();
   }

}
