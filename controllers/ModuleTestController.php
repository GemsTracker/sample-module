<?php

class ModuleTestController extends \Gems_Controller_Action
{
    public function indexAction()
    {
        $this->init();

        echo "<h1>Hello, the sample module is installed correctly!</h1>";
    }
}
