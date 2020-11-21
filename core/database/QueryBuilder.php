<?php

namespace App\Core\Database;

use PDO;
use Exception;

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

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

    public function search($table,$parameters)
    {
        $tamanho = count(array_keys($parameters));

        $sql = "select * from {$table} where ";
        for ($i = 0; $i < ($tamanho); $i++) 
        {   
            $sql = $sql . (array_keys($parameters)[$i] ). '=' . "'" . (array_values($parameters)[$i]) . "'";
            if($i < $tamanho-1)
                $sql = $sql . ' and ';
        }     

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public function read($table, $id)
    {
        $sql = sprintf(
            "select * from %s where id = %s",
            $table,
            $id
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public function edit($table, $field, $value, $id)
    {
        $sql = sprintf(
            'update %s set %s = %s where id = %s',
            $table,
            $field,
            $value,
            $id
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public function delete($table, $id)
    {
        $sql = sprintf(
            "delete from {$table} where id = {$id}"
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    /**
     * Função que conta o número de linhas
     */
    public function getTotalRows($table)
    {
        $sql = "SELECT COUNT(*) FROM {$table}";

        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            $cont = $statement->fetch();
            return $cont;
        }catch(Exception $e)
        {
            $e->getMessage();
        }
    }
}
