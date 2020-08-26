<?php
namespace QiNiu\FileUpload;
use http\Env;

class FileUpload
{
      protected $key = null;
      protected $se  = null;

      public function __construct()
      {
        $this->key = env();
        $this->se = env();
      }

      public function upload($File)
      {

      }
}