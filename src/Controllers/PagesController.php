<?php

namespace App\Controllers;

use App\Renderer;
use App\Entity\User;
use App\Entity\Formation;
use App\Entity\Experience;
use App\Entity\Portfolio;
use App\Entity\PortfolioTags;

class PagesController
{

  public function index()
  {
    $user = new User();
    $data = $user->find(1);

    $pageTitle = "Accueil";

    Renderer::render('index', compact('pageTitle', 'data'));
  }

  public function cv()
  {

    $experience = new Experience();
    $dataExp = $experience->findAll(1, 'START_DATE DESC');
    $formation = new Formation();
    $dataFormation = $formation->findAll(1);

    $pageTitle = "Curriculum Vitae";

    Renderer::render('cv', compact('pageTitle', 'dataExp', 'dataFormation'));
  }

  public function portfolio()
  {

    $portfolio = new Portfolio();
    $dataPortfolio = $portfolio->findAll(1);

    $portfolioTags = new PortfolioTags();
    $dataPortfolioTags = $portfolioTags->findAll(1);

    $pageTitle = "Portfolio";

    Renderer::render('portfolio', compact('pageTitle', 'dataPortfolio', 'dataPortfolioTags'));
  }
}