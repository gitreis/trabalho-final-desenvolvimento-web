<?php

  class Conexao
  {
    private const HOST = 'localhost';
    private const USER = 'root';
    private const DBNAME = 'desweb';
    private const PASSWD = '';

    private const OPTIONS = [
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
      PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;

    /**
     * @return PDO
     */
    public static function getInstance(): PDO
    {
      if(empty(self::$instance)) {
        try {
          self::$instance = new PDO(
            sprintf('
              dsn: mysql:host=%s;dbname=%s,
              username:%s,
              passwd:%s,
              option:%s'
              , self::HOST
              , self::DBNAME
              , self::USER
              , self::PASSWD
              , self::OPTIONS
            )
          );

        } catch (PDOException $exception) {
          die('<h1>Opa! Falha ao conectar!</h1>');
        }
      }
      return self::$instance;
    }

    final private function __construct()
    {

    }

    final private function __clone()
    {

    }
  }