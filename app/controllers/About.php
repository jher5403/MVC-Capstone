<?php
namespace Controller;

defined('ROOTPATH') OR exit('Error: Access denied.');

class About
{
    use MainController;

    public function index()
    {
        $this->view('about');
    }
}