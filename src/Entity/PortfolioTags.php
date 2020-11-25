<?php

namespace App\Entity;

/**
 * PortfolioTags
 */
class PortfolioTags extends Model
{

  private $portfolioId;
  private $tag;
  protected $table = "PORTFOLIO_TAGS";


  /**
   * __construct
   *
   * @param  mixed $id
   * @param  mixed $tag
   * @return void
   */
  public function __construct(int $id, string $tag)
  {
    $this->portfolioId = $id;
    $this->tag = $tag;
    $this->pdo = \Database::getPdo();
  }

  /**
   * getPortfolioId
   *
   * @return int
   */
  public function getPortfolioId(): int
  {
    return $this->portfolioId;
  }

  /**
   * setPortfolioId
   *
   * @param  mixed $id
   * @return void
   */
  public function setPortfolioId(int $id): void
  {
    $this->portfolioId = $id;
  }

  /**
   * getTag
   *
   * @return string
   */
  public function getTag(): string
  {
    return $this->tag;
  }

  /**
   * setTag
   *
   * @param  mixed $tag
   * @return void
   */
  public function setTag(string $tag): void
  {
    $this->tag = $tag;
  }
}