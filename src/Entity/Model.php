<?php

namespace App\Entity;

/**
 * Model
 */
abstract class Model
{
  protected $pdo;
  protected $table;

  /**
   * __construct
   *
   * @return void
   */
  public function __construct()
  {
    $this->pdo = \Database::getPdo();

    $arguments = func_get_args();
    $numberOfArguments = func_num_args();

    if (method_exists($this, $function = '__construct' . $this->table) && $numberOfArguments > 0) {
      call_user_func_array(array($this, $function), $arguments);
    }
  }

  /**
   * findAll
   *
   * @param  mixed $order
   * @return array
   */
  public function findAll(?string $order = ""): array
  {

    $sql = "SELECT * FROM {$this->table}";
    if ($order) {
      $sql .= " ORDER BY " . $order;
    }

    $resultats = $this->pdo->query($sql);
    return $resultats->fetchAll();
  }

  /**
   * find
   *
   * @param  mixed $id
   */
  public function find(int $id)
  {
    $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");

    $query->execute(['id' => $id]);

    return $query->fetch();
  }
}