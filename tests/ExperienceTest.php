<?php

namespace Test;

use App\Entity\Experience;
use DateTime;
use PHPUnit\Framework\TestCase;


class ExperienceTest extends TestCase
{
  public function testExperienceCreation()
  {

    $date1 = new DateTime('NOW');
    $date2 = new DateTime('22-12-2020');
    $id = (int)uniqid();

    $experience = new Experience(
      $id,
      'Titre',
      'La société',
      'Ma description',
      $date1,
      $date2,
    );

    $uid = $experience->getUserId();
    $title = $experience->getTitle();
    $company = $experience->getCompany();
    $startDate = $experience->getStartDate();
    $endDate = $experience->getEndDate();
    $content = $experience->getDescription();

    $this->assertEquals($id, $uid);
    $this->assertEquals('Titre', $title);
    $this->assertEquals('La société', $company);
    $this->assertEquals($date1, $startDate);
    $this->assertEquals($date2, $endDate);
    $this->assertEquals('Ma description', $content);
  }
}