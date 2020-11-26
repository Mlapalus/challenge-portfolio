<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
  public function testReadAccessToAllTablesOfTheDatabase()
  {
    $datas = new Datas;

    $user = $datas->getUser();
    $experiences = $datas->getExperience();
    $formations = $datas->getFormation();
    $portfolio = $datas->getPortfolio();
    $portfolioTags = $datas->getPortfolioTags();

    $resultUser = $user->findAll();
    $countUser = count($resultUser);

    $resultExperiences = $experiences->findAll();
    $countExperiences = count($resultExperiences);

    $resultFormations = $formations->findAll();
    $countFormations = count($resultFormations);

    $resultPortfolio = $portfolio->findAll();
    $countPortfolio = count($resultPortfolio);

    $resultPortfolioTags = $portfolioTags->findAll();
    $countPortfolioTags = count($resultPortfolioTags);

    $this->assertEquals('1', $countUser);
    $this->assertEquals('1', $countExperiences);
    $this->assertEquals('1', $countFormations);
    $this->assertEquals('1', $countPortfolio);
    $this->assertEquals('2', $countPortfolioTags);
  }
}