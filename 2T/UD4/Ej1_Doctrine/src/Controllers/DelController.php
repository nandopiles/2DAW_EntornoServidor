<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;

class DelController extends AbstractController
{
   public function del($id)
   {
      $em = (new EntityManager())->get();
      $usersRepository = $em->getRepository(Users::class);
      $user = $usersRepository->find($id);
      if ($user) $em->remove($user);
      $em->flush();
   }

}
