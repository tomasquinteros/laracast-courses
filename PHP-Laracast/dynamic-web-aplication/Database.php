<?php

    class Database
    {

        public PDO $connection;

        public function __construct($config)
        {
            $dsn = 'mysql:'.http_build_query($config, '', ';');
            $this->connection = new PDO($dsn, 'root', 'tomas');
        }

        public function query($query, $params = []): false|PDOStatement
        {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);

            return $statement;
        }

    }