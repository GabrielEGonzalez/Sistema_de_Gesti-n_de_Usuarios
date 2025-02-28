<?php

class Core
{

    public $ref;

    public function getUrl()
    {
        $this->ref = $_SERVER['REQUEST_URI'];
        return $this->ref;
    }
}