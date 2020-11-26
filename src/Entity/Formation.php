<?php

namespace App\Entity;

use DateTime;
use PhpParser\Node\Expr\AssignOp\Mod;

/**
 * Formation
 */
class Formation extends Model
{

  private $userId;
  private $title;
  private $school;
  private $graduate;
  private $startDate;
  private $endDate;
  private $description;

  protected $table = "FORMATIONS";


  /**
   * __construct
   *
   * @return void
   */
  public function __constructFORMATIONS(
    int $userId,
    string $title,
    string $school,
    string $graduate,
    DateTime $startDate,
    DateTime $endDate,
    string $description
  ) {
    $this->userId = $userId;
    $this->title = $title;
    $this->school = $school;
    $this->graduate = $graduate;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->description = $description;
    $this->pdo = \Database::getPdo();
  }

  /**
   * setUserId
   *
   * @param  mixed $id
   * @return void
   */
  public function setUserId(int $id): void
  {
    $this->userId = $id;
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
  public function setTitle($title): void
  {
    $this->title = $title;
  }

  /**
   * geTitle
   *
   * @return string
   */
  public function getTitle(): string
  {
    return $this->title;
  }

  /**
   * setSchool
   *
   * @param  mixed $school
   * @return void
   */
  public function setSchool(string $school): void
  {
    $this->school = $school;
  }

  /**
   * getSchool
   *
   * @return string
   */
  public function getSchool(): string
  {
    return $this->school;
  }

  /**
   * setGraduate
   *
   * @param  mixed $graduate
   * @return void
   */
  public function setGraduate($graduate): void
  {
    $this->graduate = $graduate;
  }

  /**
   * geGraduate
   *
   * @return string
   */
  public function getGraduate(): string
  {
    return $this->graduate;
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

  /**
   * setDescription
   *
   * @param  mixed $description
   * @return void
   */
  public function setDescription($description): void
  {
    $this->description = $description;
  }

  /**
   * geDescription
   *
   * @return string
   */
  public function getDescription(): string
  {
    return $this->description;
  }
}