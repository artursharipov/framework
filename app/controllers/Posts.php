<?php
namespace app\controllers;

class Posts extends \vendor\core\base\Controller{

    public function indexAction()
    {
        echo 'Posts';
    }

    public function testPageAction()
    {
        print_r($this->route);
        echo 'testPage';
    }

    public function before()
    {

    }
}