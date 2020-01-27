<?php

namespace Blogs;

class FileStore
{
    private $fileContent;
    public function __construct($path)
    {
        if (!file_exists($path)) {
            fopen($path, 'w');
            $this->fileContent = file_get_contents($path, true);
            $this->filePath = $path;
        } else {
            $this->fileContent = file_get_contents($path, true);
            $this->filePath = $path;
        }
    }

    public function read()
    {
        return $this->fileContent;
    }
    public function save($data)
    {
        return file_put_contents($this->filePath, $data); // FILE_APPEND 3rd 
    }
}
