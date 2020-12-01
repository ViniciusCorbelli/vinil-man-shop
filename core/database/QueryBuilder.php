<?php

namespace App\Core\Database;

use PDO;
use Exception;
use App\Core\App;

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

    public function selectAllUsers()
    {
        try {

            $statement = $this->pdo->prepare("select id,name,email from users");

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public function pesquisa($table, $parameters)
    {
        $sql = "select * from {$table} where ";
        $categorias = App::get('database')->selectAll('category');
        foreach ($categorias as $categoria) {
            
            if ($categoria->name == $parameters) {
                $sql = $sql . " id_category LIKE '%" . $categoria->id . "%'";
            }
        }

        if ($sql == "select * from {$table} where ") {
            $sql = $sql . " name LIKE '%" . $parameters . "%'";
        } else {
            $sql = $sql . " or name LIKE '%" . $parameters . "%'";
        }

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectLimit($table, $parameters,$act)
    {
        $sql = "select * from {$table}";

        if(isset($act) && !empty($act))
        {
            $sql = $sql . sprintf(' ORDER BY %s',implode(", ", array_values($act)));
            $sql = $sql . sprintf(' %s', implode(array_keys($act)));
        }

        $sql = $sql . sprintf(' limit %s ', implode(", ", array_values($parameters)));

        //die(var_dump($sql));
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();


            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            $e->getMessage();
        }
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
        } catch (\Exception $e) {
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

    public function edit($table, $parameters, $id)
    {
        $last = end($parameters);

        $sql = "update {$table} set ";
        foreach ($parameters as $item => $val) {
            if ($val == "$last") {
                $sql = $sql . "$item = '{$val}' ";
            } else {
                $sql = $sql . "$item = '{$val}', ";
            }
        };
        $sql = $sql . "where id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
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
        } catch (\Exception $e) {
        }
    }

    public function search($table, $parameters)
    {
        $tamanho = count(array_keys($parameters));

        $sql = "select * from {$table} where ";
        for ($i = 0; $i < ($tamanho); $i++) {
            $sql = $sql . (array_keys($parameters)[$i]) . '=' . "'" . (array_values($parameters)[$i]) . "'";
            if ($i < $tamanho - 1)
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

    /**
     * Função que conta o número de linhas
     */
    public function getTotalRows($table)
    {
        $sql = "SELECT COUNT(*) FROM {$table}";

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            $cont = $statement->fetch();
            return $cont;
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}
