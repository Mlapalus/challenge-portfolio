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
   * @param  mixed $ident
   * @param  mixed $tag
   * @return void
   */
  public function __constructPORTFOLIO_TAGS(int $ident, string $tag)
  {
    $this->portfolioId = $ident;
    $this->tag = $tag;
  }



  /**
   * findAll
   *
   * @param  mixed $order
   * @return array
   */
  public function findAll(int $ident, ?string $order = ""): array
  {

    $sql = "SELECT * FROM {$this->table}";
    if ($order) {
      $sql .= " ORDER BY " . $order;
    }

    $resultats = $this->pdo->query($sql);
    return $resultats->fetchAll();
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
   * @param  mixed $ident
   * @return void
   */
  public function setPortfolioId(int $ident): void
  {
    $this->portfolioId = $ident;
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
