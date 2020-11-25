<?php

namespace Test;

use App\Entity\User;
use DateTime;
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
    $user = new User(
      'Lapalus',
      'mimi',
      'Michel',
      new DateTime('21-06-1973'),
      'Ma description'
    );

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
}