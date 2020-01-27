<?php
require_once("../vendor/autoload.php");

use PHPUnit\Framework\TestCase;

class TestFileStore extends TestCase{
    // public function testExisteLaClase(){
    //     $archivo = new \Blogs\FileStore("test.json");
    //     $this->assertTrue(class_exists("FileStore", true));
    // }
    public function testRead(){
        $archivo = new \Blogs\FileStore("test.json");
        $this->assertIsString($archivo->read());
    }
    public function testSave(){
        $archivo = new \Blogs\FileStore("test.json");
        $this->assertNotFalse($archivo->save("holis"));
    }
    public function testSaveAndRead(){
        $archivo = new \Blogs\FileStore("test2.json");
        $archivo->save("holis");
        $this->assertSame("holis", $archivo->read());
    }
}
