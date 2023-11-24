<?php
declare(strict_types=1);

namespace MinichanMysql\Config;

class Config {
    /**
     * Database config
     *
     * @var array
     */
    public $dbConfig = array();

    public function __construct() {
    }

    /**
     * Config database
     *
     * @param  mixed  $config
     * @param  string $value
     * @return mixed
     */
    public function databaseConfig($config = null, $value = null)
    {
        // Check if the $config property exists, and initialize it if it doesn't.
    if (!isset($this->dbConfig)) {
        $this->dbConfig = [];
    }

    if ($config === null) {
        // Return the entire configuration array when $config is null.
        return $this->dbConfig;
    } elseif (is_array($config)) {
        // Merge the provided configuration array into the existing one.
        $this->dbConfig = array_merge($this->dbConfig, $config);
    } elseif (is_string($config)) {
        if ($value === null) {
            // Return the value associated with the specified configuration key.
            return $this->dbConfig[$config] ?? null;
        } else {
            // Set the value for the specified configuration key.
            $this->dbConfig[$config] = $value;
            return true;
        }
    }

    return null;
    }

    /**
     * Sets the database name
     *
     * @param  string $dbname
     * @return static
     */
    public function dbname($dbname)
    {
        $this->dbConfig['dbname'] = $dbname;

        return $this;
    }
}

