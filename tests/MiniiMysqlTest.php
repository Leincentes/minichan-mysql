<?php

include_once 'vendor/autoload.php';

use MinichanMysql\MiniMysql;
use PHPUnit\Framework\TestCase;

class MiniiMysqlTest extends TestCase {

    protected $db;

    public function setUp(): void 
    {
        $this->db = new MiniMysql([
            'host' => '127.0.0.1',
            'port' => 3306,
            'dbname' => 'user_auth',
            'username' => 'tester',
            'password' => 'testeR123()!',
            'charset' => 'utf8',
            'prefix' => 'db_pre_',
        ]);
    }
    public function testInsertNormal()
    {
        $data = [
            'username' => 'test',
            'password' => 'test',
        ];

        $result = $this->db->table('users')->insert($data);

        $this->assertGreaterThan(0, $result);
    }
    public function testUpdateMethod()
    {
        $data = [
            'username' => 'foo',
            'password' => 'foo@ba1r.com',
        ];

        $where = [
            'id' => 13,
        ];

        $table = 'users';

        $result = $this->db->update($data, $where, $table, true);

        $this->assertGreaterThan(0, $result);
    }
    public function testDeleteMethod()
    {
        $where = ['id' => 1];
        $table = 'users';
        $fetch = false;

        $result = $this->db->delete($where, $table, $fetch);

        $this->assertGreaterThanOrEqual(0, $result);
    }
    public function testHasMethod()
    {
        $where = ['id' => 1];

        $result = $this->db->table('users')->has($where);

        $this->assertIsBool($result);
    }
    public function testGetMethdo()
    {
        $where = ['id' => 1];

        $result = $this->db->table('users')->get($where);

        $this->assertIsBool($result);
    }
}