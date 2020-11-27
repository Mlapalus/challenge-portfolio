<?php

namespace Test;

use PHPUnit\Framework\TestCase;


class PortfolioTest extends TestCase
{
  public function testPortfolioCreation()
  {

    $datas = new Datas;
    $portfolio = $datas->getPortfolio();
    $ident = $datas->getId();
    $date = $datas->getDate1();


    $uid = $portfolio->getId();
    $title = $portfolio->getTitle();
    $createdDate = $portfolio->getCreatedDate();
    $content = $portfolio->getDescription();
    $url = $portfolio->getUrl();

    $this->assertEquals($ident, $uid);
    $this->assertEquals('Titre', $title);
    $this->assertEquals($date, $createdDate);
    $this->assertEquals('La description', $content);
    $this->assertEquals('mlapalus.dev@gmail.com', $url);
  }
}
