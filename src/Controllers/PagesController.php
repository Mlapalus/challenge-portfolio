<?php

namespace App\Controllers;

use App\Renderer;
use App\Entity\User;
use App\Entity\Formation;
use App\Entity\Experience;

class PagesController
{

  public function index()
  {
    $user = new User();
    $data = $user->find(1);

    $pageTitle = "Accueil";

    Renderer::render('index', compact('pageTitle', 'data'));
  }

  public function experience()
  {

    $experience = new Experience();
    $data = $experience->find(1);

    $pageTitle = "Experiences";

    Renderer::render('experiences', compact('pageTitle', 'data'));
  }

  public function formation()
  {

    $formation = new Formation();
    $data = $formation->find(1);

    $pageTitle = "Formations";

    Renderer::render('formations', compact('pageTitle', 'data'));
  }
}