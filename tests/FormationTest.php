<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class FormationTest extends TestCase
{

  public function testFormationCreation()
  {

    $datas = new Datas();
    $formation = $datas->getFormation();


    $date1 = $datas->getDate1();
    $date2 = $datas->getDate2();
    $id = $datas->getId();


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