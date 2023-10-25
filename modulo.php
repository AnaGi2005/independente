<?php
class Modulo
{
    /*nome do banco*/
    private static $dbname = 'lojasgeoana';
    /*caminho do servidor*/
    private static $host = 'localhost';
    /*usuario do banco*/
    private static $user = 'root';
    /*senha do banco*/
    private static $pass = '';
    /*contador*/
    private static $con = null;

    /*função que constroi a classe de conexão*/
    public function __construct()
    {
        die('A função Init não é permintida');
    }

    /*função responsável pro conectar-se a base de dados*/
    public static function conectar()
    {
        if (null == self::$con) {
            /*o que está dentro do try é o que precisa funcionar*/
            try {
                self::$con = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$user, self::$pass);
            }
            /*o que está no catch é a resposta da falha do try*/ catch (Exception $ex) {
                die($ex->getMessage());
            }
        }
        return self::$con;
    }
    public static function desconectar()
    {
        self::$con = null;
    }
}
