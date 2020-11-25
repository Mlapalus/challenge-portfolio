<?php

class Database
{
  /**
   * getPdo : Return a database connection
   *
   * @return PDO
   */
  public static function getPdo(): PDO
  {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=PHP_PORTFOLIO_PROJECT;charset=utf8', 'root', 'root', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    return $pdo;
  }
}