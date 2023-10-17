<?php
declare(strict_types=1);

namespace Leinc\MinichanMysql;
use Leinc\MinichanMysql\Command\Statements;
use PDO;
use PDOException;

final class MiniMysql extends Statements {
    
    /**
     * Constructor
     * Connect to the database server
     *
     * @param  array $config
     * @throws PDOException
     */
    public function __construct(array $config) {
        if (!isset($config['options'])) {
            $config['options'] = array();
        }

        if (isset($config['socket']) && $config['socket']) {
            $dsn = 'mysql:unix_socket=' . trim($config['socket']);
        } else {
            $dsn = 'mysql:host=' . trim($config['host']);
            if (isset($config['port']) && is_int($config['port'] * 1)) {
                $dsn .= ';port=' . $config['port'];
            }
        }
        if (isset($config['dbname']) && $config['dbname']) {
            $dsn .= ';dbname=' . trim($config['dbname']);
        }
        if (isset($config['charset']) && $config['charset']) {
            $dsn .= ';charset=' . trim($config['charset']);
        }

        if (isset($config['logMode'])) {
            $this->logMode = $config['logMode'];
        }

        try {
            $this->pdo = new PDO($dsn, trim($config['username']), $config['password'], $config['options']);
        } catch (PDOException $e) {
            throw $e;
        }

        $this->dbConfig = $config;
    }
}