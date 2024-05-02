<?php

namespace app\database\models;

use stdClass;

class User
{
  public function find(): stdClass|null
  {
    $data = new stdClass();
    $data->id = 1;
    $data->name = 'John Doe';
    $data->email = 'xandecar@hotmail.com';
    return $data;
  }
}
