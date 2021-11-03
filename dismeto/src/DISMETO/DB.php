<?php

/**
 * This file is part of DISMETO package.
 */

namespace DLL\DISMETO;

/**
 * Class DB
 * The class is responsible for working with the DB (MySQL + PDO)
 *
 * @author Nilefest <nikitaleo777333@gmail.com>
 * @package DLL\DISMETO
 */
class DB
{
    private $pdo = null;
    public $tables = [];
    
    /**
     * Class constructor.
     *
     * @param array $db_config confir for connect
     */
    function __construct ($db_config, $tables) {
        $this->pdo = $this->getConnect($db_config);
        $this->tables = $tables;
    }
    
    /**
     * Get new connect to MySQL with PDO.
     *
     * @param array $data confir for connect
     * @return object PDO
     */
    private function getConnect($db_config) {
        $host = $db_config['host'];
        $user = $db_config['user'];
        $pass = $db_config['password'];
        $dbname   = $db_config['db_name'];
        $charset = $db_config['charset'];

        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
        $opt = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new \PDO($dsn, $user, $pass, $opt);
        
        return $pdo;
    }
    
    /**
     * Database query with response
     *
     * @param string $sql sql-string for query
     * @param array $args arguments for query
     * @param bool/string $col_to_key column name for key in assoc array (or noassoc)
     * @return object
     */
    public function querySelect($sql, $args = [], $col_to_key = false) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        
        $output = [];
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            if($col_to_key)
                $output[$row[$col_to_key]] = $row;
            else
                $output[] = $row;
        }
        
        return $output;
    }
    
    /**
     * Database query without response
     *
     * @param string $sql sql-string for query
     * @param array $args arguments for query
     * @return object
     */
    public function queryInsert($sql, $args = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        
        return $this->pdo->lastInsertId();
    }
    
    /**
     * Dump DB from file
     *
     * @return bool
     */
    public function dump() {
        $sql = 'DROP TABLE IF EXISTS ';
        foreach($this->tables as $table) $sql .= "`$table`, ";
        $this->pdo->exec(substr($sql, 0, -2));
        
        $sql = file_get_contents(__DIR__ . '/dump.sql');
        $this->pdo->exec($sql);
        
        return 'Refresh DB: Success';
        return true;
    }
}
