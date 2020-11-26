<?php

namespace Test;

use PHPUnit\Framework\TestCase;


class ExperienceTest extends TestCase
{
  public function testExperienceCreation()
  {
    $datas = new Datas();
    $experience = $datas->getExperience();


    $date1 = $datas->getDate1();
    $date2 = $datas->getDate2();
    $id = $datas->getId();


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