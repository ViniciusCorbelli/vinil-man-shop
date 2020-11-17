<?php

namespace App\Core\Database;

use PDO;
use Exception;

class QueryBuilder
{
    /**
     * The PDO instance.
     * 
     * @var PDO
     */
    protected $pdo;

    /**
     * Construtor do PDO
     *
     * @param PDO $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo; 
    }

    /**
     * Seleciona todos os elementos de uma tabela
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
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    /**
     * Busca por id
     * 
     * @param int $search
     */
    public function read($table,$id)
    {
        $sql = sprintf(
            "select * from %s where id = %s",
            $table,
            $id        
        );
        
        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute();
            
            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch(Exception $e)
        {
            $e->getMessage();
        }
    }

    public function edit($table,$field,$value,$id)
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
 
            $statement->execute();
        } catch (Exception $e){ 
             echo('Captured Exception: ' . $e->getMessage() . "\n");
        }
    }

    public function delete($table,$id)
    {
       $sql = sprintf(
           'delete from %s where id = %s',
           $table,
           $id
       );

       try{
           $statement = $this->pdo->prepare($sql);

           $statement->execute();
       } catch (Exception $e){
            echo('Captured Exception: ' . $e->getMessage() . "\n");
       }
    }
}
