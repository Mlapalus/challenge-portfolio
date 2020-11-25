<?php

namespace App\Entity;

use DateTime;

/**
 * User
 */
class User extends Model
{

  private $lastName;
  private $userName;
  private $firstName;
  private $birthDate;
  private $description;

  protected $table = "USER";


  /**
   * __construct
   *
   * @return void
   */
  public function __construct(
    string $lastName,
    string $userName,
    string $firstName,
    DateTime $birthDate,
    string $description
  ) {
    $this->lastName = $lastName;
    $this->userName = $userName;
    $this->firstName = $firstName;
    $this->birthDate = $birthDate;
    $this->description = $description;
    $this->pdo = \Database::getPdo();
  }

  /**
   * setLastName
   *
   * @param  mixed $lastName
   * @return void
   */
  public function setLastName(string $lastName): void
  {
    $this->lastName = $lastName;
  }

  /**
   * setUserName
   *
   * @param  mixed $userName
   * @return void
   */
  public function setUserName(string $userName): void
  {
    $this->userName = $userName;
  }

  /**
   * setFirstName
   *
   * @param  mixed $firstName
   * @return void
   */
  public function setFirstName(string $firstName): void
  {
    $this->firstName = $firstName;
  }

  /**
   * setBirthDate
   *
   * @param  mixed $birthDate
   * @return void
   */
  public function setBirthDate(DateTime $birthDate): void
  {
    $this->birthDate = $birthDate;
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
   * getLastName
   *
   * @return string
   */
  public function getLastName(): string
  {
    return $this->lastName;
  }

  /**
   * getUserName
   *
   * @return string
   */
  public function getUserName(): string
  {
    return $this->userName;
  }

  /**
   * getFirstName
   *
   * @return string
   */
  public function getFirstName(): string
  {
    return $this->firstName;
  }

  /**
   * getBirthDate
   *
   * @return DateTime
   */
  public function getBirthDate(): DateTime
  {
    return $this->birthDate;
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
}