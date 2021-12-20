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

    public function selectAll($table,$offset=null,$quantItens=null)
    {
        if($quantItens > 0 && $offset >= 0){

            $sql = "SELECT * FROM {$table} LIMIT {$offset}, {$quantItens} ";
          

        }else{
            
            $sql = "SELECT * FROM {$table}";
        }
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

    // public function select_produto_imagem($id)
    // {
    //     $sql = "SELECT nome_imagem FROM imagens WHERE imagens.produto_idproduto = :id";

    //     try
    //     {
    //         $stmt = $this->pdo->prepare($sql);
    //         $stmt->execute(["id"=>$id]);

    //         return $stmt->fetchAll(PDO::FETCH_CLASS);
    //     } catch (Exception $e)
    //     {
    //         die($e->getMessage());
    //     }
    // }

    // public function select($table, $coluna)
    // {
    //     $sql= "SELECT {$coluna} FROM {$table}";

    //     try
    //     {
    //         $stmt = $this->pdo->prepare($sql);
    //         $stmt->execute();   

    //         return $stmt->fetchAll(PDO::FETCH_CLASS);
    //     } catch (Exception $e)
    //     {
    //         die($e->getMessage());
    //     }
    // }

   

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
    public function select($table,$id)
    {
        
        $sql = "SELECT * FROM {$table} WHERE id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select_produto_imagem($id)
    {
        $sql = "SELECT nome_imagem FROM imagens WHERE imagens.produto_idproduto = :id";

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(["id"=>$id]);

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function select_produto()
    {
        $sql= "SELECT id FROM `produtos` ORDER BY id DESC LIMIT 1";

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

    public function delete_imagens($table,$id)
    {
        $sql = "DELETE FROM {$table} WHERE produto_idproduto = {$id}";

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function read($table,$id)
    {
        $sql = "SELECT * FROM {$table} WHERE id = :id";

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(["id"=>$id]);

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    
    public function searchprodutos($table, $searcher)
    {
      $sql = "SELECT * FROM {$table} WHERE nome_produto LIKE '%{$searcher}%' ";

      try 
      {
          $stmt = $this->pdo->prepare($sql);
          $stmt->execute();

          return $stmt->fetchAll(PDO::FETCH_CLASS);
      }

      catch (Exception $e)
      {

         die($e->getMessage());

      }
    }

    public function selectAlldesc($table)
    {
      $sql = "SELECT * FROM {$table} ORDER BY id DESC LIMIT 10";

      try 
      {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
      }

      catch (Exception $e)
      {

        die($e->getMessage());

      }
    }

    public function categorias($table){
        //$sql = "SELECT * FROM {$table} as produtos,{$table2} as categorias,{$table3} as imagens WHERE categorias.id = :id and imagens.id = :id";
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


    public function produtoCategoria($id){
        $sql = "SELECT nome_categoria FROM categorias WHERE categorias.id = :id";

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(["id"=>$id]);

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
        
    }

    public function contaItens($table){

        $sql = "SELECT COUNT(*) FROM {$table}";

        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return intval($stmt->fetch(PDO::FETCH_NUM)[0]);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}