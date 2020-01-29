<?php
require_once("../vendor/autoload.php");

use PHPUnit\Framework\TestCase;
use \Blogs\FileStore;
use \Blogs\UserService;

class TestUserService extends TestCase
{
    public function testExisteLaClase()
    {
        $this->assertTrue(class_exists(UserService::class));
    }
    public function testGetAllUsers()
    {
        $us = new UserService();
        $this->assertIsArray($us->getAllUsers());
    }
    public function testSaveUser()
    {
        $us = new UserService();
        $this->assertNotFalse($us->saveUser("Diego"));
    }
    public function testUserExists()
    {
        $us = new UserService();
        $this->assertTrue($us->userExists("Diego"));
    }
}
