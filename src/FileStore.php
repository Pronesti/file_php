<?php

namespace Blogs;

class FileStore
{
    private $filePath;
    public function __construct($path)
    {
        $this->filePath = $path;
    }

    public function read()
    {
        return explode(",",file_get_contents($this->filePath));
    }
    public function save(array $data)
    {
        return file_put_contents($this->filePath, implode(",",$data));
    }
}
