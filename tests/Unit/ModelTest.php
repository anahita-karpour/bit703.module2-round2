<?php


namespace Tests\Unit;

use Tests\Support\UnitTester;
use \BIT703\Models\UserModel as UserModel;

class ModelTest extends \Codeception\Test\Unit
{
    protected UnitTester $tester;
    private $model;

    protected function _before()
    {
        $this -> model = new UserModel();
    }

    // tests
    public function testGetUser()
    {
        $user = $this->model->getUser(1);
        $this->assertInstanceOf('\BIT703\Model', $user);
    }
}
