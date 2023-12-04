<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;

class DeleteController extends AbstractController
{
   public function delete($id)
   {
      $em = (new EntityManager())->get();
      $usersRepository = $em->getRepository(Users::class);
      $user = $usersRepository->find($id);
      if ($user) $em->remove($user);
      $em->flush();
   }

}
