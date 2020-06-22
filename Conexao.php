<?php
require_once('config.php');
class Conexao
{
    private static $conexao;

    private function __construct()
    {}

    public static function getInstance()
    {
      try{
        if (is_null(self::$conexao)) {
            self::$conexao = new \PDO(DSN, USUARIO, SENHA);
            self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$conexao->exec('set names utf8');
        }
        return self::$conexao;
      }catch(PDOException $e){
          echo "Houve um problema durante a execução do PDO: ".$e;
      }catch(Exception $e){
          echo "Erro genérico de conexão: ".$e;
      }
    }
}