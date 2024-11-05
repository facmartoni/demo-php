<?php

  class DB
  {
    public PDO $connection;

    function __construct($config, $username, $password) {
      $dsn = 'mysql:' . http_build_query($config, arg_separator: ';');
      $this->connection = new PDO(
        $dsn, $username, $password,
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
      );
    }

    function query($query, $params): false|PDOStatement {
      $statement = $this->connection->prepare($query);
      $statement->execute($params);
      return $statement;
    }
  }