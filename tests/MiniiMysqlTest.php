<?php

use MinichanMysql\MiniMysql;
use PHPUnit\Framework\TestCase;

class MiniiMysqlTest extends TestCase {
    public function testInsertNormal()
    {

        $config = array(
            'host' => '127.0.0.1',
            'port' => 3306,
            'dbname' => 'user_auth',
            'username' => 'tester',
            'password' => 'testeR123()!',
            'charset' => 'utf8',
            'prefix' => 'db_pre_',
        );
        
        $db = new MiniMysql($config);

        $data = [
            'username' => 'test',
            'password' => 'test',
        ];

        $result = $db->table('users')->insert($data);

        // Assert that the result is a positive integer (last insert ID)
        $this->assertGreaterThan(0, $result);
    }
}