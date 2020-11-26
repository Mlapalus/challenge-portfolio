<?php

namespace Test;

use DateTime;
use App\Entity\User;
use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
  public function testPHPUnit()
  {
    $this->assertEquals('true', 'true');
    $this->assertEquals('false', 'false');
  }

  public function testUserCreation()
  {

    $datas = new Datas;
    $user = $datas->getUser();

    $lastName = $user->getLastName();
    $userName = $user->getUserName();
    $firstName = $user->getFirstName();
    $birthday = $user->getBirthDate();
    $content = $user->getDescription();

    $this->assertEquals('Lapalus', $lastName);
    $this->assertEquals('mimi', $userName);
    $this->assertEquals('Michel', $firstName);
    $this->assertEquals(new DateTime('21-06-1973'), $birthday);
    $this->assertEquals('Ma description', $content);
  }

  public function testReadOneUserOnDatabase()
  {
    $user = new User();
    $id = 1;
    $result = $user->find($id);
    $this->assertEquals('Doe', $result['LAST_NAME']);
  }
}