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
  public function findAll(int $ident, ?string $order = ""): array
  {

    $sql = "SELECT * FROM {$this->table}" . " WHERE USER_ID = {$ident}";
    if ($order) {
      $sql .= " ORDER BY " . $order;
    }
    $resultats = $this->pdo->query($sql);
    return $resultats->fetchAll();
  }

  /**
   * find
   *
   * @param  mixed $ident
   */
  public function find(int $ident)
  {
    $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");

    $query->execute(['id' => $ident]);

    return $query->fetch();
  }
}
