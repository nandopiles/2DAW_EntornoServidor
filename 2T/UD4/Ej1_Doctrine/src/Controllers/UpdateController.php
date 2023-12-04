<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;

class UpdateController extends AbstractController
{
   public function update($id)
   {
      $em = (new EntityManager())->get();

      $usersRepository = $em->getRepository(Users::class);
      $user = $usersRepository->find($id);

      $user->setUserName("Pepe");
      $user->setUserBirthDate(new \DateTime('2021-10-22'));

      $em->persist($user);
      $em->flush();
   }

}
