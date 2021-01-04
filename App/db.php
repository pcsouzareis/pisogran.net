<?php

namespace App;

class Db{

    static public function conecta(){

        try{
            $opt = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_EMULATE_PREPARES => false,
                \PDO::ERRMODE_EXCEPTION => true,
            ];

            
            $host = '127.0.0.1';
            $db   = 'pisogran';
            $usr  = 'postgres';
            $pwd  = '*123456*';            
            /*
            $db   = 'pisogran_banco';
            $usr  = 'pisogran_adm';
            $pwd  = '*982425677*';
            */
			$por  = '5432';
            $dsn  = "pgsql:host=$host;port=$por;dbname=$db;";            
            $conexao = new \PDO($dsn, $usr, $pwd, $opt);
            
            return $conexao;
            
        } catch (\PDOException $e) {
            die("Erro conexão : " . $e->getMessage());

        } catch (\Exception $e) {
            die("Erro : " . $e->getMessage());
        }
    }
}
    