<?php

namespace Test;

use PDO;
use App\Entity\User;
use App\Entity\Formation;
use App\Entity\Portfolio;
use App\Entity\Experience;
use App\Entity\PortfolioTags;

/**
 * Datas
 */
class Datas
{

  private $user;
  private $experience;
  private $formation;
  private $portfolio;
  private $portfolioTags;
  private $id;
  private $date1;
  private $date2;
  private $tag;
  private $pdo;

  /**
   * __construct
   *
   * @return void
   */
  public function __construct()
  {
    $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=PHP_PORTFOLIO_PROJECT;charset=utf8', 'root', 'root', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $this->id = (int)uniqid();
    $this->date1 = new \DateTime('NOW');
    $this->date2 = new \DateTime('22-12-2020');
    $this->tag = "Angular";
    $this->user =
      new User(
        'Lapalus',
        'mimi',
        'Michel',
        new \DateTime('21-06-1973'),
        'Ma description'
      );
    $this->experience =
      new Experience(
        $this->id,
        'Titre',
        'La société',
        'Ma description',
        $this->date1,
        $this->date2,
      );
    $this->formation =
      new Formation(
        $this->id,
        'Title',
        'Mon Ecole',
        'Mon Diplome',
        $this->date1,
        $this->date2,
        'Ma description'
      );
    $this->portfolio =
      new Portfolio(
        $this->id,
        'Titre',
        $this->date1,
        "La description",
        "mlapalus.dev@gmail.com"
      );
    $this->portfolioTags = new PortfolioTags(
      $this->id,
      $this->tag
    );
  }

  /**
   * getPDO
   *
   * @return void
   */
  public function getPDO(): PDO
  {
    return $this->pdo;
  }

  /**
   * getUser
   *
   * @return void
   */
  public function getUser(): User
  {
    return $this->user;
  }

  /**
   * getExperience
   *
   * @return void
   */
  public function getExperience(): Experience
  {
    return $this->experience;
  }

  /**
   * getFormation
   *
   * @return void
   */
  public function getFormation(): Formation
  {
    return $this->formation;
  }

  /**
   * getPortfolio
   *
   * @return void
   */
  public function getPortfolio(): Portfolio
  {
    return $this->portfolio;
  }

  /**
   * getPortfolioTag
   *
   * @return void
   */
  public function getPortfolioTags(): PortfolioTags
  {
    return $this->portfolioTags;
  }

  /**
   * getDate1
   *
   * @return void
   */
  public function getDate1()
  {
    return $this->date1;
  }
  /**
   * getDate2
   *
   * @return void
   */
  public function getDate2()
  {
    return $this->date2;
  }
  /**
   * getId
   *
   * @return void
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * getTag
   *
   * @return void
   */
  public function getTag()
  {
    return $this->tag;
  }
}