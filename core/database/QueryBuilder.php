<?php

namespace App\Core\Database;

use PDO;

use Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo) ///construtor
    {
        $this->pdo = $pdo; 
    }

    public function selectAll($table)
    {
        $sql = "SELECT * FROM {$table}";

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

    public function select($table,$coluna)
    {
        $sql= "SELECT {$coluna} FROM {$table}";

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
        $values = ":" . implode(", :",array_keys($parametros));
        
         
        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
        

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parametros);

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function edit($table, $parametros, $id)
    {
        $sql = "UPDATE {$table} SET ";
        $colunas = [];
        foreach (array_keys($parametros) as $parametro){
            array_push($colunas,"{$parametro} = :{$parametro}");
            
        }
        $sql .= implode(", ",$colunas);
        $sql .= " WHERE id = :id";

        
        $parametros["id"]=$id;
        
      try 
      {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($parametros);

      }

      catch (Exception $e)
      {

         die($e->getMessage());

      }
    }

    public function delete($table,$id)
    {
        $sql = "DELETE FROM {$table} WHERE id = {$id}";

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function selectLogin($email)
    {
        $sql= "SELECT * FROM usuarios WHERE email = :email ";

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(compact('email'));

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}