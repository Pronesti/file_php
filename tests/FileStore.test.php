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
        $this->assertIsArray($archivo->read());
    }
    public function testSave(){
        $archivo = new FileStore("test.json");
        $this->assertNotFalse($archivo->save(["holis"]));
    }
    public function testSaveAndRead(){
        $archivo = new FileStore("test2.json");
        $archivo->save(["holis","chau"]); // -> esta linea convierte esto a string quedaria holis, chau
        $this->assertSame(["holis","chau"], $archivo->read()); // esta linea convierte el string devuelta a array
    }
}
