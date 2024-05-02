<?php

namespace app\library;

use app\database\models\User;

class Auth
{
  public function attempt(): bool
  {
    $user = new User;
    $userFound = $user->find();

    if ($userFound) {
      return true;
    }

    return false;
  }
}
