<?php

namespace Test;

use App\Entity\Formation;
use DateTime;
use PHPUnit\Framework\TestCase;


class FormationTest extends TestCase
{

  public function testFormationCreation()
  {

    $date1 = new DateTime('NOW');
    $date2 = new DateTime('22-12-2020');

    $id = (int)uniqid();

    $formation = new Formation(
      $id,
      'Title',
      'Mon Ecole',
      'Mon Diplome',
      $date1,
      $date2,
      'Ma description'
    );

    $uid = $formation->getUserId();
    $title = $formation->getTitle();
    $school = $formation->getSchool();
    $graduate = $formation->getGraduate();
    $startDate = $formation->getStartDate();
    $endDate = $formation->getEndDate();
    $content = $formation->getDescription();

    $this->assertEquals($id, $uid);
    $this->assertEquals('Title', $title);
    $this->assertEquals('Mon Ecole', $school);
    $this->assertEquals('Mon Diplome', $graduate);
    $this->assertEquals($date1, $startDate);
    $this->assertEquals($date2, $endDate);
    $this->assertEquals('Ma description', $content);
  }
}