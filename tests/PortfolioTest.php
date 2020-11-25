<?php

namespace Test;

use App\Entity\Portfolio;
use DateTime;
use PHPUnit\Framework\TestCase;


class PortfolioTest extends TestCase
{
  public function testPortfolioCreation()
  {
    $id = (int)uniqid();
    $date = new DateTime('NOW');

    $portfolio = new Portfolio(
      $id,
      'Titre',
      $date,
      "La description",
      "mlapalus.dev@gmail.com"
    );

    $uid = $portfolio->getId();
    $title = $portfolio->getTitle();
    $createdDate = $portfolio->getCreatedDate();
    $content = $portfolio->getDescription();
    $url = $portfolio->getUrl();

    $this->assertEquals($id, $uid);
    $this->assertEquals('Titre', $title);
    $this->assertEquals($date, $createdDate);
    $this->assertEquals('La description', $content);
    $this->assertEquals('mlapalus.dev@gmail.com', $url);
  }
}