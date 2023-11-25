# MiniMysql
A minimal PHP database MYSQL framework.

# Installation
```bash
composer require leinc/minichan-mysql
```

# Main Features
- Supports transaction callback operations
- Support for split - sheet callback processing data
- Supports cache query data
- Supports multiple table queries
- Support multiple data bindings
- Data security filtering guarantee
- Introduction, packaging is easier
- Common database operation functions
- WHERE combination conditions vary

# Requirement
- PHP 5.5+
- Support the PDO, extension `pdo_mysql` installed

# Usage

```php

declare(strict_types=1);
use MinichanMysql\MiniMysql;
require_once 'vendor/autoload.php';

// Config and connect server
$config = array(
    'host' => '127.0.0.1',
    'port' => 3306,
    'dbname' => 'dbname',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'prefix' => 'db_pre_',
);

$db = new MiniMysql($config);
$data = $db->table('admin')->field('id')->getList();

```