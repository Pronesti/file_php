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
        return file_get_contents($this->path);;
    }
    public function save($data)
    {
        return file_put_contents($this->filePath, $data); // FILE_APPEND 3rd 
    }
}
