<?php

namespace App\Entity;

use DateTime;

/**
 * Experience
 */
class Experience extends Model
{

  private $userId;
  private $title;
  private $company;
  private $description;
  private $startDate;
  private $endDate;

  protected $table = "EXPERIENCES";

  /**
   * __construct
   *
   * @return void
   */
  public function __constructEXPERIENCES(
    int $ident,
    string $title,
    string $company,
    string $description,
    DateTime $startDate,
    DateTime $endDate
  ) {
    $this->userId = $ident;
    $this->title = $title;
    $this->company = $company;
    $this->description = $description;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->pdo = \Database::getPdo();
  }

  /**
   * setUserId
   *
   * @param  mixed $ident
   * @return void
   */
  public function setUserId(int $ident): void
  {
    $this->userId = $ident;
  }

  /**
   * getUserId
   *
   * @return int
   */
  public function getUserId(): int
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
   * setCompany
   *
   * @param  mixed $company
   * @return void
   */
  public function setCompany(string $company): void
  {
    $this->company = $company;
  }

  /**
   * getCompany
   *
   * @return string
   */
  public function getCompany(): string
  {
    return $this->company;
  }

  /**
   * setDescription
   *
   * @param  mixed $description
   * @return void
   */
  public function setDescription(string $description): void
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
   * setStartDate
   *
   * @param  mixed $date
   * @return void
   */
  public function setStartDate(DateTime $date): void
  {
    $this->startDate = $date;
  }

  /**
   * getStartDate
   *
   * @return DateTime
   */
  public function getStartDate(): DateTime
  {
    return $this->startDate;
  }

  /**
   * setEndDate
   *
   * @param  mixed $date
   * @return void
   */
  public function setEndDate(DateTime $date): void
  {
    $this->endDate = $date;
  }

  /**
   * getEndDate
   *
   * @return DateTime
   */
  public function getEndDate(): DateTime
  {
    return $this->endDate;
  }
}
