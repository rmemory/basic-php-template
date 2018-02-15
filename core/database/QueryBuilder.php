<?php

class QueryBuilder {
  private $pdo;

  public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
  }

  public function selectAll($table) {
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();
    // return $statement->fetchAll(PDO::FETCH_OBJ);
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $parameters) {
    // insert into table keys(like 'names') values ()
    // A more refined example:
    // insert into names (name, email) values ('Joe', 'joe@example.com')
    // statement->execute(['names' => 'Joe', 'email' => 'joe@example.com'])

    $sql = sprintf('insert %s (%s) values (%s)',
                   $table,
                   /*
                    array_keys provides an array containing
                    an array of the keys in that array.
                    Implode creates a flattened string, in this
                    case separated by commas.
                   */
                   implode(",", array_keys($parameters)),
                   /*
                    Next we need place holders, which are the keys
                    of the parmeters, each with a ':' in front
                    of them. The leading colon is to add the first
                    colon.
                   */
                   ':' . implode(", :", array_keys($parameters))
                 );

    try {
      $statement = $this->pdo->prepare($sql);

      /*
        By passing in the parameters here, we are binding the actual
        values (Joe) to the placeholders (:name). We could do this
        by using $statement->bindParam(":name", "Joe") but this
        is easier. The execute will accept an array, like $parameters
      */
      $statement->execute($parameters);

    } catch (Exception $e) {
      /*
         Probably should dispaly a 404 page here or something
      */
      die("Error during insertion into $table");
    }
  }
}

?>
