<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\UsersController Test Case
 *
 * @uses \App\Controller\UsersController
 */
class UsersControllerTest extends TestCase
{
    use IntegrationTestTrait;
    /**
     * Test view method
     *
     * @return void
     */
    public function testgetAllUsersWork()
    {
        $this->get('/users/getAllUsers');
        $this->assertResponseOk();
    }

    public function testgetDataUser()
    {
        $response = $this->get('/users/getAllUsers');
        $this->assertResponseCode(200);
    }
}
