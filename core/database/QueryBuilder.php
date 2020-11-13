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
    public function __construct($pdo)
    {
        $this->pdo = $pdo; 
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Insert a record into a table.
     *
     * @param  string $table
     * @param  array  $parameters
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values %s',
            $table, //Tabela onde será inserido
            implode(', ',array_keys($parameters)),
            ':' . implode(', :',array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch(Exception $e)
        {
            echo('Captured Exception: ' . $e->getMessage() . "\n");
        }
    }

    /**
     * Busca por id
     * 
     * @param int $search
     */
    public function read($table,$parameters,$search)
    {
        $statement = $this->pdo->prepare("select * from {$table} where id = {$search}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function edit($table,$parameters,$field,$value,$id)
    {
        $sql = sprintf(
            'update %s set %s = %s where id = %s',
            $table,
            $field,
            $value,
            $id
        );

        try{
            $statement = $this->pdo->prepare($sql);
 
            $statement->execute($parameters);
        } catch (Exception $e){
             echo('Captured Exception: ' . $e->getMessage() . "\n");
        }
    }

    public function delete($table,$parameters, $id)
    {
       $sql = sprintf(
           'delete from %s where id = %s',
           $table,
           $id
       );

       try{
           $statement = $this->pdo->prepare($sql);

           $statement->execute($parameters);
       } catch (Exception $e){
            echo('Captured Exception: ' . $e->getMessage() . "\n");
       }
    }
}
