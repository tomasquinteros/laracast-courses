<?php

    class Database
    {

        public PDO $connection;

        public function __construct($config)
        {
            $dsn = 'mysql:'.http_build_query($config, '', ';');
            $this->connection = new PDO($dsn, 'tomas', 'admin');
        }

        public function query($query, $params = [])
        {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);

            return $statement;
        }

    }