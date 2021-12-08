<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo) ///construtor
    {
        $this->pdo = $pdo; 
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function select($table)
    {
        $sql= "select {$coluna} from {$table}";

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function insert($table, $parametros)
    {
        $columns = implode(", ",array_keys($parametros));
        // var_dump($columns);
        $values = implode(":",array_values($parametros));
        // var_dump($values);
        // die();
        $sql = "insert into {$table} ({$columns}) values ('".implode("', '", $parametros)."')";

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function edit($table, $parametros)
    {
        $columns = implode(", ",array_keys($parametros));

        $sql = "update $table set $columns='{".implode("', '", $parametros)."}'";

      try 
      {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

      }

      catch (Exception $e)
      {

         die($e->getMessage());

      }
    }

    public function delete($table,$id)
    {
        $sql = "delete from {$table} where id = {$id}";

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function read()
    {
      
    }
}
