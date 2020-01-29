<?php
require_once("../vendor/autoload.php");

use PHPUnit\Framework\TestCase;
use \Blogs\FileStore;
use \Blogs\BlogService;

class TestBlogService extends TestCase{
    public function testExisteLaClase(){
        $this->assertTrue(class_exists(BlogService::class));
    }
    public function testSavePost(){
        $bs = new BlogService();
        $this->assertNotFalse($bs->savePost("holis", "Diego"));
    }
    public function testGetAllPosts(){
        $bs = new BlogService();
        $this->assertNotFalse($bs->savePost("holis", "Diego"));
        $this->assertIsArray($bs->getAllPosts("Diego"));
    }
}
