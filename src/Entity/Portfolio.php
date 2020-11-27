<?php

namespace App\Entity;

use DateTime;

/**
 * Portfolio
 */
class Portfolio extends Model
{

  private $userId;
  private $title;
  private $createdDate;
  private $description;
  private $url;

  protected $table = "PORTFOLIO";

  /**
   * __construct
   *
   * @return void
   */
  public function __constructPORTFOLIO(
    int $ident,
    string $title,
    DateTime $createdDate,
    string $description,
    string $url
  ) {
    $this->userId = $ident;
    $this->title = $title;
    $this->createdDate = $createdDate;
    $this->description = $description;
    $this->url = $url;
    $this->pdo = \Database::getPdo();
  }

  /**
   * setId
   *
   * @param  mixed $ident
   * @return void
   */
  public function setId(string $ident)
  {
    $this->userId = $ident;
  }

  /**
   * getId
   *
   * @return int
   */
  public function getId(): int
  {
    return $this->userId;
  }


  /**
   * setTitle
   *
   * @param  mixed $title
   * @return void
   */
  public function setTitle(string $title): void
  {
    $this->title = $title;
  }

  /**
   * getTitle
   *
   * @return string
   */
  public function getTitle(): string
  {
    return $this->title;
  }

  /**
   * setCreationDate
   *
   * @param  mixed $date
   * @return void
   */
  public function setCreationDate(DateTime $date)
  {
    $this->creationDate = $date;
  }

  /**
   * getCreatedDate
   *
   * @return DateTime
   */
  public function getCreatedDate(): DateTime
  {
    return $this->createdDate;
  }

  /**
   * setDescription
   *
   * @param  mixed $description
   * @return void
   */
  public function setDescription(string $description)
  {
    $this->description = $description;
  }

  /**
   * getDescription
   *
   * @return string
   */
  public function getDescription(): string
  {
    return $this->description;
  }


  /**
   * setUrl
   *
   * @param  mixed $url
   * @return void
   */
  public function setUrl(string $url)
  {
    $this->url = $url;
  }

  /**
   * getUrl
   *
   * @return string
   */
  public function getUrl(): string
  {
    return $this->url;
  }
}
