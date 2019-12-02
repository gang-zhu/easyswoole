<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/22
 * Time: 14:47
 */

namespace EasySwoole\ORM\Tests;

use EasySwoole\Mysqli\QueryBuilder;
use EasySwoole\ORM\Db\Config;
use EasySwoole\ORM\Db\Connection;
use EasySwoole\ORM\DbManager;
use PHPUnit\Framework\TestCase;

class ErrorTest extends TestCase
{
    /**
     * @var $connection Connection
     */
    protected $connection;
    protected $tableName = 'user_test_list';
    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $config = new Config(MYSQL_CONFIG);
        $this->connection = new Connection($config);
        DbManager::getInstance()->addConnection($this->connection);
        $connection = DbManager::getInstance()->getConnection();
        $this->assertTrue($connection === $this->connection);
    }


    public function testGet()
    {
        $model = TestUserModel::create();
        $testUserModel = $model->where("xxx", 1)->get("");
        $this->assertFalse($testUserModel);
        if ($model->lastQueryResult()->getLastErrorNo() !== 0 ){
            $this->assertIsString($model->lastQueryResult()->getLastError());
        }

    }

    public function testSave()
    {
        // insert 不存在的字段
        $model = TestUserModel::create();
        $model->test = 123;
        $res = $model->save(false , false);
        $this->assertFalse($res);
    }

    // 全部字段为null  id自增
    public function testSaveNull()
    {// 没有准备表结构 本地临时测试通过
        // $model = TestUserListModel::create();
        // $res = $model->save();
        // $this->assertIsInt($res);
    }
}