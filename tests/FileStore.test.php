<?php
require_once("../vendor/autoload.php");

use PHPUnit\Framework\TestCase;
use \Blogs\FileStore;

class TestFileStore extends TestCase{
    public function testExisteLaClase(){
        $archivo = new FileStore("test.json");
        $this->assertTrue(class_exists(FileStore::class));
    }
    public function testRead(){
        $archivo = new FileStore("test.json");
        $this->assertIsString($archivo->read());
    }
    public function testSave(){
        $archivo = new FileStore("test.json");
        $this->assertNotFalse($archivo->save("holis"));
    }
    public function testSaveAndRead(){
        $archivo = new FileStore("test2.json");
        $archivo->save("holis");
        $this->assertSame("holis", $archivo->read());
    }
}
