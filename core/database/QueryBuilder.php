<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    /**
     * The PDO instance.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     *
     * @param PDO $pdo
     */
    public function __construct()
    {

    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function selectAll()
    {

    }

    /**
     * Insert a record into a table.
     *
     * @param  string $table
     * @param  array  $parameters
     */
    public function insert($table, $parameters)
    {

    }

    public function read()
    {
      
         
    }

    public function edit()
    {
      
         
    }

    public function delete()
    {
      
         
    }
}
