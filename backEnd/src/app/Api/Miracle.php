<?php
namespace App\Api;

use PhalApi\Api;
class Miracle extends Api{
    public function word()
    {
        return array("title"=>"hello_word");
    }
}